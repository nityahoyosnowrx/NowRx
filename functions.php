<?php
/*
Author: Eddie Machado
URL: http://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, etc.
*/

// LOAD BONES CORE (if you remove this, the theme will break)
require_once('library/bones.php');

// CUSTOMIZE THE WORDPRESS ADMIN (off by default)
// require_once( 'library/admin.php' );

/*********************
LAUNCH BONES
Let's get everything up and running.
 *********************/

function bones_ahoy()
{

  //Allow editor style.
  // add_editor_style( get_stylesheet_directory_uri() . '/library/css/editor-style.css' );

  // let's get language support going, if you need it
  // load_theme_textdomain( 'bonestheme', get_template_directory() . '/library/translation' );

  // USE THIS TEMPLATE TO CREATE CUSTOM POST TYPES EASILY
  require_once('library/custom-post-type.php');

  // launching operation cleanup
  add_action('init', 'bones_head_cleanup');
  // A better title
  add_filter('wp_title', 'rw_title', 10, 3);
  // remove WP version from RSS
  add_filter('the_generator', 'bones_rss_version');
  // remove pesky injected css for recent comments widget
  add_filter('wp_head', 'bones_remove_wp_widget_recent_comments_style', 1);
  // clean up comment styles in the head
  add_action('wp_head', 'bones_remove_recent_comments_style', 1);
  // clean up gallery output in wp
  add_filter('gallery_style', 'bones_gallery_style');

  // enqueue base scripts and styles
  // add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 );




  // ie conditional wrapper

  // launching this stuff after theme setup
  bones_theme_support();

  // adding sidebars to Wordpress (these are created in functions.php)
  add_action('widgets_init', 'bones_register_sidebars');

  // cleaning up random code around images
  add_filter('the_content', 'bones_filter_ptags_on_images');
  // cleaning up excerpt
  add_filter('excerpt_more', 'bones_excerpt_more');
} /* end bones ahoy */

// let's get this party started
add_action('after_setup_theme', 'bones_ahoy');

//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
  wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


/**
 * Disable the emoji's
 */
