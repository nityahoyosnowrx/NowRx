import $ from 'jquery';
import './app.js';

import lozad from 'lozad'

const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();

$(document).ready(function() {
  let fixmeTop = $('.calltoaction').offset().top; // get initial position of the element

  $(window).scroll(function() {
    // assign scroll event listener

    let currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll >= fixmeTop) {
      // apply position: fixed if you
      $('.calltoaction').addClass('fixed');
    } else {
      // apply position: static
      $('.calltoaction').removeClass('fixed');
    }
  });
});


$(document).ready(function() {

  // reveal if object is already in view port
  $('.rvl').each(function(i) {
    var top_of_object = $(this).offset().top;
    var bottom_of_window = $(window).scrollTop() + $(window).height();

    /* If the object is completely visible in the window, fade it */
    if (bottom_of_window > top_of_object) {

      $(this).addClass('animatein');
      
    } else {
      // reveal object reaches the in view port
      $(window).scroll(function() {

        $('.rvl').each(function(i) {
          var top_of_object = $(this).offset().top;
          var bottom_of_window = $(window).scrollTop() + $(window).height();

          if (bottom_of_window > top_of_object) {
            $(this).addClass('animatein');
          } else {
            $(this).removeClass('animatein');
          }
        });

      });
    }
  });

});


