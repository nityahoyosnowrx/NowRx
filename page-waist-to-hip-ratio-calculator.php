<?php get_header(); ?>

<section class="grid-container wh-container">
    <!-- To calculate your waist-to-hip ratio: 92 / 112 = 0.82 -->


    <div class="calculator">

        <header>
            <h1>Waist to Hip Ratio Calculator</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium aliquid nostrum quae odit illum quos, necessitatibutate. Doloribus.
            </p>
        </header>
        <span class="input_field">
            <div class="label">Select the sex you were assigned at birth*</div>

            <div class="input-container">
                <div class="input">
                    <input type="radio" id="male" class="radio-btn" name="sex" value="male">
                    <label class="radio-btn" for="male"> </label>
                    <span class="false-label">Male</span>

                    <input type="radio" id="female" class="radio-btn" name="sex" value="female">
                    <label class="radio-btn" for="female"> </label>
                    <span class="false-label">Female</span>
                </div>
            </div>

        </span>
        <span class="input_field">
            <div class="label">Enter waist circumference</div>
            <div class="input-container border-input">
                <div class="input">
                    <input type="number" value="" class="field input-waist">
                </div>
                <div class="unit">
                    <select name="" id="unit-waist">
                        <option value="cm" selected>CM</option>
                        <option value="in">IN</option>
                        <option value="mm">MM</option>
                    </select>
                </div>
            </div>
        </span>
        <span class="input_field">
            <div class="label">Enter hip circumference</div>
            <div class="input-container border-input">
                <div class="input">
                    <input type="number" value="" class="field input-hip">
                </div>
                <div class="unit">
                    <select name="" id="unit-hip">
                        <option value="cm" selected>CM</option>
                        <option value="in">IN</option>
                        <option value="mm">MM</option>
                    </select>
                </div>
            </div>
        </span>
        <div class="input_calc">
            <button class="calculate-btn">
                Calculate
            </button>
        </div>

    </div>
    <div class="side-content">
        <div class="block">
            <div class="info-block">
                <header class="title">
                    <h2 class="title">how to measure your waist to hip ratio</h2>
                </header>
                <h3 class="title">Waist Circumference</h3>
                <p>Measure around your body the point of your belly button</p>
                <h3 class="title">Hip Circumference</h3>
                <p>Measure around your body at the widest point of your buttocks</p>
                <span class="title-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Logo-Icon-mini.webp" alt="NowRx-Pharmacy-Logo-Icon-mini" width="50" height="38">
                </span>
            </div>
            <div class="results-block" id="results">
                <header class="title">
                    <h2 class="title">Results</h2>
                </header>
                <div class="input_result input_field">
                    <div class="label">Your waist-hip ratio</div>
                    <div class="input-container results-container">
                        <input aria-label="Your waist-hip ratio" autocomplete="off" readonly class="input" placeholder="" type="number" value="">
                    </div>
                </div>
                <table id="whresults">
                    <tbody>
                        <tr>
                            <th class="female">Female</th>
                            <th class="male">Male</th>
                            <th>Health Risk</th>
                        </tr>
                        <tr class="tr-low">
                            <td class="female">0.80 or lower</td>
                            <td class="male">0.95 or lower</td>
                            <td class="whrGreen">Low health risk</td>
                        </tr>
                        <tr class="tr-moderate">
                            <td class="female">0.81 to 0.84</td>
                            <td class="male">0.96 to 1.0</td>
                            <td class="whrOrange">Moderate risk</td>
                        </tr>
                        <tr class="tr-high">
                            <td class="female">0.85 or higher</td>
                            <td class="male">1.0 or higher</td>
                            <td class="whrRed">High risk</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>

</section>

<!-- <div class="block-subscribe">
    <div class="subscribe-blockitem">
        <header class="title">
            <h2 class="title">Subscribe to Healthcare in 5</h2>
            <p>
                Get blogs, tips, and discounts related to pharmacy delivered right to your inbox each week.
            </p>
            <div class="btnc">
                <a href="<?php echo get_site_url(); ?>/blog/subscribe/" class="button secondary rounded shadow rx-btn">
                    Learn More
                </a>
            </div>
        </header>
    </div>