function disable_emojis()
{
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
  add_filter('wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2);
}
add_action('init', 'disable_emojis');


function my_deregister_scripts()
{
  wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'my_deregister_scripts');

/************* OEMBED SIZE OPTIONS *************/

if (!isset($content_width)) {
  $content_width = 680;
}

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size('bones-thumb-600', 600, 150, true);
add_image_size('bones-thumb-300', 300, 100, true);

/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 100 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 150 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

add_filter('image_size_names_choose', 'bones_custom_image_sizes');

function bones_custom_image_sizes($sizes)
{
  return array_merge($sizes, array(
    'bones-thumb-600' => __('600px by 150px'),
    'bones-thumb-300' => __('300px by 100px'),
  ));
}

/*
The function above adds the ability to use the dropdown menu to select
the new images sizes you have just created from within the media manager
when you add media to your content blocks. If you add more image sizes,
duplicate one of the lines in the array and name it according to your
new image size.
*/

/************* THEME CUSTOMIZE *********************/

/*
A good tutorial for creating your own Sections, Controls and Settings:
http://code.tutsplus.com/series/a-guide-to-the-wordpress-theme-customizer--wp-33722

Good articles on modifying the default options:
http://natko.com/changing-default-wordpress-theme-customization-api-sections/
http://code.tutsplus.com/tutorials/digging-into-the-theme-customizer-components--wp-27162

To do:
- Create a js for the postmessage transport method
- Create some sanitize functions to sanitize inputs
- Create some boilerplate Sections, Controls and Settings
*/

function bones_theme_customizer($wp_customize)
{
  // $wp_customize calls go here.
  //
  // Uncomment the below lines to remove the default customize sections

  // $wp_customize->remove_section('title_tagline');
  // $wp_customize->remove_section('colors');
  // $wp_customize->remove_section('background_image');
  // $wp_customize->remove_section('static_front_page');
  // $wp_customize->remove_section('nav');

  // Uncomment the below lines to remove the default controls
  // $wp_customize->remove_control('blogdescription');

  // Uncomment the following to change the default section titles
  // $wp_customize->get_section('colors')->title = __( 'Theme Colors' );
  // $wp_customize->get_section('background_image')->title = __( 'Images' );
}

add_action('customize_register', 'bones_theme_customizer');

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars()
{
  register_sidebar(array(
    'id' => 'sidebar1',
    'name' => __('Sidebar 1', 'bonestheme'),
    'description' => __('The first (primary) sidebar.', 'bonestheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));

  /*
to add more sidebars or widgetized areas, just copy
and edit the above sidebar code. In order to call
your new sidebar just use the following code:

Just change the name to whatever your new
sidebar's id is, for example:
*/

  register_sidebar(array(
    'id' => 'sidebar2',
    'name' => __('Sidebar 2', 'bonestheme'),
    'description' => __('The second (secondary) sidebar.', 'bonestheme'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));
  /*
To call the sidebar in your template, you can just copy
the sidebar.php file and rename it to your sidebar's name.
So using the above example, it would be:
sidebar-sidebar2.php
*/
} // don't remove this bracket!


/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment; ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('cf'); ?>>
    <article class="cf">
      <header class="comment-author vcard">
        <?php
        /*
          this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
          echo get_avatar($comment,$size='32',$default='<path_to_url>' );
        */
        ?>
        <?php // custom gravatar call
        ?>
        <?php
        // create variable
        $bgauthemail = get_comment_author_email();
        ?>
        <img data-gravatar="http://www.gravatar.com/avatar/<?php echo md5($bgauthemail); ?>?s=40" class="load-gravatar avatar avatar-48 photo" height="40" width="40" src="<?php echo get_template_directory_uri(); ?>/library/images/nothing.gif" />
        <?php // end custom gravatar call
        ?>
        <?php printf(__('<cite class="fn">%1$s</cite> %2$s', 'bonestheme'), get_comment_author_link(), edit_comment_link(__('(Edit)', 'bonestheme'), '  ', '')) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php comment_time(__('F jS, Y', 'bonestheme')); ?>
          </a></time>

      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php _e('Your comment is awaiting moderation.', 'bonestheme') ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php comment_text() ?>
      </section>
      <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </article>
    <?php // </li> is added by WordPress automatically
    ?>
    <?php
  } // don't remove this bracket!


  /*
This is a modification of a function found in the
twentythirteen theme where we can declare some
external fonts. If you're using Google Fonts, you
can replace these fonts, change it in your scss files
and be up and running in seconds.
*/
  // function bones_fonts() {
  //   wp_enqueue_style('googleFonts', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
  // }

  add_action('wp_enqueue_scripts', 'bones_fonts');

  function cc_mime_types($mimes)
  {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');





  add_filter('body_class', 'my_class_names');
  function my_class_names($classes)
  {
    // add 'class-name' to the $classes array
    $classes[] = 'class-name';
    // return the $classes array
    return $classes;
  }

  function pagination_bar($custom_query)
  {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1) {
      $current_page = max(1, get_query_var('paged'));

      echo paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => $current_page,
        'total' => $total_pages,
      ));
    }
  }


  // remove Yoast SEO
  //disable Yoast SEO @Person schema on posts
  add_filter('wpseo_schema_needs_author', '__return_false');

  //change Yoast SEO article schema author to the organization
  add_filter('wpseo_schema_article', 'change_article_author');

  /**
   * Change @type of Article Schema data.
   *
   * @param array $data Schema.org Article data array.
   *
   * @return array $data Schema.org Article data array.
   */
  function change_article_author($data)
  {
    $data['author'] = 'Your Organisation Name Here';
    return $data;
  }








  add_action('wp', 'custom1');

  function custom1()
  {
    global $post;
    if (is_single() & 'post' == $post->post_type) {
      add_filter('wpseo_json_ld_output', '__return_false');
    }
  }






  /*
* Creating a function to create our CPT
*/

  function custom_post_type()
  {

    // Set UI labels for Custom Post Type
    $labels = array(
      'name'                => _x('locations', 'Post Type General Name', 'twentytwenty'),
      'singular_name'       => _x('location', 'Post Type Singular Name', 'twentytwenty'),
      'menu_name'           => __('locations', 'twentytwenty'),
      'parent_item_colon'   => __('Parent location', 'twentytwenty'),
      'all_items'           => __('All locations', 'twentytwenty'),
      'view_item'           => __('View location', 'twentytwenty'),
      'add_new_item'        => __('Add New location', 'twentytwenty'),
      'add_new'             => __('Add New', 'twentytwenty'),
      'edit_item'           => __('Edit location', 'twentytwenty'),
      'update_item'         => __('Update location', 'twentytwenty'),
      'search_items'        => __('Search location', 'twentytwenty'),
      'not_found'           => __('Not Found', 'twentytwenty'),
      'not_found_in_trash'  => __('Not found in Trash', 'twentytwenty'),
    );

    // Set other options for Custom Post Type

    $args = array(
      'label'               => __('locations', 'twentytwenty'),
      'description'         => __('location news and reviews', 'twentytwenty'),
      'labels'              => $labels,
      // Features this CPT supports in Post Editor
      'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes'),
      // You can associate this CPT with a taxonomy or custom taxonomy.
      'taxonomies'          => array('genres'),
      /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('locations', $args);
  }

  /* Hook into the 'init' action so that the function
  * Containing our post type registration is not
  * unnecessarily executed.
  */

  add_action('init', 'custom_post_type', 0);





  // redirect 404 page for custom post type
  // add_action('template_redirect', 'unlisted_jobs_redirect');
  function unlisted_jobs_redirect()
  {
    //check for 404
    if (is_404()) {
      global $wp_query;
      //check that wp has figured out post_type from the request
      //and it's the type you're looking for
      if (isset($wp_query->query['post_type']) && $wp_query->query['post_type'] == 'locations') {
        // then redirect to yourdomain.com/jobs/
        wp_redirect(home_url('/404-locations/'));
        exit();
      }
    }
  }

  // custom 404 page for custom post type
  $check_page_exist = get_page_by_title('404-locations', 'OBJECT', 'page');
  // Check if the page already exists
  if (empty($check_page_exist)) {
    $page_id = wp_insert_post(
      array(
        'comment_status' => 'close',
        'ping_status'    => 'close',
        'post_author'    => 1,
        'post_title'     => ucwords('404-locations'),
        'post_name'      => strtolower(str_replace(' ', '-', trim('404-locations'))),
        'post_status'    => 'publish',
        'post_content'   => 'Content of the page',
        'post_type'      => 'page',
        'post_parent'    => 'id_of_the_parent_page_if_it_available'
      )
    );
  }



  // make single posts have custom templates
  function add_posttype_slug_template($single_template)
  {
    $object = get_queried_object();
    $single_postType_postName_template = locate_template("single-{$object->post_type}-{$object->post_name}.php");
    if (file_exists($single_postType_postName_template)) {
      return $single_postType_postName_template;
    } else {
      return $single_template;
    }
  }
  add_filter('single_template', 'add_posttype_slug_template', 10, 1);






  function my_acf_google_map_api($api)
  {

    $api['key'] = 'AIzaSyAmMty5MmMXegrIhIhMHDWOqIu6RQ6m9vg';

    return $api;
  }

  add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


  /**
   * Remove hentry from post_class
   */
  function isa_remove_hentry_class($classes)
  {
    if (is_single()) {
      $classes = array_diff($classes, array('hentry'));
    }
    return $classes;
  }
  add_filter('post_class', 'isa_remove_hentry_class');






  add_filter('wpseo_json_ld_output', 'yoast_seo_json_remove_partial');
  function yoast_seo_json_remove_partial()
  {
    // if ( is_front_page () || is_page() || is_archive()  || is_home()  ) {
    return false;
    // }
  }






  // // functions.php
  // add_filter( 'wpseo_schema_graph_pieces', 'remove_breadcrumbs_from_schema', 11, 2 );

  // function remove_breadcrumbs_from_schema( $pieces, $context ) {
  //   if ( is_singular ('locations')  ) {
  //     return \array_filter( $pieces, function( $piece ) {
  //         return ! $piece instanceof \Yoast\WP\SEO\Generators\Schema\Organization;
  //     } );
  //   }
  // }

  // // functions.php
  // add_filter( 'wpseo_schema_graph_pieces', 'remove_breadcrumbs_from_schemawebsite', 11, 2 );

  // function remove_breadcrumbs_from_schemawebsite( $pieces, $context ) {
  //   if ( is_singular ('locations')  ) {
  //     return \array_filter( $pieces, function( $piece ) {
  //         return ! $piece instanceof \Yoast\WP\SEO\Generators\Schema\Website;
  //     } );
  //   }
  // }

  // // functions.php
  // add_filter( 'wpseo_schema_graph_pieces', 'remove_breadcrumbs_from_schemawebpage', 11, 2 );

  // function remove_breadcrumbs_from_schemawebpage( $pieces, $context ) {
  //   if ( is_singular ('locations')  ) {
  //     return \array_filter( $pieces, function( $piece ) {
  //         return ! $piece instanceof \Yoast\WP\SEO\Generators\Schema\WebPage;
  //     } );
  //   }
  // }


  add_action('wp_footer', 'clicknathan_schema_breadcrumbs');
  function clicknathan_schema_breadcrumbs()
  {


    $post_id = get_option('page_for_posts');
    $post = get_post($post_id);
    $slug = $post->post_name;
    $blog_posts_page_slug = '/' . $slug;
    $site_name = get_bloginfo('blogname');


    if (!is_search()) { ?>
      <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [<?php if (is_singular()) { // if on a single blog post
                              ?> {
                "@type": "ListItem",
                "position": 1,
                "item": {
                  "@id": "<?php echo get_site_url('url') . $blog_posts_page_slug; ?>",
                  "name": "<?php echo $site_name; ?>"
                }
              },
              {
                "@type": "ListItem",
                "position": 2,
                "item": {
                  "@id": "<?php echo get_permalink(); ?>",
                  "name": "<?php echo get_the_title(); ?>"
                }
              }
            <?php } elseif (is_singular('product')) { // if on a single product page
                                global $post;
                                $terms = wp_get_object_terms($post->ID, 'product_cat');
                                if (!is_wp_error($terms)) {
                                  $product_category_slug = $terms[0]->slug;
                                  $product_category_name = $terms[0]->name;
                                }
            ?> {
                "@type": "ListItem",
                "position": 1,
                "item": {
                  "@id": "<?php echo get_bloginfo('url'); ?>/products/<?php echo $product_category_slug; ?>/",
                  "name": "<?php echo $product_category_name; ?>"
                }
              },
              {
                "@type": "ListItem",
                "position": 2,
                "item": {
                  "@id": "<?php echo get_permalink(); ?>",
                  "name": "<?php echo get_the_title(); ?>"
                }
              }
            <?php } elseif (is_page() && !is_front_page()) { // if on a regular WP Page
                                global $post;
                                if (is_page() && $post->post_parent) { // if is a child page
                                  $post_data = get_post($post->post_parent);
                                  $parent_page_slug = $post_data->post_name;
                                  $parent_page_url = get_bloginfo('url') . '/' . $parent_page_slug . '/';
                                  $parent_page_title = ucfirst($parent_page_slug);
                                  $position_number = '2';
                                } else {
                                  $page_url = get_permalink();
                                  $page_title = '';
                                  $position_number = '1';
                                } ?>
              <?php if (is_page() && $post->post_parent) { ?> {
                  "@type": "ListItem",
                  "position": 1,
                  "item": {
                    "@id": "<?php echo $parent_page_url; ?>",
                    "name": "<?php echo $parent_page_title; ?>"
                  }
                },
              <?php } ?> {
                "@type": "ListItem",
                "position": <?php echo $position_number; ?>,
                "item": {
                  "@id": "<?php echo get_permalink(); ?>",
                  "name": "<?php echo get_the_title(); ?>"
                }
              }
            <?php } elseif (is_home()) { // if on the blog page
            ?> {
                "@type": "ListItem",
                "position": 1,
                "item": {
                  "@id": "<?php echo get_site_url('url') . $blog_posts_page_slug; ?>",
                  "name": "<?php echo $site_name; ?>"
                }
              }
            <?php } elseif (is_category() || is_tag()) { ?> {
                "@type": "ListItem",
                "position": 1,
                "item": {
                  "@id": "<?php echo get_site_url('url') . $blog_posts_page_slug; ?>",
                  "name": "<?php echo $site_name; ?>"
                }
              },
              {
                "@type": "ListItem",
                "position": 2,
                "item": {
                  "@id": "<?php echo 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>",
                  "name": "<?php if (is_category()) {
                                  echo single_cat_title('', false);
                                } else {
                                  echo single_tag_title('', false);
                                } ?>"
                }
              }
            <?php } elseif (is_tax('product_cat') || is_tax('product_tag')) { // product category and taxonomy pages
                                global $post;
                                $termname = get_query_var('term');
                                $termname = ucfirst($termname); ?> {
                "@type": "ListItem",
                "position": 1,
                "item": {
                  "@id": "<?php echo get_bloginfo('url'); ?>",
                  "name": "Store"
                }
              },
              {
                "@type": "ListItem",
                "position": 2,
                "item": {
                  "@id": "<?php echo 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>",
                  "name": "<?php echo $termname; ?>"
                }
              }
            <?php } elseif (is_archive()) { // date based archives and a catch all for the rest
            ?> {
                "@type": "ListItem",
                "position": 1,
                "item": {
                  "@id": "<?php echo get_site_url('url') . $blog_posts_page_slug; ?>",
                  "name": "<?php echo $site_name; ?>"
                }
              },
              {
                "@type": "ListItem",
                "position": 2,
                "item": {
                  "@id": "<?php echo 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>",
                  "name": "Archives"
                }
              }
            <?php } else { ?> {
                "@type": "ListItem",
                "position": 1,
                "item": {
                  "@id": "<?php echo 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>",
                  "name": "Page"
                }
              }
            <?php } ?>
          ]
        }
      </script>
  <?php }
  }



