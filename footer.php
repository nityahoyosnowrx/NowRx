<?php
if ( is_single() && 'post' == get_post_type() ) {
} else {
  if(is_home()){
  } else {
    if('locations' == get_post_type()){
    } else {
      echo "</article></main>";
    }
  }
}


// if('post' == get_post_type() || is_archive('post') ||  'locations' == get_post_type() || !is_page('resources')):

  // else:
    // if(!is_page('resources')):

    // endif;

?>
    <!-- </article> -->
  <!-- </main> -->
<?php
// endif;
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
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14 fa-7x"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path></svg>
                        </a>
                        </div>
                        <div class="icon">
                        <a href="https://twitter.com/NowRx" target="_blank">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-twitter fa-w-16 fa-7x"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path></svg>
                        </a>
                        </div>
                        <div class="icon">
                        <a href="https://www.youtube.com/channel/UCk50FgUjUrddyWKG3ajxdGA" target="_blank">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-youtube fa-w-18 fa-7x"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" class=""></path></svg>
                        </a>
                        </div>
                        <div class="icon">
                        <a href="https://www.facebook.com/NowRx/" target="_blank">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10 fa-7x"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path></svg>
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
                    <a target="_blank" href="https://apps.apple.com/us/app/nowrx-telehealth/id1573059382">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/Download_on_the_App_Store_Badge.svg" alt="apple play" class="lozad">
                    </a>
                </div>
                <div class="icon">
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.nowrx.telehealth">
                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/Google_Play_Store_badge_EN.svg" alt="google play" class="lozad">
                    </a>


                </div>
            </div>
        </div>
    </div>
</footer>

<?php if(false): ?>

