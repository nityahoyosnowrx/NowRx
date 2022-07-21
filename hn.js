const puppeteer = require('puppeteer');

async function menuTest() {
    const browser = await puppeteer.launch({
        headless: false
    });
    const page = await browser.newPage();
    await page.setViewport({ width: 768, height: 768});

    await page.goto('https://nowrx.com/');
    await page.click('.menu-icon-toggle');

    await page.waitForTimeout(2000); // wait for 5 seconds
    await page.screenshot({path: 'menu.png'});
    await browser.close();
}

menuTest();


// async function main() {
//     const browser = await puppeteer.launch({
//         headless: false
//     });
//     const page = await browser.newPage();
//     await page.goto('https://nowrx.com/referral/');
//     await page.type('input[name=referring_name]', 'nitya hoyos');
//     await page.type('input[name=referring_email]', 'nitya.hoyos@nowrx.com');

//     await page.type('input[name=referral_name_1]', 'nitya');
//     await page.type('input[name=referral_email_1]', 'nitya@gmail.com');
//     await page.waitForTimeout(1000); // wait for 5 seconds
//     await page.click('#Submit');
//     await page.waitForTimeout(2000); // wait for 5 seconds
//     await page.screenshot({path: 'referral.png'});
//     await browser.close();
// }

// main();

// async function links() {
//     const browser = await puppeteer.launch({
//         headless: false
//     });
//     const page = await browser.newPage();
//     await page.setViewport({ width: 1600, height: 768});

//     await page.goto('https://nowrx.com/refill-and-transfer-prescriptions/');
//     await page.type('input[name=firstname]', 'nitya');
//     await page.type('input[name=lastname]', 'hoyos');

//     await page.type('input[name=email]', 'nitya.hoyos@nowrx.com');

//     await page.type('input[name=phone]', '4243856727');
//     await page.type('input[name=zip]', 'nitya@gmail.com');

//     const checkboxEl = await page.waitForSelector("input[name=switch_to_nowrx_pharmacy]");
//     checkboxEl.click();
//     await page.waitForTimeout(1000); // wait for 5 seconds
//     await page.type('textarea[name=transfer_message]', 'nitya@gmail.com');

//     await page.select('select[name=formfillsource]', 'Google Search')

// cs
//     await page.waitForTimeout(1000); // wait for 5 seconds
//     await page.click('input[type=submit]');
//     await page.waitForTimeout(2000); // wait for 5 seconds

//     await page.screenshot({path: 'refill.png'});

//     await browser.close();
// }

// links();