function wpb_filter_query($query, $error = true){
  if (is_search()) {
    $query->is_search = false;
    $query->query_vars[s] = false;
    $query->query[s] = false;
    if ($error == true)
      $query->is_404 = true;
  }
}

add_action('parse_query', 'wpb_filter_query');

add_filter('get_search_form', create_function('$a', "return null;"));





// Hook <strong>resource_post_type()</strong> to the init action hook
add_action( 'init', 'resource_post_type' );

// The custom function to register a Resource post type
function resource_post_type() {

  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Resources' ),
    'singular_name'      => __( 'Resource' ),
    'add_new'            => __( 'Add New Resource' ),
    'add_new_item'       => __( 'Add New Resource' ),
    'edit_item'          => __( 'Edit Resource' ),
    'new_item'           => __( 'New Resource' ),
    'all_items'          => __( 'All Resources' ),
    'view_item'          => __( 'View Resources' ),
    'search_items'       => __( 'Search Resources' )
  );

  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our Resources',
      // Features this CPT supports in Post Editor
      'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes'),
      // You can associate this CPT with a taxonomy or custom taxonomy.
      'taxonomies'          => array('subjects'),
      /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'show_in_rest' => true,
  );

  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // $args array goes in parameter 2.
  register_post_type( 'resource', $args);
}


//hook into the init action and call create_book_taxonomies when it fires

add_action( 'init', 'create_resource_category', 0 );

//create a custom taxonomy name it subjects for your posts

function create_resource_category() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Subjects', 'taxonomy general name' ),
    'singular_name' => _x( 'Subject', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Subjects' ),
    'all_items' => __( 'All Subjects' ),
    'parent_item' => __( 'Parent Subject' ),
    'parent_item_colon' => __( 'Parent Subject:' ),
    'edit_item' => __( 'Edit Subject' ),
    'update_item' => __( 'Update Subject' ),
    'add_new_item' => __( 'Add New Subject' ),
    'new_item_name' => __( 'New Subject Name' ),
    'menu_name' => __( 'Subjects' ),
  );

// Now register the taxonomy
  register_taxonomy('subjects',array('books'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'subject' ),
  ));

}