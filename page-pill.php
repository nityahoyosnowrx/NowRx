<?php get_header(); ?>

<section id="content" class="grid-container">

<div class="container">
    <div class="content">
       <div class="date-picker">
        <span class="title">Select Date first filled</span>
       <div class="flatpickr-calendar"></div>
       </div>
       <div class="dayfill">
       <div class="text-title">Days Supply Filled:</div>
        <div class="time-selector">

            <span class="days">

                <div class="number_input" data-currentvalue=""></div>
            </span>

            <div class="nuber_selector" id="numPad">
                <div>
                    <span data-number="7" class="number_pad"><span class="number">7</span></span>
                    <span data-number="8" class="number_pad"><span class="number">8</span></span>
                    <span data-number="9" class="number_pad"><span class="number">9</span></span>
                </div>
                <div>
                    <span data-number="4" class="number_pad"><span class="number">4</span></span>
                    <span data-number="5" class="number_pad"><span class="number">5</span></span>
                    <span data-number="6" class="number_pad"><span class="number">6</span></span>
                </div>
                <div>
                    <span data-number="1" class="number_pad"><span class="number">1</span></span>
                    <span data-number="2" class="number_pad"><span class="number">2</span></span>
                    <span data-number="3" class="number_pad"><span class="number">3</span></span>
                </div>
                <div>
                    <span class="dec number_pad" data-number="."><span class="number">.</span></span>
                    <span class="zero number_pad" data-number="0"><span class="number">0</span></span>
                    <span class="del"><span class="number">DEL</span></span>
                </div>
            </div>
        </div>
       </div>

        <div class="calculate">
        <div class="results">
                <div class="result"></div>
            </div>
            <button class="bnt-calc">Calculate</button>

        </div>
    </div>
</div>

</section>

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/airbnb.css">

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    let dateSelected = "";
    $(".flatpickr-calendar").flatpickr({
        inline: true,
        dateFormat: "Y-m-d",
        onChange:function(selectedDates, dateStr, instance){
            console.log(dateStr)
            dateSelected = dateStr;
        }
    });


    $(".number_pad").on('click',function(e){

        let value = $('.number_input');
        // click value
        let inputValue = $(this).data('number');
        // display valye
        let currentValue = value.html();

        stringformat = "" + currentValue + inputValue;

        value.data('currentvalue',stringformat)
        value.html(stringformat)


    });

    $(".del").on('click',function(e){
        let value = $('.number_input');
        let currentValue = value.html();

        currentValue = currentValue.slice(0, -1)
        value.html(currentValue)
        console.log( currentValue)
    });

    $(".bnt-calc").on('click',function(e){
        let num = $('.days .number_input').html();
        let value = parseInt(num);
        dateMain =  new Date(dateSelected);

        let now = new Date(dateMain);
        now = new Date(now.toDateString());

        console.log( dateMain)

        const inFiveDays = new Date(new Date(now).setDate(now.getDate() + value)).toDateString();

        $('.result').html("Refill date: " + inFiveDays.toLocaleString());
    });





</script>



<?php get_footer(); ?>