</div> -->

<article>

    <section class="blogmain">
        <div class="bogcontainer">

            <header class="page">
                <h2>Read the latest from NowRx</h2>
                <div class="subtitle">Stay informed with recent announcements, best practices and insights into health and perscription delivery.</div>
            </header>

            <div class="blog-posts">

                <?php
                //get the current page
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                //pagination fixes prior to loop
                $query = new WP_Query(array(
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'ASC'
                ));

                //set our query's pagination to $paged
                $query->query('post_type=post&posts_per_page=8&paged=' . $paged);

                if ($query->have_posts()) :
                    while ($query->have_posts()) :
                        $query->the_post();
                ?>

                        <article class="section-blog-post">

                            <div class="image">
                                <?php if (has_post_thumbnail($post->ID)) : ?>
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium'); ?>
                                    <a href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                        <img class="border-styled lozad" data-src="<?php echo $image[0]; ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink() ?>/" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                        <img class="border-styled" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/09/IMG_3714-1024x683.jpg" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>">
                                    </a>
                                <?php endif; ?>
                            </div>

                            <div class="contentblock">
                                <h2>
                                    <a href="<?php the_permalink(); ?>/" class="readlink">
                                        <?php echo wp_trim_words(get_the_title(), 8, '...'); ?>
                                    </a>
                                </h2>
                                <div class="content">
                                    <a href="<?php the_permalink(); ?>/" class="readlink">
                                        <?php echo mb_strimwidth(wp_trim_words(get_the_content(), 100, ''), 0, 65, '...'); ?>
                                    </a>
                                    <div class="wd">
                                        <a href="<?php the_permalink(); ?>/" class="readmore">Read More</a>
                                    </div>
                                </div>
                            </div>

                        </article>

                    <?php
                    endwhile;
                    ?>

                    <nav class="pagination">
                        <?php pagination_bar($query); ?>
                    </nav>

                <?php endif; ?>

            </div>
        </div>
    </section>
</article>



