<?php get_header(); ?>

<section class="bmi-calculator grid-container">
    <div class="padded-container container">
        <div class="form-content">
            <h1 class="title">BMI Calculator</h1>
            <div class="description">
                This calculator provides body mass index (BMI) and the corresponding BMI weight status category for adults 20 years and older.
            </div>

            <div class="form">
                <span class="input-field">
                    <span class="label">Height</span>

                    <input type="number" max="900" class="input height-input">
                    <label for="ft">ft</label>

                    <input type="number" max="900" class="input height-in-input">
                    <label for="in" >in</label>
                </span>
                <span class="input-field">
                    <span class="label">Weight</span>

                    <input type="number" max="900" class="input weight-input">
                    <label for="lbs">lbs</label>
                </span>
                <span class="input-submit">
                    <button class="submit rx-btn" id="btn">Calculate</button>
                </span>

            </div>
        </div>
        <div class="info">
        <div id="result">

        </div>
        <h2 class="title-secondary">What is BMI?</h2>
            <p>
                This BMI calculator will give your estimated number. Enter your height and weight below, then click the "Submit" button. If your BMI is above 25, losing weight is a smart idea.
            </p>
            <ul class="weight-list">
                <li><span>Less than 18.5</span><span class="w">Underweight</span></li>
                <li><span>Between 18.5 - 24.9</span><span class="w">Healthy Weight</span></li>
                <li><span>Between 25 - 29.9</span><span class="w">Overweight</span></li>
                <li><span>Over 30</span><span class="w">Obese</span></li>
            </ul>
            <div class="bmi-chart">
            <!-- <img src="https://medical.azureedge.net/images/0aa8713b-421f-445f-996a-0aed1695b5a2.jpg" alt=""> -->
            </div>


            <div class="social">
                <a href="" class="link">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                </a>
            </div>


            <span class="title-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Logo-Icon-mini.webp" alt="NowRx-Pharmacy-Logo-Icon-mini" width="50" height="38">
                    </span>
        </div>
    </div>
</section>


<?php do_action(  'subscribe_block' ); ?>

<?php do_action(  'blog_content' ); ?>


<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
// BMI = (weight) / (height * height)
window.onload = () => {
    let button = document.querySelector("#btn");

    // Function for calculating BMI
    button.addEventListener("click", calculateBMI);
};

function calculateBMI() {

    let heightFt = parseInt(document.querySelector(".height-input").value);
    let heightIn = parseInt(document.querySelector(".height-in-input").value);
    let weight = parseInt(document.querySelector(".weight-input").value);

    let convertredToKg = weight / 2.205;

    const testConversion = (feet, inches) => {
        const cmTotal = feet * 30.48 + inches * 2.54;
        return cmTotal;
    };

    let conversion = testConversion(heightFt, heightIn);
    console.log(conversion)

    let result = document.querySelector("#result");
    let resultTitle = '<header class="title-results"><h2 class="title">Results</h2></header>';
    if (conversion === "" || isNaN(conversion)) {
        result.innerHTML = "Provide a valid Height!";
    }
    else if (convertredToKg === "" || isNaN(convertredToKg))
        result.innerHTML = "Provide a valid Weight!";
    else {
        // Fixing upto 2 decimal places
        let bmi = (convertredToKg / ((conversion * conversion) / 10000)).toFixed(2);
        // Dividing as per the bmi conditions
        if (bmi < 18.6) result.innerHTML =
        `${resultTitle}<span class="weight-results">Under Weight : <span>${bmi}</span></span>`;
        else if (bmi >= 18.6 && bmi < 24.9)
            result.innerHTML =
                `${resultTitle}<span class="weight-results">Normal : <span>${bmi}</span></span>`;
        else result.innerHTML =
            `${resultTitle}<span class="weight-results">Over Weight : <span>${bmi}</span></span>`;
    }
}

</script>

<?php get_footer(); ?>