<section class="popblog">
    <div class="container">
        <div class="closeicon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                id="Layer_1" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;"
                xml:space="preserve">
                <g>
                    <g>
                        <path
                            d="M300.188,246L484.14,62.04c5.06-5.064,7.852-11.82,7.86-19.024c0-7.208-2.792-13.972-7.86-19.028L468.02,7.872    c-5.068-5.076-11.824-7.856-19.036-7.856c-7.2,0-13.956,2.78-19.024,7.856L246.008,191.82L62.048,7.872    c-5.06-5.076-11.82-7.856-19.028-7.856c-7.2,0-13.96,2.78-19.02,7.856L7.872,23.988c-10.496,10.496-10.496,27.568,0,38.052    L191.828,246L7.872,429.952c-5.064,5.072-7.852,11.828-7.852,19.032c0,7.204,2.788,13.96,7.852,19.028l16.124,16.116    c5.06,5.072,11.824,7.856,19.02,7.856c7.208,0,13.968-2.784,19.028-7.856l183.96-183.952l183.952,183.952    c5.068,5.072,11.824,7.856,19.024,7.856h0.008c7.204,0,13.96-2.784,19.028-7.856l16.12-16.116    c5.06-5.064,7.852-11.824,7.852-19.028c0-7.204-2.792-13.96-7.852-19.028L300.188,246z" />
                    </g>
                </g>
            </svg>
        </div>
        <div class="content">
            <div class="title">
                <div class="logo">
                    <img class="logo lozad"
                        data-src="<?php echo get_template_directory_uri(); ?>/library/images/NowRx-Pharmacy-Delivery-Logo.webp"
                        alt="NowRx Pharmacy Logo" width="122px" height="28px">



                </div>
                <div class="txt">
                    <b>"Best prescription delivery services in 2021" (CNET)</b>
                </div>
            </div>
            <div class="points">
                <!-- point -->
                <div class="point">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            viewBox="0 0 19.481 19.481" enable-background="new 0 0 19.481 19.481">
                            <g>
                                <path
                                    d="m10.201,.758l2.478,5.865 6.344,.545c0.44,0.038 0.619,0.587 0.285,0.876l-4.812,4.169 1.442,6.202c0.1,0.431-0.367,0.77-0.745,0.541l-5.452-3.288-5.452,3.288c-0.379,0.228-0.845-0.111-0.745-0.541l1.442-6.202-4.813-4.17c-0.334-0.289-0.156-0.838 0.285-0.876l6.344-.545 2.478-5.864c0.172-0.408 0.749-0.408 0.921,0z" />
                            </g>
                        </svg>
                    </div>
                    <div class="txt">
                        Unrivaled 5 Star Customer Service
                    </div>
                </div>
                <!-- point -->
                <div class="point">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Capa_1" x="0px" y="0px" viewBox="0 0 25.848 25.848"
                            style="enable-background:new 0 0 25.848 25.848;" xml:space="preserve">
                            <g>
                                <path
                                    d="M25.839,4.958c0,3.927-1.712,6.78-1.784,6.899c-0.145,0.237-0.396,0.367-0.655,0.367   c-0.136,0-0.273-0.036-0.397-0.111c-0.362-0.22-0.478-0.691-0.259-1.053c0.016-0.026,1.561-2.623,1.561-6.102   c0-1.984-1.29-3.424-3.068-3.424c-1.692,0-3.068,1.376-3.068,3.069c0,0.721,0.349,2.553,0.483,3.198   c0.087,0.415-0.18,0.821-0.595,0.908c-0.415,0.085-0.821-0.18-0.907-0.594c-0.053-0.253-0.517-2.502-0.517-3.512   C16.633,2.065,18.698,0,21.237,0C23.86,0,25.839,2.131,25.839,4.958z M21.367,6.165c0.305,2.549,0.747,7.516,0.239,8.022   L10.46,25.334c-0.685,0.686-1.798,0.686-2.484-0.001l-7.453-7.452c-0.686-0.685-0.686-1.798,0-2.484L11.67,4.251   c0.177-0.177,2.105-0.185,4.273-0.072C15.931,4.322,15.9,4.457,15.9,4.603c0,0.556,0.123,1.418,0.252,2.176   c-0.227,0.337-0.36,0.742-0.36,1.179c0,1.164,0.944,2.108,2.108,2.108s2.108-0.944,2.108-2.108c0-0.717-0.359-1.349-0.906-1.729   C18.99,5.562,18.9,4.918,18.9,4.603c0-0.068,0.014-0.131,0.02-0.198c0.267,0.028,0.53,0.057,0.779,0.088   C21.172,4.674,21.187,4.671,21.367,6.165z M15.426,14.507c-0.173-0.481-0.461-1.058-1.086-1.722l0.846-0.847l-0.942-0.941   l-0.913,0.914c-1.222-0.837-2.482-0.769-3.337,0.086c-0.932,0.932-0.712,2.115-0.028,3.49c0.47,0.952,0.556,1.5,0.191,1.865   c-0.375,0.375-0.98,0.212-1.529-0.336c-0.624-0.624-0.99-1.395-1.172-2.02l-1.414,0.838c0.164,0.566,0.606,1.373,1.23,2.037   L6.35,18.794l0.941,0.942l0.991-0.99c1.307,0.922,2.625,0.798,3.48-0.057c0.875-0.877,0.952-1.857,0.202-3.414   c-0.52-1.116-0.645-1.664-0.337-1.971c0.27-0.27,0.75-0.347,1.375,0.278c0.693,0.693,0.923,1.366,1.048,1.722L15.426,14.507z" />
                            </g>
                        </svg>
                    </div>
                    <div class="txt">
                        Great Pricing on All Medication
                    </div>
                </div>
                <!-- point -->
                <div class="point">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                            id="Capa_1" x="0px" y="0px" viewBox="0 0 511.998 511.998"
                            style="enable-background:new 0 0 511.998 511.998;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M414.498,188.525h-32.234l9.712-111.509c0.018-0.202,0.021-0.401,0.022-0.6c0-0.017,0.002-0.033,0.002-0.05    c0-0.003,0-0.005,0-0.008c0-3.035-1.831-5.71-4.522-6.873c-0.023-0.01-0.045-0.022-0.068-0.032c-0.167-0.07-0.34-0.13-0.514-0.188    c-0.065-0.021-0.127-0.047-0.192-0.067c-0.142-0.043-0.288-0.077-0.433-0.112c-0.102-0.024-0.2-0.053-0.303-0.073    c-0.127-0.025-0.259-0.041-0.389-0.06c-0.122-0.018-0.242-0.039-0.365-0.05c-0.021-0.002-0.04-0.006-0.061-0.008    c-0.132-0.012-0.262-0.01-0.393-0.015c-0.088-0.003-0.174-0.013-0.262-0.013h-0.094c-0.008,0-0.016,0-0.023,0H231.01    c-4.14,0-7.5,3.36-7.5,7.5c0,4.13,3.36,7.5,7.5,7.5h145.313l-14.926,171.375c-0.002,0.013-0.002,0.026-0.004,0.039l-3.766,43.241    H97.018l4.359-44.998h49.621c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-48.167l9.204-94.995h78.975    c4.143,0,7.5-3.358,7.5-7.5c0-4.142-3.357-7.5-7.5-7.5h-77.521l4.328-44.662h83.193c4.13,0,7.5-3.37,7.5-7.5    c0-4.14-3.37-7.5-7.5-7.5h-90c-0.004,0-0.007,0.001-0.011,0.001c-3.523-0.001-6.579,2.479-7.318,5.917    c-0.005,0.025-0.014,0.049-0.019,0.074c-0.038,0.187-0.063,0.378-0.088,0.57c-0.007,0.061-0.02,0.119-0.026,0.18    c-0.001,0.012-0.004,0.023-0.005,0.035l-5.124,52.885H7.5c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h89.465    l-9.204,94.995H61.002c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h25.306l-5.012,51.721    c-0.001,0.008-0.001,0.016-0.002,0.023l-7.749,79.979c-0.001,0.009-0.002,0.019-0.003,0.027l-0.003,0.029    c-0.01,0.104-0.009,0.206-0.015,0.31c-0.007,0.138-0.021,0.273-0.021,0.413c0,0.006,0.001,0.012,0.001,0.019    c0,0.193,0.014,0.383,0.028,0.573c0.006,0.061,0.004,0.123,0.011,0.183c0.02,0.194,0.053,0.385,0.088,0.575    c0.01,0.056,0.015,0.113,0.026,0.168c0.029,0.144,0.07,0.283,0.108,0.424c0.026,0.099,0.047,0.2,0.077,0.297    c0.009,0.027,0.021,0.053,0.029,0.081c0.363,1.116,0.979,2.118,1.783,2.936c0.015,0.015,0.027,0.032,0.042,0.046    c0.08,0.08,0.167,0.152,0.251,0.228c0.517,0.474,1.101,0.876,1.74,1.191c0.133,0.066,0.264,0.135,0.4,0.192    c0.041,0.018,0.085,0.03,0.127,0.046c0.188,0.075,0.377,0.147,0.572,0.208c0.018,0.005,0.035,0.008,0.053,0.014    c0.222,0.066,0.446,0.124,0.675,0.171c0.03,0.006,0.061,0.008,0.09,0.014c0.218,0.041,0.437,0.076,0.66,0.098    c0.005,0,0.009,0.001,0.014,0.002c0.246,0.024,0.49,0.036,0.732,0.036c0.003,0,0.007-0.001,0.011-0.001h33.388    c3.687,27.953,27.652,49.603,56.597,49.603c28.943,0,52.908-21.65,56.595-49.603H347.9c3.688,27.953,27.652,49.603,56.596,49.603    c28.943,0,52.91-21.65,56.598-49.603h33.396c0.005,0,0.011,0.001,0.016,0.001c0.25,0,0.496-0.015,0.74-0.039    c0.044-0.004,0.086-0.013,0.13-0.018c0.195-0.023,0.389-0.05,0.579-0.088c0.082-0.016,0.161-0.038,0.242-0.057    c0.147-0.034,0.295-0.07,0.439-0.113c0.098-0.029,0.193-0.063,0.289-0.096c0.123-0.042,0.246-0.086,0.367-0.135    c0.104-0.041,0.203-0.086,0.304-0.131c0.11-0.051,0.22-0.103,0.327-0.158c0.102-0.052,0.2-0.106,0.298-0.162    c0.103-0.06,0.205-0.122,0.306-0.186c0.094-0.06,0.188-0.121,0.278-0.185c0.102-0.071,0.199-0.146,0.298-0.222    c0.082-0.065,0.165-0.129,0.245-0.197c0.103-0.087,0.2-0.178,0.298-0.271c0.068-0.065,0.139-0.129,0.205-0.197    c0.104-0.106,0.203-0.218,0.302-0.331c0.053-0.061,0.108-0.12,0.159-0.182c0.11-0.136,0.21-0.276,0.31-0.417    c0.034-0.049,0.072-0.095,0.105-0.145c0.122-0.183,0.237-0.371,0.343-0.565c0.008-0.012,0.016-0.023,0.021-0.036    c0.113-0.208,0.217-0.421,0.31-0.641c0.026-0.063,0.046-0.128,0.071-0.191c0.061-0.155,0.121-0.31,0.172-0.471    c0.033-0.104,0.057-0.211,0.086-0.316c0.033-0.125,0.068-0.249,0.096-0.376c0.025-0.113,0.041-0.229,0.06-0.344    c0.017-0.101,0.039-0.2,0.052-0.303c0.318-2.548,6.191-49.667,8.814-80.135c0.003-0.029,0.004-0.059,0.007-0.088    c0.755-8.783,1.239-16.179,1.239-20.707C511.998,232.264,468.26,188.525,414.498,188.525z M380.957,203.527h30.683l-3.919,44.996    h-30.683L380.957,203.527z M171.008,428.129c-23.217,0-42.105-18.888-42.105-42.104s18.889-42.104,42.105-42.104    s42.104,18.888,42.104,42.104S194.224,428.129,171.008,428.129z M404.496,428.129c-23.216,0-42.103-18.888-42.103-42.104    s18.888-42.104,42.103-42.104c23.217,0,42.105,18.888,42.105,42.104S427.713,428.129,404.496,428.129z M487.863,378.522h-26.767    c-3.686-27.955-27.652-49.606-56.598-49.606c-28.944,0-52.91,21.652-56.596,49.606H227.604    c-3.686-27.955-27.651-49.606-56.596-49.606s-52.912,21.652-56.598,49.606H89.266l6.299-65.004H364.5v0.004    c0.004,0,0.007,0,0.011,0c0.251,0,0.5-0.014,0.746-0.039c0.046-0.004,0.091-0.014,0.137-0.02c0.196-0.023,0.391-0.051,0.583-0.089    c0.083-0.017,0.164-0.04,0.246-0.06c0.15-0.036,0.3-0.071,0.446-0.115c0.1-0.03,0.195-0.066,0.292-0.1    c0.126-0.044,0.252-0.087,0.374-0.137c0.105-0.043,0.206-0.091,0.308-0.139c0.111-0.051,0.222-0.102,0.329-0.158    c0.102-0.054,0.202-0.112,0.303-0.17c0.103-0.06,0.205-0.121,0.305-0.185c0.097-0.063,0.189-0.129,0.282-0.195    c0.099-0.07,0.195-0.142,0.291-0.217c0.086-0.069,0.171-0.14,0.255-0.213c0.095-0.082,0.188-0.166,0.278-0.253    c0.076-0.073,0.152-0.148,0.226-0.225c0.09-0.094,0.177-0.191,0.263-0.29c0.067-0.078,0.133-0.156,0.197-0.236    c0.083-0.105,0.162-0.213,0.24-0.322c0.059-0.082,0.116-0.164,0.172-0.248c0.073-0.113,0.143-0.229,0.21-0.347    c0.051-0.088,0.103-0.176,0.149-0.266c0.063-0.118,0.117-0.238,0.174-0.359c0.044-0.097,0.089-0.192,0.129-0.292    c0.049-0.118,0.09-0.239,0.133-0.36c0.037-0.107,0.076-0.214,0.109-0.324c0.033-0.116,0.06-0.235,0.09-0.353    c0.029-0.119,0.061-0.237,0.084-0.358c0.023-0.118,0.037-0.238,0.055-0.358c0.018-0.124,0.039-0.246,0.051-0.372    c0.002-0.018,0.006-0.035,0.007-0.053l3.759-43.15h38.762c22.979,0,33.343,11.906,44.314,24.512    c9.053,10.401,19.16,22.006,36.34,24.837C492.968,335.938,489.441,365.554,487.863,378.522z M496.432,297.838    c-11.145-2.272-18.002-10.107-26.309-19.651c-10.389-11.935-23.072-26.5-47.385-29.214l3.88-44.548    c39.764,5.881,70.38,40.229,70.38,81.602C496.998,288.838,496.788,292.922,496.432,297.838z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M171.008,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5    C198.508,370.861,186.171,358.524,171.008,358.524z M171.008,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5    s12.5,5.607,12.5,12.5S177.9,398.524,171.008,398.524z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M404.496,358.524c-15.163,0-27.5,12.336-27.5,27.5s12.337,27.5,27.5,27.5c15.163,0,27.5-12.336,27.5-27.5    C431.996,370.861,419.659,358.524,404.496,358.524z M404.496,398.524c-6.893,0-12.5-5.607-12.5-12.5s5.607-12.5,12.5-12.5    s12.5,5.607,12.5,12.5S411.389,398.524,404.496,398.524z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M71,188.527H34.334c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5H71c4.143,0,7.5-3.358,7.5-7.5    C78.5,191.885,75.143,188.527,71,188.527z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="txt">
                        Free Same-Day Prescription Delivery
                    </div>
                </div>
            </div>
            <div class="btn-container">
                <a href="/refill-and-transfer-prescriptions" class="btn rx-btn">Learn More</a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if(!is_page('nowprep')):
    if(!is_page('referral')){
        if(!is_page('telehealth')){
    ?>
<!-- <div class="calltoaction">
    <div class="container">
        <div class="content">
            <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions"
                class="rx-btn button secondary rounded shadow rx-btn" id="firstbutton">
                <span class="arrow">

                <img src="<?php echo get_template_directory_uri(); ?>/images/calltoaction.svg" class="pic limg" height="100" width="100" alt="nowrx pharmacy Get Started">
                </span>

                Get Started

            </a>
        </div>
    </div>
</div> -->
<?php
    }
}
endif; ?>
<?php wp_footer(); ?>
</div> <!-- closes off canvas content -->
<?php
if(is_front_page()):
?>
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

