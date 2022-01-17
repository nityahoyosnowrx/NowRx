<?php get_header(); ?>

<?php

if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
?>
<?php
    $author_id = get_the_author_meta( 'ID' );
?>

<?php
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');

    $id = get_the_ID();
    $yoast_desc = get_post_meta( $id, '_yoast_wpseo_metadesc', true );

    global $post;
    $currentPage = $post->ID;
?>

<script type="application/ld+json" >
{
    "@context": "https://schema.org",
    "@type": "NewsArticle",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php the_permalink(); ?>"
    },
    "headline": "<?php the_title(); ?>",
    "articleBody": "<?php echo esc_attr(   strip_tags(get_the_content()) ); ?>",
    "image": "<?php echo $image[0]; ?>",
    "author": {
        "@type": "Person",
        "name": "<?php echo get_the_author_meta( 'nickname', $author_id ); ?>"
    },
    "publisher": {
        "@type": "Organization",
        "name": "NowRx Pharmacy",
        "logo": {
            "@type": "ImageObject",
            "url": "<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Delivery-Logo.webp"
        }
    },
    "datePublished": "<?php echo get_the_date( 'D, M d Y - h:i a' ); ?>",
    "dateModified": "<?php echo get_the_modified_date(); ?>"
}
</script>

<?php endwhile; endif; ?>

<section class="blog" id="blog">
    <main id="main" class="" role="main">
        <div class="grid-container">
            <div class="large-12 cell">
                <div class="main-content">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <?php get_template_part( 'post-formats/format', get_post_format() ); ?>
                        <?php
                        endwhile; ?>
                    <?php
                    else :
                    ?>

                    <article id="post-not-found" class=" cf">
                        <header class="article-header">
                            <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                        </header>
                        <section class="entry-content">
                            <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?>
                            </p>
                        </section>
                        <footer class="article-footer">
                            <p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
                        </footer>
                    </article>

                    <?php
                    endif;
                    ?>

                    <div class="sidebar-articles">
                        <div class="sidebarauthor">
                            <div class="article-data">
                                <?php global $wp; ?>
                            </div>
                        </div>
                        <div class="MostPopular-wrapper MostPopular-taboolaContainer">
                            <div class="MostPopular-header">
                                Trending Now
                                <div class="MostPopular-headerDivider"></div>
                            </div>
                            <div class="MostPopular-slide">
                                <ol class="MostPopular-list">
                                    <?php
                                    // Example argument that defines three posts per page.
                                    $args = array( 'posts_per_page' => 4 , 'order'=>'rand','tag' => 'trending',  );

                                    // Variable to call WP_Query.
                                    $trendloop = new WP_Query( $args );

                                    if ( $trendloop->have_posts() ) :
                                        // Start the Loop
                                        while ( $trendloop->have_posts() ) : $trendloop->the_post();
                                        if($currentPage == get_the_ID()){
                                            continue;
                                        }
                                    ?>

                                    <li class="MostPopular-addIndex">
                                        <a href="<?php  echo get_the_permalink();  ?>" class="MostPopular-link">
                                            <span class="posthumb">
                                                <?php if ( has_post_thumbnail( $post->ID ) ): ?>
                                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); ?>
                                                    <img class="MostPopular-thumbnail transition-fade-appear-active lozad"
                                                        data-src="<?php echo $image[0]; ?>"
                                                        alt="<?php echo get_post_meta( get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true ); ?>" />
                                                <?php else: ?>
                                                    <img class="MostPopular-thumbnail transition-fade-appear-active lozad"
                                                        data-src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg"
                                                        alt="<?php  the_title();  ?>" />
                                                <?php endif; ?>
                                            </span>
                                        </a>
                                        <a href="<?php echo get_the_permalink(); ?>"
                                            class="MostPopular-link title">
                                            <?php the_title(); ?>
                                        </a>
                                        <div class="clk">
                                            <div class="data">
                                                <a href="<?php the_permalink(); ?>/" class="readlink">
                                                    <?php echo get_the_date('F j Y ');   ?>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="wd">
                                                    <a href="<?php the_permalink(); ?>/" class="readmore">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php
                                    // End the Loop
                                    endwhile;
                                    else:
                                    // If no posts match this query, output this text.
                                        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                                    endif;
                                    wp_reset_postdata();
                                    ?>
                                </ol>
                            </div>
                        </div>
                        <div class="banner-call">
                            <h3 class="title">
                                Get health tips, medication info, and pharmacy resources right to your inbox.
                            </h3>
                            <div class="formblog">
                                <div id="form-container">

                                    <div id="colophon" class="site-footer">

                                        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/3.0.0/noframework.waypoints.min.js"></script> -->

                                        <div id="hssubscribecode"></div>
                                        <div id="divFormHolder"></div>

                                        <script async>
