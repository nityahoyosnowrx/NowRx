<?php get_header(); ?>

<section class="interactionchecker">
                <div class="container-interior">

                    <h1>Drug Interaction Checker</h1>
                    <p>Enter two OTC's, or herbal supplements to check for interactions</p>
                    <form action="" class="icform">
                        <div class="inputfields">

                            <span class="input">
                                <input type="text" placeholder="Medication 1" id="input1" autocomplete="off" aria-autocomplete="none" data-normid="">
                                <div class="rella">
                                    <span class="autocompleteform"></span>
                                </div>
                            </span>

                            <span class="input">
                                <input type="text" placeholder="Medication 2" id="input2" autocomplete="off" aria-autocomplete="none" data-normid="">
                                <div class="rella">
                                    <span class="autocompleteform"></span>
                                </div>
                            </span>

                        </div>
                        <span class="input addother">
                            <span class="text">Add another</span>
                            <div class="io">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-plus fa-w-14 fa-2x">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" class=""></path>
                                </svg>
                            </div>
                        </span>
                        <!-- <button class="add-another" disabled="disabled">Add another</button> -->
                        <button id="check-interaction" class="button secondary rounded shadow rx-btn" disabled="disabled">Check Interaction</button>
                    </form>
                    <div id="results"></div>
                </div>
                <div class="disclaimer">
                    <strong>DISCLAIMER</strong> : The information contained herein should NOT be used as a substitute for the advice of an
                    appropriately qualified and licensed physician or other health care provider. The information provided here is
                    for informational purposes only. This tool may not cover all possible drug interactions. Please check with a
                    physician if you have health questions or concerns. Although we attempt to provide accurate and up-to-date
                    information, no guarantee is made to that effect.
                </div>
                <div class="copy">
                    &copy; NowRx <?= date('Y'); ?>
                </div>
            </section>

<?php do_action('faq-content'); ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



