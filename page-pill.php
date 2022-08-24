<?php get_header(); ?>

<section class="grid-container pill-calculator">

    <div class="container">
        <div class="content">
            <div class="main-block">
                <div class="date-picker">
                    <span class="title">Select Date first filled</span>
                    <div class="flatpickr-calendar"></div>
                </div>
                <div class="dayfill">
                    <div class="text-title">Days Supply Filled:</div>
                    <div class="time-selector">

                        <span class="days">

                            <input class="daysfills" type="number">
                        </span>

                    </div>
                </div>
                <div class="calculate">

                    <button class="bnt-calc">Calculate</button>

                </div>
            </div>

            <div class="info">
                <header>
                    <h1 class="title">Refill Calculator</h1>
                </header>


                <p>
                    Prescription Refill Calculator: What is it and all you need to Know | If you’re like most people, you probably take prescriptions for medications on a regular basis. But what if you didn’t have to? What if there was a way to get your medications without having to go to the doctor? That’s what calculators can do for you. With calculators, you can refill your prescriptions in minutes without ever going to the doctor. Just enter the code that is sent to your calculator and you’re good to go! And don’t forget, calculators are also great for studying!

                </p>
                <span class="title-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/NowRx-Pharmacy-Logo-Icon-mini.webp" alt="NowRx-Pharmacy-Logo-Icon-mini" width="50" height="38">
                </span>

                <div class="results">
                    <div class="result"></div>
                </div>

            </div>


        </div>
    </div>

</section>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    $(".flatpickr-calendar").flatpickr({
        inline: true,
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            console.log(dateStr)
            dateSelected = dateStr;
        }
    });




    $(".bnt-calc").on('click', function(e) {
        let num = $('input.daysfills').val();
        let value = parseInt(num);
        value++;
        dateMain = new Date(dateSelected);

        let now = new Date(dateMain);
        now = new Date(now.toDateString());

        console.log(dateMain)

        const inFiveDays = new Date(new Date(now).setDate(now.getDate() + value)).toDateString();
        $('.results').addClass('active');
        $('.result').html("Refill date calculated: " + inFiveDays.toLocaleString());
    });
</script>



<?php get_footer(); ?>