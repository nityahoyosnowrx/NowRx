<?php
// Conditional Main tag
if (is_single() && 'post' == get_post_type()) {
} else {
  if (is_home()) {
  } else {
    if ('locations' == get_post_type()) {
    } else {
      echo "</article></main>";
    }
  }
}
?>

<footer class="main-footer">
  <div class="container fluid">
    <div class="blocks">
      <div class="block left">
        <span class="line">Get prescriptions delivered right to your door in hours for free.</span>
        <div class="social">
          <div class="text">Follow Us</div>
          <div class="social-icons">
            <div class="icon">
              <a href="https://www.instagram.com/nowrxpharmacy/?hl=en" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14 fa-7x">
                  <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                </svg>
              </a>
            </div>
            <div class="icon">
              <a href="https://twitter.com/NowRx" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-twitter fa-w-16 fa-7x">
                  <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path>
                </svg>
              </a>
            </div>
            <div class="icon">
              <a href="https://www.youtube.com/channel/UCk50FgUjUrddyWKG3ajxdGA" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-youtube fa-w-18 fa-7x">
                  <path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" class=""></path>
                </svg>
              </a>
            </div>
            <div class="icon">
              <a href="https://www.facebook.com/NowRx/" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10 fa-7x">
                  <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                </svg>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="block right">
        <div class="u-list">
          <ul class="menu-items">
            <li><a href="<?= get_site_url(); ?>/nowprep/">NowPrEP</a></li>
            <li><a href="<?= get_site_url(); ?>/for-doctors/">For Doctors</a></li>
            <li><a href="<?= get_site_url(); ?>/contact-us/">Contact Us</a></li>
            <li><a href="<?= get_site_url(); ?>/locations/">Locations</a></li>
          </ul>
          <ul class="menu-items">
            <li><a href="<?= get_site_url(); ?>/about-us/">About Us</a></li>
            <li> <a href="<?= get_site_url(); ?>/privacy-policy/">Privacy Policy</a></li>
            <li><a href="<?= get_site_url(); ?>/hipaa-privacy/">HIPAA Privacy</a></li>
            <li><a href="<?= get_site_url(); ?>/telehealth/terms-and-conditions/">Telehealth T&C</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container fluid">
    <div class="footer-rect">
      <div class="copright">
        &copy; NowRx <?= date('Y'); ?> - All Rights Reserved
      </div>
      <div class="app">
        <div class="icon">
          <a target="_blank" href="https://apps.apple.com/us/app/nowrx-pharmacy-on-demand/id1066924988">
            <img data-src="<?php echo get_template_directory_uri(); ?>/images/Download_on_the_App_Store_Badge.svg" height="42" width="140" alt="apple play" class="lozad">
          </a>
        </div>
        <div class="icon">
          <a target="_blank" href="https://play.google.com/store/apps/details?id=com.nowrx.client">
            <img data-src="<?php echo get_template_directory_uri(); ?>/images/Google_Play_Store_badge_EN.svg" height="42" width="140" alt="google play" class="lozad">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<?php if (is_page('refill-and-transfer-prescriptions') || is_page('telehealth') || is_page('contact-us') || is_singular('post')) : ?>
<?php else : ?>
  <script defer src="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js"></script>
<?php endif; ?>

<!-- </div> -->

<!-- closes off canvas content -->

<?php
// Video load on homepage
if (is_front_page()) : ?>
  <!-- video code -->
  <script async>
    // console.log(window.innerWidth);
    let windowW = window.innerWidth;
    if (windowW > 992) {
      document.addEventListener('DOMContentLoaded', function() {
        var lazyVideos = [].slice.call(document.querySelectorAll('video.lazy'));
        if ('IntersectionObserver' in window) {
          var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(video) {
              if (video.isIntersecting) {
                for (var source in video.target.children) {
                  var videoSource = video.target.children[source];
                  if (typeof videoSource.tagName === 'string' && videoSource
                    .tagName === 'SOURCE') {
                    videoSource.src = videoSource.dataset.src;
                  }
                }
                video.target.load();
                video.target.classList.remove('lazy');
                video.target.play();
                lazyVideoObserver.unobserve(video.target);
              }
            });
          });
          lazyVideos.forEach(function(lazyVideo) {
            lazyVideoObserver.observe(lazyVideo);
          });
        }
      });
    }
  </script>