<script>
    // make ajax request
    var makeRequest = function(url, method) {

        // Create the XHR request
        var request = new XMLHttpRequest();

        // Return it as a Promise
        return new Promise(function(resolve, reject) {

            // Setup our listener to process compeleted requests
            request.onreadystatechange = function() {

                // Only run if the request is complete
                if (request.readyState !== 4) return;

                // Process the response
                if (request.status >= 200 && request.status < 300) {
                    // If successful
                    resolve(request);
                } else {
                    // If failed
                    reject({
                        status: request.status,
                        statusText: request.statusText
                    });
                }

            };

            // Setup our HTTP request
            request.open(method || 'GET', url, true);

            // Send the request
            request.send();

        });

    };



    // delay input
    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function() {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

    var val1;
    var val2;

    // autocomplete
    // on keydown input

    $(document).on('keyup', 'span.input input', function() {

        var empty = false;
        $('span.input input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#check-interaction').attr('disabled', 'disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        } else {
            $('#check-interaction').removeAttr('disabled'); // updated according to http://stackoverflow.com/questions/7637790/how-to-remove-disabled-attribute-with-jquery-ie
        }
    });

    $(document).on('keyup', 'span.input input', delay(function(e) {
        //   console.log('Time elapsed!', this.value);

        let $this = $(this);
        let inputText = this.value;
        // 1 approximate name
        // get drug id from string name
        makeRequest('https://rxnav.nlm.nih.gov/REST/approximateTerm.json?term=' + inputText + '&maxEntries=10')
            .then(function(posts) {

                let getName = posts.response;
                let getNameJson = JSON.parse(posts.response);
                let fruits = [];

                // console.log(getNameJson);

                $(".autocompleteform").html('');


                // each string id
                if (getNameJson.approximateGroup.candidate) {

                    getNameJson.approximateGroup.candidate.forEach(function(element) {

                        let numJs = JSON.parse(element.rxcui)
                        // console.log(element);
                        makeRequest('https://rxnav.nlm.nih.gov/REST/rxcui/' + numJs + '.json').then(function(posts) {
                                let getNameid = posts.responseText;
                                let getNameJsonid = JSON.parse(getNameid);
                                console.log(getNameJsonid)
                                let text = posts.responseURL;
                                var numb = text.match(/\d/g);
                                numb = numb.join("");

                                if (jQuery.isEmptyObject(getNameJsonid.idGroup)) {
                                    console.log('def')
                                }
                                if (fruits.includes(getNameJsonid.idGroup.name)) {

                                } else {
                                    fruits.push(getNameJsonid.idGroup.name);
                                    if (getNameJsonid.idGroup) {
                                        if (typeof getNameJsonid.idGroup.name !== 'undefined') {
                                            // if(jQuery.isEmptyObject(getNameJsonid.idGroup)){
                                            $($this).siblings(".rella").find('.autocompleteform').append('<span class="selectnormid" data-normid="' + numb + '">' + getNameJsonid.idGroup.name + '</span>');
                                        }
                                    }
                                }
                            })
                            .catch(function(error) {
                                // $($this).siblings(".rella").find('.autocompleteform').append(
                                // '<span class="selectnormid">No Results. Try to be more specific or try a different word.</span>'
                                // );
                                // $($this).siblings('.rella').find(".autocompleteform").removeClass('active');
                            });

                        $($this).siblings('.rella').find(".autocompleteform").addClass('active');

                    })


                } else {
                    $($this).siblings(".rella").find('.autocompleteform').append(
                        '<span class="selectnormid">No Results</span>'
                    );
                }


            })
            .catch(function(error) {
                console.log('Something went wrong', error);
                $($this).siblings(".rella").find('.autocompleteform').append(
                    '<span class="selectnormid">No Results. Try to be more specific or try a different wordff.</span>'
                );
            });

    }, 500));

    let currenInput = 3;
    let svgI = '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-trash-alt fa-w-14 fa-2x"><path fill="currentColor" d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z" class=""></path></svg>';

    $(document).on('click', 'span.input.addother', function(ev) {
        $('.inputfields').append('<span class="input"><input type="text" placeholder="Medication" id="input' + currenInput + '" autocomplete="off" aria-autocomplete="none" data-normid=""> <div class="rella"> <span class="autocompleteform"></span> </div> <span class="closi">' + svgI + '</span> </span>');
        currenInput++;
    });

    $(document).on('click', 'span.closi', function(ev) {
        $(this).closest('.input').remove();
    });

    // click item
    $(document).on('click', 'span.selectnormid', function(ev) {
        let dataAttr = $(this).attr('data-normid');
        let txtto = $(this).text();

        $(this).closest('span.input').find('input').attr('data-normid', dataAttr);
        $(this).closest('span.input').find('input').val(txtto);

        val1 = $("#input1").attr('data-normid');
        val2 = $("#input2").attr('data-normid');



        // inputId.data('normid', dataAttr);
        // console.log(ev);
        // console.log(val1,val2)
        $(".autocompleteform").removeClass('active');
    });

    let formArrayItems = [];

    // submit form
    $(document).on('submit', 'form.icform', function(ev) {
        ev.preventDefault();

        // console.log(val1,val2)
        // clear array
        formArrayItems = [];

        $(".icform input").each(function() {
            let numVal = $(this).attr('data-normid');
            // console.log( );
            formArrayItems.push(numVal);
        });



        $("#results").html('');
        $("#results").addClass("resultsactive");

        let requestUrl = 'https://rxnav.nlm.nih.gov/REST/interaction/list.json?rxcuis=';



        console.log(formArrayItems)
        formArrayItems.forEach(function(element) {
            requestUrl += '+' + element;
        })



        console.log(requestUrl)


        makeRequest(requestUrl)
            .then(function(posts) {
                let getNameid = posts.response;
                let getNameJsonid = JSON.parse(getNameid);

                // console.log(getNameJsonid);
                if (getNameJsonid.fullInteractionTypeGroup) {
                    getNameJsonid.fullInteractionTypeGroup[0].fullInteractionType.forEach(function(item) {
                        // console.log(item.interactionPair[0].description);

                        $("#results").append('<span>' + item.interactionPair[0].description +
                            '</span>');
                    })
                } else {
                    $("#results").append(
                        '<span>Warning: No interactions data were found. That does not mean there are no existing interactions. Consult your pharmacist or healthcare provider before taking any medications.</span>'
                    );
                }

                $("#results").append('<span class="nlmDisclaimer">Please consult your pharmacist or healthcare provider before taking any medications.</span>');


            })
            .catch(function(error) {
                console.log('Something went wrong', error);
            })
    });



    // potasium
    // 8588
    // spironolactone
    // 9997
    // "11289"
</script>


<style>
    h1 {
        font-style: normal;
        text-rendering: optimizeLegibility;
        font-family: Verdana, sans-serif;
        text-align: center;
        font-size: 1.7rem;
        letter-spacing: -1px;
        font-weight: 800;
        line-height: 2.4rem;
        margin: 0;
        color: #1f88ca;
        line-height: 1.2;
        font-weight: 400;
        margin: 0 0 30px;
        font-size: 3.4vw;
    }

    form.icform {
        max-width: 310px;
        margin: 0 auto;
    }

    section.interactionchecker {
        font-weight: 400;
        line-height: 1.7;
        color: #192d3e;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        font-size: 1.15rem;
        font-family: Verdana, sans-serif;
        font-size: 1rem;
        letter-spacing: .01rem;
    }

    span.selectnormid {
        display: block;
    }

    div#results span {
        font-size: 12px;
        display: list-item;
        margin: 0 20px 0px;
        padding: 5px 0px;
        text-align: left;
    }

    div#results {
        padding: 10px 10px;
        background: #eee;
        margin: 30px 0;
        text-align: left;
        font-size: 12px;
        visibility: hidden;
        opacity: 0;
        display: none;
        border-radius: 0 10px;
    }

    div#results.resultsactive {
        visibility: visible;
        opacity: 1;
        display: block;
    }

    span.nlmDisclaimer {
        font-size: 10px;
        /* line-height: 12px; */
        text-align: center;
        color: #585858;
    }

    section.interactionchecker {
        margin: 0 auto;
        text-align: center;
        background: #fff;

    }

    .autocompleteform {
        position: absolute;
        background: #fff;
        display: block;
        margin: 0 0 30px;
        border-radius: 0 10px;
        top: 0;
        left: -5vw;
        right: -5vw;
        opacity: 0;
        visibility: hidden;
        transition: all .3s;
        max-height: 40vh;
        overflow: auto;
        display: flex;
        flex-wrap: wrap;
        text-align: left;
        z-index: 1234;
        box-shadow: 0px 5px 10px -5px #dbdbdb;
        border: 1px solid #cecece;
        padding: 15px 15px;
        background: #f9f9f9;
        max-width: 260px;
        margin: 0 auto;

    }

    .autocompleteform:empty {
        padding: 0;
        box-shadow: none;
        border: none;
    }

    .rella {
        position: relative;
        width: 100%;
        min-height: 1px;
    }

    .autocompleteform span.selectnormid {
        text-transform: capitalize;
        font-size: 14px;
        margin: 0px 0;
        padding: 3px 12px;
        cursor: pointer;

        border-radius: 20px;
        border: 1px solid #c3c3c3;

        margin: 5px;
        background-color: #fff;
    }

    .autocompleteform.active {
        opacity: 1;
        visibility: visible;
    }

    .disclaimer {
        font-size: 10px;
        color: #777;
        max-width: 640px;
        margin: 20px auto 0;
        text-align: left;
    }

    .autocompleteform span.selectnormid:hover {
        background: #1f88ca;
        color: #fff;
        border-color: #1f88ca;
    }

    form.icform input {
        display: block;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        width: 100%;
        height: 2.4375rem;
        margin: 0 0 1rem;
        padding: .5rem;
        border: 1px solid #cacaca;
        border-radius: 0;
        background-color: #fff;
        -webkit-box-shadow: inset 0 1px 2px rgb(25 45 62 / 10%);
        box-shadow: inset 0 1px 2px rgb(25 45 62 / 10%);
        font-family: inherit;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #192d3e;
        -webkit-transition: border-color .25s ease-in-out, -webkit-box-shadow .5s;
        transition: border-color .25s ease-in-out, -webkit-box-shadow .5s;
        transition: box-shadow .5s, border-color .25s ease-in-out;
        transition: box-shadow .5s, border-color .25s ease-in-out, -webkit-box-shadow .5s;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0 0 7px;
        display: inline-block;
        width: 90%;
        max-width: 500px;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
        color: #33475b;
        border: 1px solid #cbd6e2;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 3px;
        background-color: #f5f8fa;
        border-radius: 20px;
        padding: 0 15px;
        min-height: 27px;
        min-width: 100%;
        margin: 10px 0;
    }

    form.icform input:hover {
        background-color: #fff;
    }

    .copy {
        font-size: 10px;
        color: #9e9e9e;
        margin: 10px 0 0;
    }

    button#check-interaction {
        -webkit-font-smoothing: antialiased;
        background-color: #038ed8;
        font-weight: 100;
        text-decoration: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        text-transform: uppercase;
        -webkit-transition: all .1s ease-out;
        transition: all .1s ease-out;
        font-weight: 600;
        display: inline-block;
        vertical-align: middle;
        border: 0 solid transparent;
        border-radius: 0;
        -webkit-transition: all .25s ease-out, color .25s ease-out;
        transition: all .25s ease-out, color .25s ease-out;
        font-family: inherit;
        font-size: .9rem;
        line-height: 1;
        text-align: center;
        background-color: #33a532;
        font-size: 1rem;
        text-transform: capitalize;
        border-radius: 30px;
        margin: 10px;
        -webkit-box-shadow: 0 5px 5px 0 rgb(0 0 0 / 15%);
        box-shadow: 0 5px 5px 0 rgb(0 0 0 / 15%);
        min-width: 240px;
        background-image: -webkit-gradient(linear, left top, left bottom, from(hsla(0, 0%, 100%, .1)), to(rgba(0, 0, 0, .1)));
        background-image: linear-gradient(-180deg, hsla(0, 0%, 100%, .1), rgba(0, 0, 0, .1));
        -webkit-box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%);
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%);
        color: #fff;
        padding: 15px 30px;
        font-size: 16px;
        font-weight: 500;
        font-family: Verdana, sans-serif;
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        font-size: 14px;
        text-align: center;
        font-weight: 800;
        margin: 0;
        align-items: center;
        justify-content: center;
        margin: 20px 0 0;
        cursor: pointer;
    }

    button#check-interaction:hover {
        background-color: #038ed8;
    }

    button#check-interaction[disabled="disabled"] {
        opacity: .3;
        background-color: #444;
    }



    span.input.addother {
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
        padding: 10px 0;
        box-shadow: 0 1px 2px rgb(25 45 62 / 10%);
        border: 1px solid #cbd6e2;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        border-radius: 3px;
        border-radius: 20px;
        padding: 10px 15px;
        cursor: pointer;
        margin: 5px 0 0;
    }

    span.input.addother .io {
        width: 15px;
        height: 15px;
        margin-left: auto;
        color: #1f88ca;
    }

    span.input.addother span.text {
        display: inline-block;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
        color: #979798;
        padding: 0;
    }

    span.input.addother:hover {
        background: #eee;
    }

    span.closi {
        width: 15px;
        height: 15px;
        display: flex;
        position: absolute;
        top: 50%;
        left: 100%;
        transform: translate(10px, -50%);
        color: #9e9e9e;
        cursor: pointer;
    }

    span.input {
        position: relative;
        display: block;
    }
</style>

<?php get_footer(); ?>