<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        let inputWaist = $('.input-waist');
        let inputHip = $('.input-hip');
        let valW, valH;

        $(inputWaist).keyup(function() {
            let valW = $(this).val();
            valH = $('.input-hip').val();
            if (typeof valW !== 'undefined' && typeof valH !== 'undefined') {
                // calculateWH(valW, valH)
            }
        });

        $(inputHip).keyup(function() {
            let valH = $(this).val();
            valW = $('.input-waist').val();
            if (typeof valW !== 'undefined' && typeof valH !== 'undefined') {
                // calculateWH(valW, valH)
            }
        });

        $(' button.calculate-btn').on('click', function() {
            let valH = $(inputHip).val();
            let valW = $(inputWaist).val();
            calculateWH(valW, valH)
            $('.results-block').addClass('active');
        });

        function convertCMToMM(value){
            value = value * 10;
            value = Math.round((value + Number.EPSILON) * 100) / 100;
            return value;
        }
        function convertCMToIN(value){
            value = value / 2.54;
            value = Math.round((value + Number.EPSILON) * 100) / 100;
            return value;
        }

        function convertINToMM(value){
            value = value * 25.4;
            value = Math.round((value + Number.EPSILON) * 100) / 100;
            return value;
        }
        function convertINToCM(value){
            value = value * 2.54;
            value = Math.round((value + Number.EPSILON) * 100) / 100;
            return value;
        }

        function convertMMToCM(value){
            value = value / 10;
            value = Math.round((value + Number.EPSILON) * 100) / 100;
            return value;
        }
        function convertMMToIN(value){
            value = value / 25.4;
            value = Math.round((value + Number.EPSILON) * 100) / 100;
            return value;
        }

        let currentUnit = "cm";
        let inputValWaist = $('.input-waist').val();
            let inputValHip = $('.input-hip').val();

        $('.input-waist, .input-hip').on('change',function(){
             inputValWaist = $('.input-waist').val();
             inputValHip = $('.input-hip').val();
        });

        $('#unit-hip, #unit-waist').on('change',function(){
            let val = $(this).val();

            inputValWaist = $('.input-waist').val();
             inputValHip = $('.input-hip').val();

            let hField = $('.input-hip');
            let wField = $('.input-waist');

            let cmW =  inputValWaist;
            let cmH = inputValHip;

            let wCon = inputValWaist;
            let hCOn = inputValHip;

            // let currentUnit = $(this).val();

            // selected value
            if(val == 'in'){
                $("#unit-hip, #unit-waist").val('in');
                // if cm
                if(currentUnit == "cm"){
                     wCon =  convertCMToIN(inputValWaist);
                     hCOn = convertCMToIN(inputValHip);
                    console.log(inputValWaist,wCon)
                    wField.val(wCon);
                    hField.val(hCOn);

                    currentUnit = "in";
                }


                // if mm
                if(currentUnit == "mm"){
                     wCon =  convertMMToIN(inputValWaist);
                     hCOn = convertMMToIN(inputValHip);

                    wField.val(wCon);
                    hField.val(hCOn);

                    currentUnit = "in";
                }
            }

            // selected value
            if(val == 'cm'){
                $("#unit-hip, #unit-waist").val('cm');
                // if MM
                if(currentUnit == "in"){
                     wCon =  convertINToCM(inputValWaist);
                     hCOn = convertINToCM(inputValHip);

                    wField.val(wCon);
                    hField.val(hCOn);

                    console.log(inputValWaist,wCon)

                    currentUnit = "cm";
                }


                // if IN
                if(currentUnit == "mm"){
                     wCon =  convertMMToCM(inputValWaist);
                     hCOn = convertMMToCM(inputValHip);

                    wField.val(wCon);
                    hField.val(hCOn);

                    currentUnit = "cm";
                }
            }
            // selected value
            if(val == 'mm'){
                $("#unit-hip, #unit-waist").val('mm');
                // if CM
                if(currentUnit == "cm"){
                     wCon =  convertCMToMM(inputValWaist);
                     hCOn = convertCMToMM(inputValHip);

                    wField.val(wCon);
                    hField.val(hCOn);
                    currentUnit = "mm";
                }


                // if IN
                if(currentUnit == "in"){
                     wCon =  convertINToMM(inputValWaist);
                     hCOn = convertINToMM(inputValHip);

                    wField.val(wCon);
                    hField.val(hCOn);

                    currentUnit = "mm";
                }
            }

            console.log(currentUnit)





        });


        function calculateWH(w, h) {
            let mainResult = w / h;

            $('.tr-low,.tr-moderate,.tr-high').removeClass(function(index, className) {
                return (className.match(/(^|\s)f-\S+/g) || []).join(' ');
            });
            $('.tr-low,.tr-moderate,.tr-high').removeClass(function(index, className) {
                return (className.match(/(^|\s)m-\S+/g) || []).join(' ');
            });

            mainResult = Math.round((mainResult + Number.EPSILON) * 100) / 100

            console.log(mainResult)

            if ($('.radio-btn:checked').val() == 'female') {
                $('td.male,th.male').hide();
            }
            if ($('.radio-btn:checked').val() == 'male') {
                $('td.female,th.female').hide();
            }

            if (mainResult <= .93) {
                $('.tr-low').addClass('m-low');
            } else if (mainResult >= .94 && mainResult <= 0.95) {
                $('.tr-low').addClass('m-low');
            } else if (mainResult >= .96 && mainResult <= 1) {
                $('.tr-moderate').addClass('m-low');
            } else if (mainResult >= 1 && mainResult <= 10) {
                $('.tr-high').addClass('m-high');
            }

            if (mainResult <= .8) {
                $('.tr-low').addClass('f-low');
            } else if (mainResult >= .81 && mainResult <= 0.84) {
                $('.tr-low').addClass('f-low');
            } else if (mainResult >= .81 && mainResult <= .84) {
                $('.tr-moderate').addClass('f-low');
            } else if (mainResult >= 0.85 && mainResult <= 10) {
                $('.tr-high').addClass('f-high');
            }

            $('.input_result .input').val(mainResult);

            document.getElementById("results").scrollIntoView({behavior: "smooth"});
        }

    });
</script>


<?php get_footer(); ?>