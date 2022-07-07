/**
 * @jest-environment jsdom
 */


import locationdropdown from './locationdropdown.js';

test('use jsdom in this test file', () => {
  document.body.innerHTML =
    '<div id="dropdown-locations"><button class="dropdown-list" id="locationsBtn"> Select a Location<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z"></path></svg></span></button></div>';

    // expect(document.getElementById("locationsBtn")).  ('Johnny Cash - Logged In');

});