<?php endif; ?>



<?php if (!is_page('nowprep')) : ?>
  <?php if (is_page('invest')) : ?>
    <section class="popupform lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg">
      <div class="content">
        <div class="closebutton">
          <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="348.333px" height="348.334px" viewBox="0 0 348.333 348.334" style="enable-background:new 0 0 348.333 348.334;" xml:space="preserve">
            <g>
              <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85
                        c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563
                        c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85
                        l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554
                        L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z" />
            </g>
          </svg>
        </div>
        <h2 class="title">Get the NowRx Investor Deck</h2>
        <p>Download the NowRx investor pitch deck and see what is driving record demand for shares of NowRx!</p>
        <div class="formcall">
          <script>
            window.addEventListener('load', function() {
              hbspt.forms.create({
                region: "na1",
                portalId: "5952677",
                formId: "df2a6935-1139-426a-b373-0917788189ad"
              });
            });
          </script>
        </div>
      </div>
    </section>


    <!--[if lte IE 8]>
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->
    <script charset="utf-8" async defer type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>

  <?php endif; ?>
<?php endif; ?>


<?php if (is_singular( 'post' ) || is_home()) : ?>

  <div class="pre-modal-window">
    <div class="pre-modal">
      <button class="pre-modal-btn-close bg-transparent" data-var="closeBtn">
        <svg fill="#111" height="30px" width="30px" viewBox="0 0 24 24">
          <path d="M15.04 12L24 2.96 21.04 0 12 8.96 3.04 0 0 2.96 9.04 12 0 20.96 3.04 24 12 14.96 21.04 24 24 20.96z"></path>
        </svg>
      </button>
      <div class="pre-modal-view">
        <div class="unite-container">
            <header>
              <div class="nowrx-unite-swoosh">
                <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Logo-Icon-mini.webp" alt="NowRx-Pharmacy-Logo-Icon-mini" width="50" height="38">
              </div>
              <div class="view-header">Subscribe To Our Newsletter</div>
              <div id="joinMessage" class="view-sub-header nowrx-unite-message">
              Get blogs, tips, and discounts related to pharmacy delivered right to your inbox each month.
               </div>
            </header>


            <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js" defer async></script> -->

            <script defer>
setTimeout(function() {
    // Get the head tag
    var head_ID = document.getElementsByTagName("head")[0];
    // Create script element
    var script_element = document.createElement('script');
    // Set the script type to JavaScript
    script_element.type = 'text/javascript';
    // External JS file
    script_element.src = '//js.hsforms.net/forms/v2.js';
    head_ID.appendChild(script_element);
}, 4000);
            </script>

            <div id="popup-foot">
            </div>
            <script defer>

            var $document = document.querySelector("body");

            document.addEventListener('load', function(evt) {
                var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

                if (!evt.target.isEqualNode($script)) {
                    return;
                }

                // Callback code
                setTimeout(() => {
                  // console.log('loaded')
                  hbspt.forms.create({
                  region: "na1",
                  portalId: "5952677",
                  formId: "743c3ddd-5ba0-4dd9-9c25-dd8c8c328c80",
                  css: '',
                  target: "#popup-foot"
                  })
                }, 9000);

                // your callback's code
                setTimeout(() => {
                  // console.log('loaded')
                  hbspt.forms.create({
                        region: "na1",
                        portalId: "5952677",
                        formId: "743c3ddd-5ba0-4dd9-9c25-dd8c8c328c80",
                        css: '',
                        target: "#popup-foot"

                        })
                }, 10000);

            }, true);


            </script>





          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php // include modals
get_template_part('footer-modals'); ?>

<?php
// tracking code
get_template_part('analytics-head'); ?>

<?php
// Inlined Google Font loading
// get_template_part('components/font-load');
?>

<!-- <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/public/frontend.css'> -->

<?php if(is_singular('post')): ?>
<script defer>
setTimeout(() => {
  var giftofspeed = document.createElement('link');
giftofspeed.rel = 'stylesheet';
giftofspeed.href = '<?php echo get_template_directory_uri(); ?>/public/frontend.css';
giftofspeed.type = 'text/css';
var godefer = document.getElementsByTagName('link')[0];
godefer.parentNode.insertBefore(giftofspeed, godefer);
}, 9000);
</script>

<?php endif; ?>

</body>

</html>