<?php get_header(); ?>

<section id="content" class="grid-container">
    <!-- To calculate your waist-to-hip ratio: 92 / 112 = 0.82 -->


    <div class="calculator">

        <header>
        <h1>Waist to Hip Ratio Calculator</h1>
        <p>
        The waist-hip ratio is generally an indicator or measure of health and the risk of developing serious health conditions, such as diabetes, asthma, or Alzheimer's disease.
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
            <div class="input"><input type="number" class="field input-waist"></div>
            <div class="unit">
                <select name="" id="">
                    <option value="">CM</option>
                    <option value="">IN</option>
                    <option value="">MM</option>
                </select>
            </div>
            </div>
        </span>
        <span class="input_field">
            <div class="label">Enter hip circumference</div>
            <div class="input-container border-input">
            <div class="input"><input type="number" class="field input-hip"></div>
            <div class="unit">
                <select name="" id="">
                    <option value="">CM</option>
                    <option value="">IN</option>
                    <option value="">MM</option>
                </select>
            </div>
            </div>
        </span>
        <div class="input_result input_field">
            <div class="label">Your waist-hip ratio</div>
            <div class="input-container results-container">
            <input aria-label="Your waist-hip ratio" autocomplete="off" class="input" placeholder="" type="number" value="">
            </div>
        </div>
        <table id="whresults">
        <tbody>
            <tr>
                <th>Female</th>
                <th>Male</th>
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
<div class="side-content">
<div class="block">

<header class="title">
    <h2 class="title">how to measure your waist to hip ratio</h2>

</header>
<h3 class="title">Waist Circumference</h3>
    <p>Measure around your body the point of your bellybutton</p>
    <h3 class="title">Hip Circumference</h3>
    <p>Measure around your body at the widest point of your buttocks</p>

</div>

<div class="sub-content">
<h2>
Why is waist-hip ratio important?
</h2>
<p>
The waist-hip ratio is generally an indicator or measure of health and the risk of developing serious health conditions, such as diabetes, asthma, or Alzheimer's disease. Research shows that people with "apple-shaped" bodies (with more weight around the waist) face more health risks than those with "pear-shaped" bodies who carry more weight around the hips. Check your body shape with our body shape calculator.

</p>
<p>
Waist-hip ratio is used as a measurement of obesity. The WHO states that abdominal obesity is defined as a waist-hip ratio above 0.90 for males and above 0.85 for females or a body mass index (BMI) above 30.

</p>
</div>

</div>

</section>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        let inputWaist = $('.input-waist');
        let inputHip = $('.input-hip');
        let valW,valH;
        $(inputWaist).keyup( function() {
            let valW = $(this).val();
            valH =  $('.input-hip').val();
            if(typeof valW !== 'undefined' && typeof valH !== 'undefined'){
                calculateWH(valW,valH)
            }
        });
        $(inputHip).keyup( function() {
            let valH = $(this).val();
            valW =  $('.input-waist').val();
            if(typeof valW !== 'undefined' && typeof valH !== 'undefined'){
                calculateWH(valW,valH)
            }
        });


        function calculateWH(w,h){
            let mainResult = w / h;

            $('.tr-low,.tr-moderate,.tr-high').removeClass (function (index, className) {
                return (className.match (/(^|\s)f-\S+/g) || []).join(' ');
            });
            $('.tr-low,.tr-moderate,.tr-high').removeClass (function (index, className) {
                return (className.match (/(^|\s)m-\S+/g) || []).join(' ');
            });

            if(mainResult <= .93){
                $('.tr-low').addClass('m-low');
            } else if(mainResult >= .94 && mainResult <= 0.95){
                $('.tr-low').addClass('m-low');
            } else if(mainResult >= .96 && mainResult <= 1){
                $('.tr-moderate').addClass('m-low');
            } else if(mainResult >= 1 && mainResult <= 10){
                $('.tr-high').addClass('m-high');
            }

            if(mainResult <= .8){
                $('.tr-low').addClass('f-low');
            } else if(mainResult >= .81 && mainResult <= 0.84){
                $('.tr-low').addClass('f-low');
            } else if(mainResult >= .81 && mainResult <= .84){
                $('.tr-moderate').addClass('f-low');
            } else if(mainResult >= 0.85 && mainResult <= 10){
                $('.tr-high').addClass('f-high');
            }

            $('.input_result .input').val(mainResult);
        }

    });
</script>


<?php get_footer(); ?>