/*!
Waypoints - 3.0.0
Copyright © 2011-2014 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/waypoints/blog/master/licenses.txt
*/
!function(){"use strict";function t(n){if(!n)throw new Error("No options passed to Waypoint constructor");if(!n.element)throw new Error("No element option passed to Waypoint constructor");if(!n.handler)throw new Error("No handler option passed to Waypoint constructor");this.key="waypoint-"+e,this.options=t.Adapter.extend({},t.defaults,n),this.element=this.options.element,this.adapter=new t.Adapter(this.element),this.callback=n.handler,this.axis=this.options.horizontal?"horizontal":"vertical",this.enabled=this.options.enabled,this.triggerPoint=null,this.group=t.Group.findOrCreate({name:this.options.group,axis:this.axis}),this.context=t.Context.findOrCreateByElement(this.options.context),t.offsetAliases[this.options.offset]&&(this.options.offset=t.offsetAliases[this.options.offset]),this.group.add(this),this.context.add(this),i[this.key]=this,e+=1}var e=0,i={};t.prototype.queueTrigger=function(t){this.group.queueTrigger(this,t)},t.prototype.trigger=function(t){this.enabled&&this.callback&&this.callback.apply(this,t)},t.prototype.destroy=function(){this.context.remove(this),this.group.remove(this),delete i[this.key]},t.prototype.disable=function(){return this.enabled=!1,this},t.prototype.enable=function(){return this.context.refresh(),this.enabled=!0,this},t.prototype.next=function(){return this.group.next(this)},t.prototype.previous=function(){return this.group.previous(this)},t.destroyAll=function(){var t=[];for(var e in i)t.push(i[e]);for(var n=0,o=t.length;o>n;n++)t[n].destroy()},t.refreshAll=function(){t.Context.refreshAll()},t.viewportHeight=function(){return window.innerHeight||document.documentElement.clientHeight},t.viewportWidth=function(){return document.documentElement.clientWidth},t.adapters=[],t.defaults={context:window,continuous:!0,enabled:!0,group:"default",horizontal:!1,offset:0},t.offsetAliases={"bottom-in-view":function(){return this.context.innerHeight()-this.adapter.outerHeight()},"right-in-view":function(){return this.context.innerWidth()-this.adapter.outerWidth()}},window.Waypoint=t}(),function(){"use strict";function t(t){window.setTimeout(t,1e3/60)}function e(t){this.element=t,this.Adapter=o.Adapter,this.adapter=new this.Adapter(t),this.key="waypoint-context-"+i,this.didScroll=!1,this.didResize=!1,this.oldScroll={x:this.adapter.scrollLeft(),y:this.adapter.scrollTop()},this.waypoints={vertical:{},horizontal:{}},t.waypointContextKey=this.key,n[t.waypointContextKey]=this,i+=1,this.createThrottledScrollHandler(),this.createThrottledResizeHandler()}var i=0,n={},o=window.Waypoint,r=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||t,s=window.onload;e.prototype.add=function(t){var e=t.options.horizontal?"horizontal":"vertical";this.waypoints[e][t.key]=t,this.refresh()},e.prototype.checkEmpty=function(){var t=this.Adapter.isEmptyObject(this.waypoints.horizontal),e=this.Adapter.isEmptyObject(this.waypoints.vertical);t&&e&&(this.adapter.off(".waypoints"),delete n[this.key])},e.prototype.createThrottledResizeHandler=function(){function t(){e.handleResize(),e.didResize=!1}var e=this;this.adapter.on("resize.waypoints",function(){e.didResize||(e.didResize=!0,r(t))})},e.prototype.createThrottledScrollHandler=function(){function t(){e.handleScroll(),e.didScroll=!1}var e=this;this.adapter.on("scroll.waypoints",function(){(!e.didScroll||o.isTouch)&&(e.didScroll=!0,r(t))})},e.prototype.handleResize=function(){o.Context.refreshAll()},e.prototype.handleScroll=function(){var t={},e={horizontal:{newScroll:this.adapter.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.adapter.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};for(var i in e){var n=e[i],o=n.newScroll>n.oldScroll,r=o?n.forward:n.backward;for(var s in this.waypoints[i]){var a=this.waypoints[i][s],l=n.oldScroll<a.triggerPoint,h=n.newScroll>=a.triggerPoint,p=l&&h,u=!l&&!h;(p||u)&&(a.queueTrigger(r),t[a.group.id]=a.group)}}for(var c in t)t[c].flushTriggers();this.oldScroll={x:e.horizontal.newScroll,y:e.vertical.newScroll}},e.prototype.innerHeight=function(){return this.element===this.element.window?o.viewportHeight():this.adapter.innerHeight()},e.prototype.remove=function(t){delete this.waypoints[t.axis][t.key],this.checkEmpty()},e.prototype.innerWidth=function(){return this.element===this.element.window?o.viewportWidth():this.adapter.innerWidth()},e.prototype.destroy=function(){var t=[];for(var e in this.waypoints)for(var i in this.waypoints[e])t.push(this.waypoints[e][i]);for(var n=0,o=t.length;o>n;n++)t[n].destroy()},e.prototype.refresh=function(){var t,e=this.element===this.element.window,i=this.adapter.offset(),n={};this.handleScroll(),t={horizontal:{contextOffset:e?0:i.left,contextScroll:e?0:this.oldScroll.x,contextDimension:this.innerWidth(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:e?0:i.top,contextScroll:e?0:this.oldScroll.y,contextDimension:this.innerHeight(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};for(var o in t){var r=t[o];for(var s in this.waypoints[o]){var a,l,h,p,u,c=this.waypoints[o][s],f=c.options.offset,d=c.triggerPoint,y=0,g=null==d;c.element!==c.element.window&&(y=c.adapter.offset()[r.offsetProp]),"function"==typeof f?f=f.apply(c):"string"==typeof f&&(f=parseFloat(f),c.options.offset.indexOf("%")>-1&&(f=Math.ceil(r.contextDimension*f/100))),a=r.contextScroll-r.contextOffset,c.triggerPoint=y+a-f,l=d<r.oldScroll,h=c.triggerPoint>=r.oldScroll,p=l&&h,u=!l&&!h,!g&&p?(c.queueTrigger(r.backward),n[c.group.id]=c.group):!g&&u?(c.queueTrigger(r.forward),n[c.group.id]=c.group):g&&r.oldScroll>=c.triggerPoint&&(c.queueTrigger(r.forward),n[c.group.id]=c.group)}}for(var w in n)n[w].flushTriggers();return this},e.findOrCreateByElement=function(t){return e.findByElement(t)||new e(t)},e.refreshAll=function(){for(var t in n)n[t].refresh()},e.findByElement=function(t){return n[t.waypointContextKey]},window.onload=function(){s&&s(),e.refreshAll()},o.Context=e}(),function(){"use strict";function t(t,e){return t.triggerPoint-e.triggerPoint}function e(t,e){return e.triggerPoint-t.triggerPoint}function i(t){this.name=t.name,this.axis=t.axis,this.id=this.name+"-"+this.axis,this.waypoints=[],this.clearTriggerQueues(),n[this.axis][this.name]=this}var n={vertical:{},horizontal:{}},o=window.Waypoint;i.prototype.add=function(t){this.waypoints.push(t)},i.prototype.clearTriggerQueues=function(){this.triggerQueues={up:[],down:[],left:[],right:[]}},i.prototype.flushTriggers=function(){for(var i in this.triggerQueues){var n=this.triggerQueues[i],o="up"===i||"left"===i;n.sort(o?e:t);for(var r=0,s=n.length;s>r;r+=1){var a=n[r];(a.options.continuous||r===n.length-1)&&a.trigger([i])}}this.clearTriggerQueues()},i.prototype.next=function(e){this.waypoints.sort(t);var i=o.Adapter.inArray(e,this.waypoints),n=i===this.waypoints.length-1;return n?null:this.waypoints[i+1]},i.prototype.previous=function(e){this.waypoints.sort(t);var i=o.Adapter.inArray(e,this.waypoints);return i?this.waypoints[i-1]:null},i.prototype.queueTrigger=function(t,e){this.triggerQueues[e].push(t)},i.prototype.remove=function(t){var e=o.Adapter.inArray(t,this.waypoints);e>-1&&this.waypoints.splice(e,1)},i.prototype.first=function(){return this.waypoints[0]},i.prototype.last=function(){return this.waypoints[this.waypoints.length-1]},i.findOrCreate=function(t){return n[t.axis][t.name]||new i(t)},o.Group=i}(),function(){"use strict";function t(t){return t===t.window}function e(e){return t(e)?e:e.defaultView}function i(t){this.element=t,this.handlers={}}var n=window.Waypoint;i.prototype.innerHeight=function(){var e=t(this.element);return e?this.element.innerHeight:this.element.clientHeight},i.prototype.innerWidth=function(){var e=t(this.element);return e?this.element.innerWidth:this.element.clientWidth},i.prototype.off=function(t,e){function i(t,e,i){for(var n=0,o=e.length-1;o>n;n++){var r=e[n];i&&i!==r||t.removeEventListener(r)}}var n=t.split("."),o=n[0],r=n[1],s=this.element;if(r&&this.handlers[r]&&o)i(s,this.handlers[r][o],e),this.handlers[r][o]=[];else if(o)for(var a in this.handlers)i(s,this.handlers[a][o]||[],e),this.handlers[a][o]=[];else if(r&&this.handlers[r]){for(var l in this.handlers[r])i(s,this.handlers[r][l],e);this.handlers[r]={}}},i.prototype.offset=function(){if(!this.element.ownerDocument)return null;var t=this.element.ownerDocument.documentElement,i=e(this.element.ownerDocument),n={top:0,left:0};return this.element.getBoundingClientRect&&(n=this.element.getBoundingClientRect()),{top:n.top+i.pageYOffset-t.clientTop,left:n.left+i.pageXOffset-t.clientLeft}},i.prototype.on=function(t,e){var i=t.split("."),n=i[0],o=i[1]||"__default",r=this.handlers[o]=this.handlers[o]||{},s=r[n]=r[n]||[];s.push(e),this.element.addEventListener(n,e)},i.prototype.outerHeight=function(e){var i,n=this.innerHeight();return e&&!t(this.element)&&(i=window.getComputedStyle(this.element),n+=parseInt(i.marginTop,10),n+=parseInt(i.marginBottom,10)),n},i.prototype.outerWidth=function(e){var i,n=this.innerWidth();return e&&!t(this.element)&&(i=window.getComputedStyle(this.element),n+=parseInt(i.marginLeft,10),n+=parseInt(i.marginRight,10)),n},i.prototype.scrollLeft=function(){var t=e(this.element);return t?t.pageXOffset:this.element.scrollLeft},i.prototype.scrollTop=function(){var t=e(this.element);return t?t.pageYOffset:this.element.scrollTop},i.extend=function(){function t(t,e){if("object"==typeof t&&"object"==typeof e)for(var i in e)e.hasOwnProperty(i)&&(t[i]=e[i]);return t}for(var e=Array.prototype.slice.call(arguments),i=1,n=e.length;n>i;i++)t(e[0],e[i]);return e[0]},i.inArray=function(t,e,i){return null==e?-1:e.indexOf(t,i)},i.isEmptyObject=function(t){for(var e in t)return!1;return!0},n.adapters.push({name:"noframework",Adapter:i}),n.Adapter=i}();

                                                var waypoint = new Waypoint({
                                        element: document.getElementById('colophon'),
                                        handler: function(direction) {

                                            const script = document.createElement('script');
                                            script.src='//js.hsforms.net/forms/v2.js';
                                            script.setAttribute("charset", "utf-8");
                                            script.setAttribute("type", "text/javascript");
                                            document.getElementById("hssubscribecode").appendChild(script);

                                            script.addEventListener('load', function() {
                                            // When script is loaded completely build Hubspot form
                                            hbspt.forms.create({
                                                                                        region: "na1",
                                                                                        portalId: "5952677",
                                                                                        formId: "743c3ddd-5ba0-4dd9-9c25-dd8c8c328c80",
                                                                                        formInstanceId: "2fef",
                                                                                        target: "#divFormHolder",
                                                                                    });
                                        });
                                            this.destroy()
                                        },
                                        offset: '70%'
                                        })
                                        </script>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="dislcaimerbot">
                        <b>Disclaimer</b>: This website does not provide medical advice and the information provided throughout the website, including but not limited to, text, graphics, images, and other material are for informational purposes only. It is not intended to be a substitute for professional medical advice, diagnosis, or treatment and you should always seek the advice of your physician or other qualified health care providers if you have questions regarding a medical condition or treatment or before starting or stopping any healthcare or health related regimen. Do not ever disregard or delay seeking medical advice from a qualified professional because of something you have read on <a href="https://nowrx.com">nowrx.com</a>.
                    </span>
                    <?php
                    // GET TAGS BY POST_ID
                    $tags = get_the_tags($post->ID);
                    ?>
                    <ul class="cloudTags">
                        <li>
                            <span class="title">
                                Tags
                            </span>
                        </li>
                        <?php foreach($tags as $tag) :  ?>
                        <li>
                            <a class="btn btn-warning" href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>/">
                                <?php print_r($tag->name); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php if ( has_post_format( 'quote' )) { ?>
                    <div class="blog-content disclaimer-bottom">
                        <p class="text-small">
                            <em>
                                <?php _e('The contents of the NowRx Site, such as text, graphics, images, and other materials created by NowRx or obtained from NowRx\'s licensors, and other materials contained on the NowRx Site (collectively, "Content") are for informational purposes only.  Content is not intended to be a substitute for professional medical advice, diagnosis, or treatment.  Always seek the advice of your physician or other qualified health provider with any questions you may have regarding any medical condition.  Do not ignore or delay seeking professional medical advice because of something you saw or read on the NowRx Site.','bonestheme'); ?>
                            </em>
                        </p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- visit faq -->
        <section class="visit-faq">
            <div class="container">
                <div class="content">
                    <div class="rvl">
                        <span class="sub-headline">
                            No Signup Required. No Hidden Fees.
                        </span>
                    </div>
                    <div class="rvl">
                        <h2 class="sec-title">
                            Free Pharmacy Delivery
                        </h2>
                    </div>
                    <div class="rvl">
                        <div class="btn-container">
                            <a href="<?= get_site_url(); ?>/" class="rx-btn rx-dg">
                                Learn More
                            </a>
                        </div>
                    </div>
                    <div class="rvl">
                        <div class="small-block">
                            Still have questions about how to get started with NowRx Pharmacy? Email us at <a href="mailto:info@nowrx.com" class="alink">info@nowrx.com</a> and we will be happy to
                            help.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</section>

<?php get_footer(); ?>