<?php // mobile meta (hooray!)
    $cachefooter = 'd32';
    ?>

<?php if ( is_page( 'refill-and-transfer-prescriptions' ) || is_page( 'telehealth' ) || is_page('contact-us') || is_singular('post')): ?>
<?php else: ?>
    <script src="<?php echo get_template_directory_uri(); ?>/public/frontend-bundle.js?vcc='<?= $cachefooter; ?>'"></script>
<?php endif; ?>

<?php if(!is_page('nowprep')): ?>

    <?php if(is_page('invest')): ?>

        <section class="popupform lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg">
            <div class="content">
                <div class="closebutton">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="348.333px" height="348.334px" viewBox="0 0 348.333 348.334" style="enable-background:new 0 0 348.333 348.334;" xml:space="preserve">
                        <g>
                            <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85
                                c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563
                                c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85
                                l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554
                                L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z"/>
                        </g>
                    </svg>
                </div>
                <h2 class="title">
                    Get the NowRx Investor Deck
                </h2>
                <p>
                    Download the NowRx investor pitch deck and see what is driving record demand for shares of NowRx!
                </p>
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


<?php
// include modals
get_template_part('footer-modals');
?>
    <!-- tracking code -->
    <?php get_template_part('analytics-head'); ?>




<!-- Inlined Google Font loading -->
<style>


     /* cyrillic-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOOaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIMeaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOuaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIO-aBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofINeaBTMnFcQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOOaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIMeaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOuaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIO-aBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 500;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofINeaBTMnFcQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOOaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIMeaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOuaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIO-aBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofINeaBTMnFcQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOOaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIMeaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOuaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIO-aBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofINeaBTMnFcQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOOaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIMeaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIOuaBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofIO-aBTMnFcQIG.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunito/v20/XRXV3I6Li01BKofINeaBTMnFcQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe0qMImSLYBIv1o4X1M8ccewI9tAcVwob5A.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe0qMImSLYBIv1o4X1M8cce5I9tAcVwob5A.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe0qMImSLYBIv1o4X1M8cceyI9tAcVwob5A.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe0qMImSLYBIv1o4X1M8ccezI9tAcVwob5A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe0qMImSLYBIv1o4X1M8cce9I9tAcVwo.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc9iB85gU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc9iB85pU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc9iB85iU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc9iB85jU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc9iB85tU1ECVZl_.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8GBs5gU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8GBs5pU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8GBs5iU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8GBs5jU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8GBs5tU1ECVZl_.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8aBc5gU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8aBc5pU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8aBc5iU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8aBc5jU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 800;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8aBc5tU1ECVZl_.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8-BM5gU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8-BM5pU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8-BM5iU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8-BM5jU1ECVZl_86Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Nunito Sans';
  font-style: normal;
  font-weight: 900;
  src: url(https://fonts.gstatic.com/s/nunitosans/v8/pe03MImSLYBIv1o4X1M8cc8-BM5tU1ECVZl_.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

    </style>

</body>
</html> <!-- end of site. what a ride! -->