<?php get_header(); ?>

<section class="interactionchecker">
    <div class="container">
        <div class="interactive-block">
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


            <section class="block-recommendations">
                <div class="container-fluid">
                    <h2 class="title">
                        Drugs & Medication Resources
                    </h2>
                    <div class="links">
                        <div class="link">
                            <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M555.3 300.1L424.3 112.8C401.9 81 366.4 64 330.4 64c-22.63 0-45.5 6.75-65.5 20.75C245.2 98.5 231.2 117.5 223.4 138.5C220.5 79.25 171.1 32 111.1 32c-61.88 0-111.1 50.08-111.1 111.1L-.0028 368c0 61.88 50.12 112 112 112s112-50.13 112-112L223.1 218.9C227.2 227.5 231.2 236 236.7 243.9l131.3 187.4C390.3 463 425.8 480 461.8 480c22.75 0 45.5-6.75 65.5-20.75C579 423.1 591.5 351.8 555.3 300.1zM159.1 256H63.99V144c0-26.5 21.5-48 48-48s48 21.5 48 48V256zM354.8 300.9l-65.5-93.63c-7.75-11-10.75-24.5-8.375-37.63c2.375-13.25 9.75-24.87 20.75-32.5C310.1 131.1 320.1 128 330.4 128c16.5 0 31.88 8 41.38 21.5l65.5 93.75L354.8 300.9z"/></svg>
                            </div>
                            <a href="" class="link-text">
                                Find a Drug
                            </a>
                        </div>
                        <div class="link">
                            <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M555.3 300.1L424.3 112.8C401.9 81 366.4 64 330.4 64c-22.63 0-45.5 6.75-65.5 20.75C245.2 98.5 231.2 117.5 223.4 138.5C220.5 79.25 171.1 32 111.1 32c-61.88 0-111.1 50.08-111.1 111.1L-.0028 368c0 61.88 50.12 112 112 112s112-50.13 112-112L223.1 218.9C227.2 227.5 231.2 236 236.7 243.9l131.3 187.4C390.3 463 425.8 480 461.8 480c22.75 0 45.5-6.75 65.5-20.75C579 423.1 591.5 351.8 555.3 300.1zM159.1 256H63.99V144c0-26.5 21.5-48 48-48s48 21.5 48 48V256zM354.8 300.9l-65.5-93.63c-7.75-11-10.75-24.5-8.375-37.63c2.375-13.25 9.75-24.87 20.75-32.5C310.1 131.1 320.1 128 330.4 128c16.5 0 31.88 8 41.38 21.5l65.5 93.75L354.8 300.9z"/></svg>
                            </div>
                            <a href="" class="link-text">
                                Find a Drug
                            </a>
                        </div>
                        <div class="link">
                            <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M555.3 300.1L424.3 112.8C401.9 81 366.4 64 330.4 64c-22.63 0-45.5 6.75-65.5 20.75C245.2 98.5 231.2 117.5 223.4 138.5C220.5 79.25 171.1 32 111.1 32c-61.88 0-111.1 50.08-111.1 111.1L-.0028 368c0 61.88 50.12 112 112 112s112-50.13 112-112L223.1 218.9C227.2 227.5 231.2 236 236.7 243.9l131.3 187.4C390.3 463 425.8 480 461.8 480c22.75 0 45.5-6.75 65.5-20.75C579 423.1 591.5 351.8 555.3 300.1zM159.1 256H63.99V144c0-26.5 21.5-48 48-48s48 21.5 48 48V256zM354.8 300.9l-65.5-93.63c-7.75-11-10.75-24.5-8.375-37.63c2.375-13.25 9.75-24.87 20.75-32.5C310.1 131.1 320.1 128 330.4 128c16.5 0 31.88 8 41.38 21.5l65.5 93.75L354.8 300.9z"/></svg>
                            </div>
                            <a href="" class="link-text">
                                Find a Drug
                            </a>
                        </div>
                        <div class="link">
                            <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M555.3 300.1L424.3 112.8C401.9 81 366.4 64 330.4 64c-22.63 0-45.5 6.75-65.5 20.75C245.2 98.5 231.2 117.5 223.4 138.5C220.5 79.25 171.1 32 111.1 32c-61.88 0-111.1 50.08-111.1 111.1L-.0028 368c0 61.88 50.12 112 112 112s112-50.13 112-112L223.1 218.9C227.2 227.5 231.2 236 236.7 243.9l131.3 187.4C390.3 463 425.8 480 461.8 480c22.75 0 45.5-6.75 65.5-20.75C579 423.1 591.5 351.8 555.3 300.1zM159.1 256H63.99V144c0-26.5 21.5-48 48-48s48 21.5 48 48V256zM354.8 300.9l-65.5-93.63c-7.75-11-10.75-24.5-8.375-37.63c2.375-13.25 9.75-24.87 20.75-32.5C310.1 131.1 320.1 128 330.4 128c16.5 0 31.88 8 41.38 21.5l65.5 93.75L354.8 300.9z"/></svg>
                            </div>
                            <a href="" class="link-text">
                                Find a Drug
                            </a>
                        </div>
                        <div class="link">
                            <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M555.3 300.1L424.3 112.8C401.9 81 366.4 64 330.4 64c-22.63 0-45.5 6.75-65.5 20.75C245.2 98.5 231.2 117.5 223.4 138.5C220.5 79.25 171.1 32 111.1 32c-61.88 0-111.1 50.08-111.1 111.1L-.0028 368c0 61.88 50.12 112 112 112s112-50.13 112-112L223.1 218.9C227.2 227.5 231.2 236 236.7 243.9l131.3 187.4C390.3 463 425.8 480 461.8 480c22.75 0 45.5-6.75 65.5-20.75C579 423.1 591.5 351.8 555.3 300.1zM159.1 256H63.99V144c0-26.5 21.5-48 48-48s48 21.5 48 48V256zM354.8 300.9l-65.5-93.63c-7.75-11-10.75-24.5-8.375-37.63c2.375-13.25 9.75-24.87 20.75-32.5C310.1 131.1 320.1 128 330.4 128c16.5 0 31.88 8 41.38 21.5l65.5 93.75L354.8 300.9z"/></svg>
                            </div>
                            <a href="" class="link-text">
                                Find a Drug
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="resource-sections hrline mainhead">
                <div class="container-fluid">
                    <div class="content">
                        <div class="context">
                            <h2 class="title">NowRx Patient Resources</h2>
                            <p>
                                Everything you need to get started with NowRx Pharmacy
                            </p>
                        </div>
                        <div class="blocks">
                            <!-- block -->
                            <div class="block">
                                <div class="contentblock">
                                    <a href="<?= get_site_url(); ?>/refill-and-transfer-prescriptions/">
                                        <figure>
                                            <picture class="">
                                                <source media="(max-width: 992px)" srcset="data:image/webp;base64,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">
                                                <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/refill-prescriptions.webp">

                                                <img class="pic limg " height="900px" width="1600px" alt="woman receiving a prescription delivery from NowRx">
                                            </picture>
                                        </figure>
                                        <h3 class="title">

                                            Refill Prescriptions
                                        </h3>
                                        <p>
                                            Request a refill or transfer existing prescriptions to NowRx from another pharmacy.
                                        </p>
                                    </a>

                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="contentblock">
                                    <a href="<?= get_site_url(); ?>/how-it-works/">

                                        <figure>
                                            <picture class="lozad" data-toggle-class="active">
                                                <source media="(max-width: 992px)" srcset="data:image/webp;base64,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">
                                                <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/how-prescription-delivery-works.webp">
                                                <img class="orbit-image lozad" height="500px" width="650px" alt="prescription delivery car from nowrx pharmacy">
                                            </picture>
                                        </figure>
                                        <h3 class="title">
                                            How it Works
                                        </h3>
                                        <p>
                                            NowRx offers convenient and reliable same day prescription delivery for FREE - see how it works.
                                        </p>
                                    </a>

                                </div>
                            </div>
                            <!-- block -->
                            <div class="block">
                                <div class="contentblock">
                                    <a href="<?= get_site_url(); ?>/referral/">

                                        <figure>
                                            <picture class="lozad" data-toggle-class="active">
                                                <source media="(max-width: 992px)" srcset="<?php echo get_template_directory_uri(); ?>/images/daughter-showing-mother-nowrx-pharmacy-delivery-website.webp">

                                                <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/daughter-showing-mother-nowrx-pharmacy-delivery-website.webp">
                                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/daughter-showing-mother-nowrx-pharmacy-delivery-website.webp" class="orbit-image lozad" height="500px" width="650px" alt="daughter showing mother nowrx pharmacy delivery website">
                                            </picture>
                                        </figure>
                                        <h3 class="title">
                                            Refer a Friend
                                        </h3>
                                        <p>
                                            Refer your friends to NowRx Pharmacy and receive a $20 Visa Gift Card for each referral that becomes a customer.

                                        </p>
                                    </a>

                                </div>
                            </div>


                            <!-- block -->
                            <div class="block  ">
                                <div class="contentblock">
                                    <a href="<?= get_site_url(); ?>/telehealth/">

                                        <figure>
                                            <picture class="lozad">
                                                <img alt="telehealth app doctors from NowRx" src="<?php echo get_template_directory_uri(); ?>/images/Telehealth-app-doctor.webp" width="1300px" height="470px" class="">
                                            </picture>
                                        </figure>
                                        <h3 class="title">
                                            Telehealth
                                        </h3>
                                        <p>
                                            Get treatment online for a variety of conditions and NowRx will deliver any prescriptions to your door for FREE.
                                        </p>
                                    </a>
                                </div>
                            </div>

                            <!-- block -->
                            <div class="block">
                                <div class="contentblock">
                                    <a href="<?= get_site_url(); ?>/pricing/">

                                        <figure>
                                            <picture class="lozad" data-toggle-class="active">
                                                <source media="(max-width: 992px)" srcset="data:image/webp;base64,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">
                                                <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/medication-pricing.webp">
                                                <img class="orbit-image lozad" height="500px" width="650px" alt="nowrx pharmacy delivery cars in pharmacy parking lot">
                                            </picture>
                                        </figure>
                                        <h3 class="title">
                                            Pricing
                                        </h3>
                                        <p>
                                            Check a medication price to see what you could save with NowRx.
                                        </p>
                                    </a>

                                </div>
                            </div>



                            <!-- block -->
                            <div class="block">
                                <div class="contentblock">
                                    <a href="<?= get_site_url(); ?>/locations/">

                                        <figure>

                                            <picture class="lozad">
                                                <source media="(max-width: 993px)" srcset="data:image/webp;base64,UklGRtIxAABXRUJQVlA4WAoAAAAgAAAAXQEA0QAASUNDUBgCAAAAAAIYAAAAAAQwAABtbnRyUkdCIFhZWiAAAAAAAAAAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAAHRyWFlaAAABZAAAABRnWFlaAAABeAAAABRiWFlaAAABjAAAABRyVFJDAAABoAAAAChnVFJDAAABoAAAAChiVFJDAAABoAAAACh3dHB0AAAByAAAABRjcHJ0AAAB3AAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAFgAAAAcAHMAUgBHAEIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFhZWiAAAAAAAABvogAAOPUAAAOQWFlaIAAAAAAAAGKZAAC3hQAAGNpYWVogAAAAAAAAJKAAAA+EAAC2z3BhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABYWVogAAAAAAAA9tYAAQAAAADTLW1sdWMAAAAAAAAAAQAAAAxlblVTAAAAIAAAABwARwBvAG8AZwBsAGUAIABJAG4AYwAuACAAMgAwADEANlZQOCCULwAAMLkAnQEqXgHSAD6dQJlJpaOiLyvZXNHgE4ljBvjiAbwNnaSd5e0me/mfDp5cnkOff8Lx7MKj88ffqt6btSXmD/L8M/OuIn8N4Idkv+38AfnFqHYn9q5c30LME/9Hzp/g/9l7AXmB39v4f/u+wD/P/8P/5faL/5vJb+7eor0ufSGIpYi95/2VLLwoQcYHg1ciWBnJd0Ad3IyGFW80a1DVZvn0IubM49SCDW4Kk9FuHR/WlzgzwJIdCVPWcX1xzIsq7Gc8eVvpMzMkjkI9VdWymUvFIgFkzXyy8DfHErYItF4GmLAxTuQEAw5d3PYxO3YcTKJjLKIm3vQF6QXYBWoD4Yj51RR32UYi1txCK3sEIPs3SdR/J0hKhsqf+ANkJKg1VbO70/pV6cMDbUoPMVDLbPjUv8kEIK+dUAWXjjA0dEfeOiU5ZNk4cq/Y63MN9JlUOWr13qqU8PmDjKbfHmAMscWdzZL6X+O6VV61eDKd8mVZzJu70xdHPyrcA91fL3m16+OXzWWQ2U7Ej4e/DEO/LVXKUkKnYuDsJ/OHe+EfAJiMkztMIiHfZZ4KcguI4pdZyc8BhOo5+2cImFnWePtjDJpgYDTLD6Yj1ryEEoCloW93zHiocTskqQ/6MqTG0Mf7PLEBU7mcnIy862HW5F7EwArWDCtZhFNN3MdYHfr8QCkZRp9GGHFcvvl+YOwrdbq2bPwybUb0wrcs7BRa5FiKK93CousNKRj3W3PPL+A6gCl5ftvQKGtnPUf5Z1kZvfSdl3DJK5KbmQT2JGt2tGz3QV2fm09UDFfujV/M1ACqzePLqAzVKUosZZlNpysze70x3VIvpamySt4JXXqnGxvlbezWXrNhz+kFua7z8IxH70XR4nq70RVAfcsOk37CA6FnJ0J5x3P9EpOd0AmxBPzKi8u/gxzicn0KaIFFN42vDj90c0uFMJsjrQ0aNjjrf8SK3OVURHaAcg2TuPgkcPkGPoHY4kx8LVmrhOU858XdBALZIn9wtmSvgrqIcYNSBGWnCrX/IZrIwGdooiC8J8HLdpIMxEC/JlJvz6tbOEXRdhtYU2my++l7U9e+pgUWLS0NGeetqnurh4ZRwNXricfb2jITsBSUB//C1D+OD8URh6qDTwj5Te1VqEzy3Mj2YogMNV8jKSd8YnQk2waBUrukiG/LcDYAeIJ/u7p1Tq2/QbYhCeZftaBsnuTFbX543coEDptZMw926o+GU7lQTNzx6R4PCkKewcCmF5qAzjAtLWlxByV3EB7HXWnwKbE/0sJagfVhXJseOjOYTTD0pW+0LjbawRLlL5CniWSFo3lBZzo5IhwOCHlRgOb8PiAQQLkp2Uu2uhvYEGwl2fDLwCYqQ+HnwmHB7qcC9gvvYPcV1twQ5dgqpwKm0s7jtA4/CPTYy62EyuYIsW919a7TAVCesGOJlxbbZ16agSBo8Gu4uE2lnv1/+IY2yiD2h/HVBAxJFJtWjegJ05W7ImswM/mUevv6+pN8NeZHUSt1DCuMZdC1lTfJb0ZUcMgqxPl8FkSXz2Ztt035TJIIgJd4JxdVZhQehDQbMegVVcgAjJq0CbMiHTphnFqvOZ5ZO9X2GhvH9yBrD0ZzMnTEAJ/pRrCfuMEYhpgqwbRCorMBi7WUes+VhxjO5KR8iZIQGAklLYasp0t4Pd+SiYDCOR7honz05p754uQ/OgKDlFsBbogGzzkhEJ2Qw2fTFUjewAiyzBnQn/zid06NfHOc1oMi91Cb6tCYTr/goVtV37Bj8gocMTKYO0BgA0MlOIo+6IJ5OzEe9MjXMBn8JADD8kBYU+3qiT6/WliCVs5p97LqsINEJukbiG3AcY2l3uQYpICProUNlaTBoL4je2wE2xQ+4DXudUuR79Si4zalykdvZO2Nbf7MIepQFuAUFExU8IF+Fd4IvIFrcktQPJRAa1uLFbvI0Y8TzRJcvTaFFqs8AmcFQeq2Z2vLp+/C2D3+64sHmb7ZuAAA/u0pNpEYzViVqzRrqzNp0gL7VeKSj+LtHSBJjV2a04xhff57g/YqP39MXY3khwm1OLjY0oi4KfiUTxtnFkv7Q0CYpQMs93eCK0l8o9nDtzBsmG1AV3tUSv1bMNVv1CwHfQFgwbzvY9lAHFuM7yV4mUZxqnoW/r9MNFKtu31zFdKgjua2Bxme1yDJi+KSVRo+MZFQJaoUXVgVaZpn3jyG5CNL/8OfbIFxYZWinZIVnHlKWmijOJZ+cCN/u9N+tPIYrKoJet2emkoe98k6RSsxJiAcMhKzppxbUrJdG3DCs2lcQbtfCTl0JRwzkiyea5SohcbPCy6CU27R/jD80WPRiiWDLZhh6KreXj1FRq7XxqA2xz/V4ysWSG5KWz7cXHpb/jtEjIobK4GbeyOLqBljdytON5mlM7Wueer262cgklqyf8/gEaTSW8Xtjf1cjMPYHDbYWa72JegvjhaY4JxUP7+keo3+22Kfx1be+QhHrLTeSI0zWQGexnFqQ9XA8VWqTULh0TPvFxhKmfqhvlUGPrZY5x6f3XCJ4PEoi+vBOgx6YIZ3x4kKoghhFf8ej07Z/JRwYWYGfMKGzrwNUtBH6JOtjowUMxRHoLK+yCTAGilG7duF40PmP758yFCv1xkCtPtScnIXM7r9Eef9wjQD+oRKliXGW+pMkyFKJk/7q/kxnCi7ezKz6M+Xhvwr6SM2vP5XO0Y7jbl3lESNAgRKeGsadW7Djy7QHLF3WE1jqU8vV73giEEgUOGuWKjJQ8W5uTu+L6sIWU2canEWt99JTONkEdZWAUSGL9AKEv40KcRMC5M4OACkAPW6vin44s+pyB2lTQ+2s2sW4AeF23wNPQEbeZCcr6gJQ8dgefT5zatoHewvjppqt1YHRKrU4OPZVP3LqRgXwHwGKgJOk22oO18IVBPyQJBDKCPEIozNpbJvRQMwJiLNhZbt2fj1nD+5L2o9QpUFA+Zn9IW9vVq9cE1frOyc46YEMDoNZNMlxToBCHL+iK8XX4375EZMXK+RZyg9sqAX2SivceP8vM/IPVXCL1FPe9Q3wy+PfaWcpPKXfpQjX26l+fEHvWrg6xE0kO+ytq0roEMyuYgveD2UzAzVMiQz5CPpnJhzuMXnDlMfODx2kMnuwzQFZ19w5Pgf9foC/5cd/u53gZpA2r5u+S27mCrhRy9DzizDauKsjbLLGBKXCmPj9eHZPye2Hk0/FvyuFQrM7Eds9fNA7OohlCEfNjDPxPUIzZQZhVuSroqcDC1tfMJ/l6Dyox4I0P63zpsJuvbIcazYew5lTS6tTY5aF6N3uD2mjr5PtQmDA6nz8UTxNiXNj2cBe7goLCTbz1dK7fe4UoEa2PSyqh+mxzSJemLxibraaK4bKtuRRUUvWvg2kiGuKXmsDkvVZ7+rfA1OJbn+J0m07yUeUSoxjNqsbTMG8UBF80+zo18SsjmYFJGAkIiZpZFGLo5CBBEtuCDPETGzYzksdie5lqCVgv0UciinUaUl+PJOkbTW6Aq7leV0HXXQE2432WCdzbwyUFe6jbjA1996qquu7ad4lJcN6yXuxp1KizycF7uptzFQCyTyFUH7Ev6XOSEkIs5Afxj4ak2loruAg/fuaWVfjVaHQABn1plYTXwaoSN5wlHzpFsGkTfNpzvoKVgva+11StBSYi7RYadVOWzAHD7MjJ3VWjwZ/zT4Rk11JdzJa86FIAm3o/8nQQjaxanvvkVfDE9zeHSpGdtghNfaf2zvec4gFX05ITE/b29HWLf9g5tdEUtbk7URJrw7aAPSgXMVXs59rZTE9Lr4rk3yB0Wxhwk8SvyH8qehsO3o6HTkORWa40Fwqk+Xn1ULjLidC9eO+F9vS5p/6RHD1RzcEa4dazLOSWEM3J6Pq6V/41dvQCMkprDV+yoJJJLzgVNzf2petFhP6yY2k2gKI/3QLyIo52i6ttGlyt67L7dtKXIjvI9n4YhuTMRyMEuSfyk42qA6mJmIP4c0XeGyBtMu/cVDaZCnAzMpTa5hJaxwQx9td2p6SV51vDXb0t2gsNQIPH11HzFWUCMCbdW9m7niKKIrbZJBqkjybjFUFa89DeGgz/XV9m6zR9nVbqg4oayvxDYntJCCnLcjgWp+vG1ma0+PIt7UXxEyGOrLMUoovStbT80tsAQ8gQwZmteb5VPZ+TU3ER6ULUhwymRB9f2KBySU/lIG8lz7v9uTCo39VoqH8eDZnCmcJtHIgKRBy8P8lNjxtC8sje1cPdEFRCIAJafA+xmD5tKP30H2TU6jCl5sXUS8ztamKdzDsB2J2CK7BLK4uCWEws9AhQCV23jtTQdwTABcksd3TRDrJf39lT3qIkuQL8nYrc2p592SpOYGjIYVEginbkKCOZ2stuBEH0RDuzoy0OVS1Kr9IhZRX2imc87N6CGIQIyhS9+OlpvTMk8qVOvrmZDuskSQUrEEixYSXkwKyt3XhzuCerBMYMaB1ouErrjiUdfXF8sVkMnw6q9ETRJOf8AGKE0f1rekECR0WaDrltUAUEPxpCxS2RVUHM2svjZBpYzemc2/HJ1vbnrnBWw3CXUwo6FITigANeWXua/TAHauppdpz56UttuinLLjw0n13VByeCHQd1nMhKxlohtjMC+zuXfWjNuuI7chbxUsGL6phdpxX9O4wsIDnVffY2SmpubBVQlg2JfNzmTqhpbtt0O3h1fTnh79wTJ6uhDnFTHsv8bpD2TvWp9/jP7xylAxbMrxn2ZHAsA9ASJfCsHB0hIXinjwqeQpD1UKcwxGXt3TNGye3NgtsaeceQt+10pnvc/Pb9u1WSqghsaOJhXPIis7KMMKJYWnuYkevnl+6gSpjBu0Hbbo2zEHCFp3Hh4FVqXEalsNb+dVe+r9LXp+ECSo95tdzB1h6qX7p+ufD4tRQbuYFvuOAxo3C3Qhq2lRaYsNKc1YHtltFY0RYTk7W/EpY7OP1dUEaoc9irYfkXIEO9sXltxfE+XSsd+JpOB12GoXnnnxfRLEs0XFlMXfKsgEenB1z2mxVmP7SqlE3NJXgnaPGnLyGt3L5hR3gv5BUpr5CM8v1dfmqe1CkuERWjKrq/Hyen12c2VrKzFUOx2JVhiSv+8PFZH7+1bq873HNf7sl2em+X3rpRDDYU7IavQH39wPdRKYn3xQH9nE5Akmb0Y55xiJS0/JEA+aPIgHGDmmbeCRIuOhJDkxRdW5SxBpRrjFj9f+ECqmP5+WKg11l6u+1TC+bNosCpuoDAEpaaNEZ7nVBsoH+K2y/PHL3lsVgvEHnFTH/LQHGfZVWxk9rFc1hr3ijQ0HltOBI0KpFQxFG7Lw6MlKSZ2jhfD+UlKE3aytlo4SZZQAdmUXHwrBcbkTlpU3wXJpdu++XoWC6ub6vPm16Uf1jOQ0ab9Uo1SBWvu6+gBVsKGf2f2M24xaK0vz7ph2vbPsc+oOwp9sReALijYCv9uOXUWRCMxWSAeffefdHjo/LqJB8j0542YXYJc0Il8hyG/QQgBxW7Fwd99C4tlO/igN8/OyujsKV3lMQuKSdDfL33QHJegqC5wpNY51zgYNjvQHUm7QCnWmS0Ot8FylXppheoFmOPWzOeAk0n1kjueSZyQITSncnrCDTMZ1EfbhWPf7txHRvNlwabwsVhcEAnDqGqiYsPmlS2xN3d2rKUMuPsQvpk7FidfpFkUZQ6vejgiiOy9PGSOreNlVAqjLMlA3b0vWHB1oBnNQzE1QpP0SCNtfI2gEadadG9hVWWJcZ7hOvoCnE3ccT3QO/gMlshe578v9aE8JdCkLWQtxGuPiD7ZXKpQv8YF6w1Sa9BnvXckNiU1l2WIEPVD4PrvjZtudC8quTL88jIyxTAZkmPt2CJF67lmP1jrBbzRUFP7nA1gcAsfgh7Qo1KUfvljiExq7MDZu6PhBICghaav73IQC90FugQAtyu7GA7aD7BeTMnHSqi++JCCYJGOC2WvAISNAQGqm4x+NMlhLYo7VM6h0K79W7VF4h8F6PJNsplkncyuDlAWEOuA/aOPh1o23w8vyZiDhvvLBDP4k/0AwAPPJAKxYi3cVr5ShfPV88yHo5CEnqDnyMrojRNZ+SlaRZRMtYE3mhH4Oxq/kErHR329HqcvgHqG3o9GzRGYWkTnyALOkukgTBBqz2y+JprTUaR6TIbaPg3CmMR/LDTka35L4aurTF/pAmudEKcrFA0o8PoBB7AioS1ptuavPcdHPzVjRFEppJ1PdH9pX9J+r+NXuTmOyUk5CTJvvs6NVwZf+pvRAP92zEImiDdR81R6UkbPxwPJv1OkYPXa3w3ptQnrDRZwI31yRt4UuJZIvuungjOqqzUJLvfXMDncn7wKkCkzF87IGMbrkPgT93SKioPk2UzAIIWNX/ciJK9bBcZK4x1B4HZnSPCzFy1Z7J2OGA3TAp5uOARxNAZX7l9kib5II2fIS5ivp3FKVbKcctTI0j4lotCm+/gJiHykJ4DBwv5SwTGwru7sgYEmzSmiFtBJTeD9g2dQeGvxnvnohtH5TdF/spTBzuL4cfmQPjWFxRi3Srw3nfyr5WRvWDQlN/SDIjTJHraiPZ2E+KBRNnJNGz59XdYBgOFLAx903Nr4oU9JJ7jNFllJ8pzUWEHAbL0H3+SfwyO1CUBWkO8Z0YkymL8wGxh9oPHieci7+4de3VIaUZrDyFcDl387tzrNp2o7TPlyULBlDKx/sQxTDmXiWPgTikEWYX036UmFBPBYJwhcPv3Ik4UtFkM8fbl+o01wL5HRL9jeYNMFip+AAnwVRirhzQkpB2GDBGPmHPBxCC8zHoODCI7zAWCJyRBNgx2Krp25kM0oYAMWHPXuFP3no16qS9LgC955aPK6Ompk1UymtsLAcOL+SbByq8rw65FwTXviEeZzXa1SS8+Rt5kx292knnHhEaHuYnbtObN6WijBo1LYFVFUUJcQQE79Tysw5+I6GMXiGQAQEGt7ZHbEHG3oxSjQlLxUU3GCK5ieObXlAEG4S6tfAFX+fmFPProetPb/xjn+f6dT8Vxa6QbSgxXga/2VGvrUjxzZK3vxPtExbm+vCfgnAXsNXtA2rsrSIo5faZmkLgz5mV6Ej0d61B2ZhGxkeBUGndgE2IlWjSnhmQEkQUvKOjHyFxeJAB8wzNV/j9jnidMvF4Zur9eG6yAhyPPp2iL8Z3rJxh6TPDN1oeNZg2ko737XOzveu3lz6N+jnXWgrURHjxSS+oFRPCzsQt4TPaR5bTDhZXXaXDK2OTCop5NPxgm7pB7x4A7gIfpFh6AtvtU31PugwsuPBDe9QPPN3Sqva9qiis8qVSRRQqRuCO+zC71ZTAM1lST0zrk/hthNWm8Eqh0gC4JFmHG5kw5TrLRry4itbsyxeACNGFmxCB6pJMqDTGz2e6D9PDFm6j8hMdr+DLwDmlcb9C9G9gUgMD3/S05DJWgt/qXyLyJAKn+JDDGqThPB9CPEaMP5h/1IaLYfClyefBCrXR6lb8XLEZ2bxp+XrS2pf4rV6WWaqTh7Ev8tK9IDpbIkxH6DbrhzCs9R0bIKoVjtn0A14dcnyzLYaueJZYJ4hzofxM0Uzk5L8+fMYc6zws+MSUpLF9E8wpuvlrGWJ+33dWE2asA1wIs+jkNIsbKVz7SqDbhLm+po5Kt4pOMGURcsoFLqCzCShiIF5PvSmDADxB4oGmla0vkbSp4RO2qOpQrki3USoF9b56J6qFr/GHtwBcg4ndKpHHWszqiaE3cplQHeqawt3bmZBWZOk/0HI62pt1TIJhFCU7ymInIqMEMtV/YFu25OVBhCWN9kGbYv12SQVjJrNdXHOsexppsfdAwp4BXOk8arf4YPMBaOMaUY3QqrT0mi5wF6Y0xLet32/uTwa06TBDuesDz/4+92FjeNkqSGBvdrNmlmqN36iwo1eXeJHIqHdYTEd5lg5fVEyv7HIzNnxMpU5Py+Doek/3wBxBc6kEpLqOAVlLU5O7IIWBTqCa7hxet0xTNxuTGLUG3AbiuPJdFwkDFJFNE0jDBlERZZZTENxOkj7Rfhby2Ap9ym/QN//c2D6wLgnggr0PMx+gifAUennA239dZnwudiLyUFImHSWX8Zvym/oTOxmUV7HDU44qYfHM74mc+qI7d8q8DnmtGBEbqOFPZ/o/yMoERz7sjdwsFydjqfzpFkFdf0hk9yBF3k92Y+1jXdzDlH+ZAICRd1xDG7p8M/0tuoY15jiMFSQqo8/hP/nQcASkwXf+U+frK7L6mq8mZ0zG1P3Xjvxnqdz5jF+F7Zp4E8JYwZhpQU4CEPkO1RPXlIfldBVreH54mm1U7gLdZX1aljDTBUaLTv/4X3yWf1tmW8fD+nqA9d4YJojpzPyPu5WYdyVSwup476uMBZLgFnrTBP8/4VypswZXldreCJc082WH7ovHLL7wXu2UaPO+7OHCFb2kBqVmXFftirMCBR+7YqRWCq07xDkZn1ehlFRaqV5VZKIDQm7su5hPjAdy9yKaeOcc28XC3SO+zcIQ+Gy37y8fbOE6jGP5x3YuvCiHDkWBmZUZtvsyfQ8m9TcBGYfYUY+3yN5ZPOLP67OlJC0HwcR/jdRp4W9izCHruice+KhbCOMCOgWfURDRNRrE9p7pxGe/gTKk0cuqQilPNSgnqwmYR1f5v0xs4xH4r8ewFwe6Scw7XljkM0sR1b2On4dYB/n0cAw4j+8eV/CuZgi9M48WL9vUQxEItltqbowGggpNpl8H5PS6BMWY0C4ojuLE4Fkph4vqKHIGlWWWYrilcr0fDzad6rVrGvK7OCadF1NQkE7QYDrbFhZ7t4uQDDVszuYtE6Kq6zsTgsi4DNe5S2biflVXzdL0DKTbd5HLA31kDg0FPK+Gs6fsG+CICumo9+VupOSBBuizUZlUd9mZE6tI+BqCacfHq4fw449/0++Z6q2ttV88zw/brt3Rmenc3zT1eNRkfVz5wShj6mV93XxKFmk3t+UoL1qaYlMwTN5Zu8cUn1hgmZJxLIzeLZkWGMZAFYMH0jFVMkyr3zaor5vn2Iw2teAb9Qe5Teqw5rw3y3qlz25jnQNoBIKpoSFlUfVY2rE0NpYAqsNcTZWh+fBdLvR0RsiwFwNAk3ZP4ZZRuq2GgufiEVaycDzEAjB3FoFlFFOEpPtHV6SnCpvL1GO6YMEFLeCj3y4JX9v9uJ4f7vbFt9b8q2yx3rCptAtDTdqFuod9XOe6qUfdxLRo9jKqCYLwW7A7k240V0E5HQSQLjtFBsxaWAdJACgww0OUBzJm/1Vh0g0ikyF0F/XhyyZM6sTqt9KHsImy3wdsTQGe6oL0dmySIqx8YQebDfQz5THTHIx1o1OARmFym6/CRQPEiNSI1qpVtYXUhSvdnRyEeVKUJipD8Gq1SVPfDOFoH+8XyYVUPBQSIgM//CrbEKMe6cnABFAXjbQYsn2SEFSWQy4mPKRmg7zoZGnIY3aZa0DDI9282DYobvNqI7HBgMOPBSL/pt1CraiTnHqHtS3gcunZoCZoj3Bjpnrc5oPe8//NPpmmdCRzGjDGGv5HRZvwl1S2bZOJXIp4jtGQedgopycLK5TweNdCp4IgYmVgVWRv65tmgdtJJSOSWMWa2xJ4ft9ALRhH5bn6LtoWpL8YNzHeaiYp9eCmeKxOdCncMRmTbQeaMm3rT0b3RhtW/sD4xgwE0vPUoul5KeaAmEJrOek9g6wQyIovKg/5esFJCwhy4K084BdzgN+jAdYAjB5hr0aIYaPbVBsJtVTLs0XnnUvt3yADtEvotb/JChmsQFwNygevVWTV45XX7StMcZiVdyWp7ZLHJuImnd85BOiQikzl3WvEaA3hvctxB5ES2ulj1uBreAEnFY4RVh9kcRp3H9GYJPxH6gdd4MCz7o2nG9lk2TYaFy9PleB7Ra4f4N4y96+lIYGR8SyceCaviUt47AfmaQT0VOt6eBc//tWGLxoMAS+rJwGDe3ZXd0yxqcNoh1vJGv8z5tsMYfYAY1MHYtyGFuJaQ5p4uhCBMUfNATpEUN8zi1lrbeVH3rrznGC3PLMFOnivOjveR6tjK1vg+E3h7prIKoqHl8PxGYyFZw06ChuI5jMwp5MWPEpnoHqjRPRmkLKDQzjunO58Ojfmgezc+iwzl7mAAYJFU66zuFsWEV1lRxbc5yVzfPoSdd7Eh5Bau5Oge2+xjuQFZmZ8U9cOb7Ne1NKg40Zi7jlsGatzCjn4ha8Bm2jY2ubMmh44ZIEJICW57IUi/54GyJiKavVGDNMJuOz8yxm16A3eG+V+dueyNxhsTcpAtcEO6G317mIIHuV82kKic9PsFiHoVpcnjZdjLhJC/rg/8MIvM38EexWAO45fPpkULFuIsEEGSP3gSoU60c02fz+l2lOPFqxayDaB/aypZj89wavYXu3i7FmefmyiWasWITEbbWJRm5qxknF3YajLO6rL58U0oWW2kwAreHOr4SpF6ma3INZk1XudCvNo3SFQuBVvTxsDEeL5JN+VCfY2M86evTaCyL3uH8eCBQsFdLWyGaD+e1IVpgD6YlZG/YIKMQvGd5q1q2elyyMG53+AQ5rMTQcmcpo4qFWuEZ41F2ghSHuk5RT6Sv3JWcIEEareE2p9odng5uzfGRaP/GGr/mlY3BsAwm5DXd4YoW7z4/ZukliFI67L0kPW4JTQA059jmJBsKMIDSUucZ+Ylugny2++LPi2RgsNfncN6rF6NWMuYqOlJ5u1MnslgOFc1U2CNc7lfVpawlkR3wciMAafVnRX5ClRxW7mvJ8yJ1c/5/ylhahuqGMrjf7cS5P3Lfj1VKWJ0LpC9CLfnf4OgE8eGJ80igrDMx3B+Us8Gpe0QqV/V8KD7Zx1imq3GiQdUm6HRXkh/rCewQnL8VMdIbNnIUMpIKPxcPkmNECqXnq0kj0JhaMvQTPRzGFbbpABTHBIiu8dcAD/rEUJ2d+kOdPQsDE8SzlwFdPq/88CKHC1fvdxhXW+xMxtkKnJR6Uuix2Aw4iHA1CZM2bkTomXygQoRzdIOr5aFK7kQZnBjclkazBhBcKE0QToif5x/NK1J10tlVPv9cAtJWu2pEpbzuJBajtGQVTBRFmdNyraKJmyilwEx8ftLwSxcaLngt4CWYzEm429vcPYs9xZIZxckmiRMVov8V2eWYTx1tXlL1vWsf+Rmz+8TrLolEjQKwN5gz6meINHDhfwaTMt1sc7QcRi0DQDdfCDrPxp7M+W5ieySPCchVbdBXz1Vp9S0zoGc3e3ocglwTH6M/LNjwQZ729C2JVckgPkodOHsBQ0gttzlBQHQPV501UJ3C2X0SJqWCKFTsAUcTzIFsdFkBCAbaWTtzOd4zf/KDeOVNv7Wa0E+k0LoBXVHnfrIkEwNTcGvEVbQdl9hw87ghrMZYMiDTicjrDkggdtUgTgAOvwSj2uJuvtElpBJBmt4BiEwDKdwJrOQL5PS23G+HJspsHFShjB8cXlNP8Tnsm4EeXCtkQuN9Ly3Sq/Nij3EVvKDXoECj6d7sX79zARmVGvUZ4y7vZcHauCJGwT9BUBeEzDmbrmXvQCLzB7zWG2GdOfol0/cDzt1XPmxTZgLBbhsRUM3wivE5Sz8JGxu2766gmgX9s5xhe8RcP70K+21scwV4ZU7WUzC2BJsETujSJHvmLBTwlvHNAdp5+6nKhMsLkPGeauFj5WlaygglSoaLfG+MtTe7Kyle5B8wSZ7uS4UFNa8/dXZ1D1U9PxcGUebExK28MZhN8UdJW85+Pd3xtXxEujh/P+OC0BM/R8Qje/yw745+UZJt19b0Qm6ORFQwoA+4RwbL64qxeftOiCebWcGR8Q1ReX+WTz7PCxy+zptDIQmurL7F6DeresmS8dj9ZesGWCG83EjGxBccxQT4E51tO4gzTmadk34KgmYHmnluXOMbuyM5pbZx3kr0OcW2LMTHhd8ZrjjYutIq+2gwXbVMUtBCY1cmvf8wWG36ax8ptA5zMtGmFbHH7WTSyr1BKuIJGXEm7i9/IU9ocBFPJD7KX1Hs+2cC/2lO8gh8bAduIPlW8CvuMPaQ9q4Os7JtQjghquj2V+xgS8lHXO6euyDoEg1Dmq01uHC9HyFc7qZtfS2A3BztdOf7aHL6IkAUsxVP/JJqLrtMFJmOPHwXmrcc6kJbMmnnYLZ8ltHABilv/hMxUL4QWrpvdyvWgBe8rdIg6sS/70R/UG3ej94tiJjfatYGePY4Hrbc8TIMpgabzNX2RIPojSYDasZHxILU7FTnQcGmX+SaTVx52nQzpX0xYcnC0vCvNWJjybYe939daraHo9cJET5v7ae/181ONOcGV+ETMQsDXZ2QFkpCzcY6onJLmjiVniCjNlmnTAcZwq5lFb7V3sofByxV2w1uc2Sbp6rSrIgE36orVovBe8NT+on5L8CiFzx8cqJ3XSD1S9tskGsc4s6lTdrEuzQd/6GgIcKDzCRsxWXkHHLIE54aZPiVs4bIcOB5347qcXO5sVNoBQ/VxyjgENUEAnhJXqAPfV1uxtEAR71G4KExCZ9GcUkBweFVo02JbPUXnw5gxP8jA3qXlHKVNTfbC7gjxThbamAj7/7/U2Wv5FjX8/5Qf6vjfGGkpIAdt6zKHSo+camgFJjaUsnzi65ylaRPL1WmLdNW7E2ikbA6cWXo4XJj8p9okFNPuT5lZ1ytZ+eMsRpAApgNJ7+L9b4PoPp25uUQyNcatxiD54v7JrzEuiz6ai2086j/q1SmRlfCPpLBsWI8cbSna67FRHjHeMb8cMZuEosmtSDDd+WN7J1ySG+G7WwrS5NaYqSlUz9RAyw4w90o6AZK0edFA1zH3kyWtWadmvWQkIFC13YxUb4EsL890ik8g/hro4XvBfGiMVMoXV/cqzXhw3fyNqn36fmn/UxiS5wXOWkupxR6/mNfJFf+/Xc/iTbpiERO1qlh3EODPoQFhqM1zBxVfTOJHGOWtBIKhhxufMnZPReio3TjTw60c5Eqps+yWdDukgYVwq32tUyNL0zutwKlafg5SFfMkun2A/81NRrs/8fdy250XxLHyPr+4Q0C9bSFfbnC+vlnCQuuxP9Vbne4zEdwq6yyAcRH0UIGXAk7Vnz8jkaQ7mQMKPJ2d6R+X7RVY+6Ka75UbsgvgEu62x55RpkAjHG4DC/P7lpdCBio1cSA3+w/4PVPq6ArUxapalPk0aSi/L9nKRcE9Me7gEy+bt/JOk0ODa6ZKIIXqtgqDq5sGA9VnIp09hiZpuNgnTSzLKQKLlKB2M9BZ+xjB59TV9eV7eiNXRjfgV6hjLyOZMRbLPZpMLO9tt/zkXmHTNJ8VqzfeR3XY5wZ/ETPF6BuHnXl/xHgRYuP75JJWsE6ePx4wj+6mdRLth8IRPgzC5TfA88OnvoCtnM43GCnYkxuBcpR0HbT78AG1Q3q79kMI1diScDtVVRMY0m4IdeIKwcBzwf+wd8b8lllOYNfOG/i+CKxVW/2U67Zzao459rlUuBjNJXGKPIUOgUnqMY57pahSrS59Wamxo7rpWlpe5k8K+ypUv44GA1l5U9PDwM+omvDJkrfk2437mhmnEMABeYpgQYIqdoLy2BXHBwsJl5IImtS5SghoNwEn2lVNlKGwQy7SyjXOeHvG0I9kZ+cn8Z8Eyg8HM3dnm6poBih1zmn6HOKAsj+mO5eD/GFz4p/+YtTMloeDcRje6Wkf4jkyz9PKoiClaB1s7QZ6a9YFwzVr3jVCtTSy5PwHuK21wTWUpqjOlAsvLDvrba8thx7ZgYL+bBz55Fh4WNs1dDByX1mzPH+hioINO8Ad4x4lr17WLUsBNUkdhn7BnXDWsO/m387zukCNkKhll5CcTX0qAP9l3Ib5fjnAU/1TC34XpT9PBDNahzEYy9yy/MvkY+DMBkz1OSQFnr6Gt0SLjLZUnCktgX+EyQpC7Dz9WzI3+uVYJ3sDtSxh6NBP8BnBNiU/69JUBDp+pqg8AFEdmWNCBaf2C1ZpGKCFmPLQq41N0d71xdjkWDN8J+iXVKIs6xYmNyKtV6g5RibgZw6K4l+OqhusbcM9uZAZHoWoYTKs3H3YrQcIAEcXSsl5bpGmUoSCeKSH0wSJBdZSuDjc2X1RX2+04o8WKPvgSMFc1IxwLIjfH2YN6Ij34S9eAeBeBw2an4I9U6Ey5QU91EWfZtpDEa++FR+OY+B5WhoBu5EW1nUSaJmD5dBah8F5KEebH5mfCki0qOovMBiViQ4uqC3zaEFe4x6Fh8JQEUxqE7byUVCS7GgekCY5QXqpMZ8S5A+mcigKRviK3+47Jhq2xzp8eips8zoLNhrxMMGcAyXgJvSv4wGyzQdnDRMUSlsK/Y2FktAKyJ50PEqe7KAJg/dO/zgrTcBROpuwipgshruXb4MH1yNFmxdmKDStJK0AAtk0CirCzoBvmK3YkoWw6eOmU8rO9ZJcylOFvfMDQJN6mOEcozoMd/Zh3WH4Yhp8llvbSz69WUnF/EPPlfMTry4HJ0MoU3w4yE3TvZg/xJEaPVyw2jmHV382FuJLr9iTv0/erUU1HAolqsIAw6qf0+dnJm1uIdICMNVLSSWB2Atpg5T0/WuYiMGOU4PWWNrm2rJmDtzjCW868S9jXNC3XBbDqdVK137IIHXja/GWhUiUXSvQbQhxChw3/JDlbUBvyz8vdN/5AezI1PaXf+PSc4tjUI44xOMC/ztjR6aKBGZsX/b55qFZfcKk171o9xBJ5y38rFUQaS02NF/fBMekx7CwocClBSq5QyZHhSmRlNuk2j3+Sz0Jm7qxgI51a8zB9hv0DRzo/wCNIFOKfsP0R3FQ7OhVSANVqKn7Bo/F2y+8xgTeVjvAEb3r1YhUtTdpSvDFdrLCFh3EWjN1vLy9hoAtzWJpArixiCSCkWd/EZHmowI6/IpqWp7jSoU740XeHZuSJc1Jmb/uN63vOJgYY7DS7EceDCg5bQ0VrS/G6scEM8tuX88eqIf95b8ybGyie5nDuKTfzPEAUqB/suL1nm8v+v3zGkMWNlS6KmZBF0QytBFBtfbJjBI2EMM9j0+EAB+SD/6AD1Ddcu7Pkc7RDQLUEylfTemVyvWTIwG4PGlpKx6VbnpXylKxAvmeZD7iX2++iEKkYJfETXcldN7HnN100ki2rXN1FyLwPfOoWmpXn47cLo6F7c9klp8lbZrj5YuALckIjOBFeO9H6acHhRC6bsCxyt9GGkaehecRU1jT1CenoSqgt4CVteWkqsl1hSC2s3MvxMTAyjH4YKymZQxoWXuL6vvaL5voLBnz9+18olVFrjJM8cOYW5pwtk5mS9Gji7KVVIVFL2z0dXNIlyqlw1PjRUsNMozlx/rZYXVPSConwQyI9vSw4AQfTqwe/5AxM/pvn5gdrDOmd/ZMEPlovp8eNdkddQXgLgZpTJHF3y55cBltWID0vqirirJ2exmTcK9FeIUKL3Z2X1lZpf94ob++nluz3HrXQkW4J0LLbd2P4ZhFBbYxrtUAc2nkxHWNXUPkOcWbSspHtEquiG/SAIzRWwmhRtfutl5f4bqtBL4u7EjYWI2/Tm77CfIzaToZwnzn456cjx718sdtc0nZqvtUehoA1dHGSH0uHnPVXx0fH0EwarrSmEy6+Jigyf06ocGPiZTif9cQAZb8lGeSDVHPVnD7j1I1xwhYYA0wwaNHaJCGR0Kup5LUGwxu3v5514VBU6lFtfa1TGBfnxCIUpJ9zIXYXWEkUYvwNgisOnjzc+oq6IVtpIRHlTtNlsXiwZjAUXVEjWmEuIzsb8W+10yEKunOIjTMJgdSaT89q8AS1NWVskGH2MKNVsyY80djfxZxKgHHJQDXJgx4AerKjmBGRy3DFGG9BUyZk1dMVg3rIrfELnDJLHyxfYZulXg4CCf9nSDj+RIBhBZzxdD/T+cYof8isfI3HyatBgvvcOeseuy/tjkl59Bp4QuaLEXxi0CxnaAsAHPeBxMwIzcg01UyEujl7kDDS5i31QiSUdij8VqAN4/XKECrl4/SelfvJj1pie5jXE0LHXQIlpkmrNuIgF6aei0WAs3PRzu4/OzoOqLEU6A0Mds05BF2ZCbQJi9w04XRLcTMUGCSRdc9xLsN415usEintH9EgRR1OiWPvj4HkSqKnFt953BqTyQx52Q0e7IqQKeP3HygrE5zGPvf3+XTWNZelVZKdKIHSYv7tMx/oxSk64eWgDStlQDRh1FoZQ1vVP0HwkkdYh/6ErZpAQuOA2VG5iS+0B9pryOkUryc6pKTVnl0WrtUIXPEDYjQ9m+xBNRtZppKJqj0FwcgAAAA">
                                                <source media="(min-width: 993px)" srcset="<?php echo get_template_directory_uri(); ?>/images/nowrx-locations.webp">
                                                <img class="orbit-image lozad" height="500px" width="650px" alt="nowrx pharmacy delivery location in irvine">

                                            </picture>
                                        </figure>
                                        <h3 class="title">
                                            Locations
                                        </h3>
                                        <p>
                                            See if there is a NowRx location near you or suggest a location if we are not in your area yet.
                                        </p>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <div class="sideblocks">
            <div class="top">
                <h3 class="title"> Trending Now</h3>
                <?php
                $queryskde = new WP_Query(array(
                    'post_status' => 'publish',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'tag' => 'trending',
                    'posts_per_page' => 4,
                ));
                //set our query's pagination to $paged
                // $queryskde->query('post_type=post&posts_per_page=3&tag=trending');
                if ($queryskde->have_posts()) :
                    while ($queryskde->have_posts()) : $queryskde->the_post();

                ?>

                        <article class="side-blog-item">
                            <div class="content">
                                <a href="<?php the_permalink();  ?>" class="readlink">
                                    <h2>
                                        <?php
                                        echo  wp_trim_words(get_the_title(), 8);

                                        ?>
                                    </h2>
                                </a>
                                <div class="clk">
                                    <div class="data">
                                        <a href="<?php the_permalink(); ?>" class="readlink">
                                            <?php echo get_the_date('F j Y ');   ?>
                                        </a>
                                    </div>

                                    <div class="content">
                                        <div class="wd">
                                            <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </article>

                <?php
                    endwhile;
                else :
                    echo "Nothing";
                endif;
                wp_reset_postdata();
                ?>
            </div>

            <div class="blockitem">
                <header class="title">
                    <h2 class="title">Subscribe To Our Newsletter</h2>
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

        </div>
    </div>


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



<?php get_footer(); ?>