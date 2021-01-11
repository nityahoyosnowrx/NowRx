// import { Foundation } from 'foundation-sites';
import jquery, { ready } from 'jquery';

window.jQuery = jquery;
window.$ = jquery;

// Foundation.addToJquery($);

// jQuery(document).ready($ => $(document).foundation());

// import './app.js';

import lozad from 'lozad';

// import Swiper bundle with all modules installed
// import swiper from '../../node_modules/swiper/swiper-bundle.js';
// import Swiper styles
// import '../../node_modules/swiper/swiper-bundle.css';
// init Swiper:

// $(document).foundation();

// var mySwiper = new swiper('.swiper-container', {
//   // Optional parameters
//   loop: true,

//   // If we need pagination
//   pagination: {
//     el: '.swiper-pagination'
//   },

//   // Navigation arrows
//   navigation: {
//     nextEl: '.swiper-button-next',
//     prevEl: '.swiper-button-prev'
//   }
// });

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

  // menuclick
  $('a.menu-icon-toggle').on('click', function(e) {
    e.preventDefault();
    $('nav.top').toggleClass('active-menu');
  });
});

$('a[href*="#"]').on('click', function(e) {
  $('html,body').animate(
    {
      scrollTop: $($(this).attr('href')).offset().top - 50
    },
    800
  );
  e.preventDefault();
});


// modals
$('[data-toggle]').on('click', function(e) {
  e.preventDefault();
  let toggleId = $(this).data('toggle');
  console.log(toggleId);
  let stI = '#'+toggleId;
  $(stI).addClass('active');
  $('.reveal-overlay').addClass('active');
});

$('button.close-button, .reveal-overlay').on('click', function(e) {
  e.preventDefault();
  $('.reveal').removeClass('active');
  $('.reveal-overlay').removeClass('active');
});
// modals

// $('a.menu-icon-toggle').on('click', function(e) {
//   e.preventDefault();

// });

setTimeout(function() {
  $('#offCanvas').css('display', '');
  $('body').css('opacity', '');
}, 100);

$(document).ready(function() {
  let opeD;
  $('.click').on('click', function(e) {
    e.stopPropagation();
    e.preventDefault();

    opeD =  $(this).attr('data-opentab');
    console.log(opeD);

    $('.click').parent('.faq-block').siblings().find('.click').removeClass('active-faq');
    $('.click').parent('.faq-block').siblings().find('.block-content').removeClass('active-faq');

    if (opeD == '0') {
      $('.click').attr('data-opentab', '0');

      $(this).addClass('active-faq');
      $(this).siblings('.block-content').addClass('active-faq');

      $(this).attr('data-opentab', '1');

    } else {
      $(this).removeClass('active-faq');
      $(this).siblings('.block-content').removeClass('active-faq');
        
      $(this).attr('data-opentab', '0');

    }
  });

  let openSubModal;

  $('.item .title').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();

    $('.item').removeClass('active-faq');
    $('.title').removeClass('active-faq');
    $('.item-block').removeClass('active-faq');

    
     openSubModal =  $(this).closest('.item').attr('data-opentab');
    
    //  console.log(openSubModal);

    if (openSubModal == 'false') {
      $('.item').attr('data-opentab','false');

      $(this).closest('.item').addClass('active-faq');
      $(this).addClass('active-faq');
      $(this).closest('.item').find('.item-block').addClass('active-faq');

      $(this).closest('.item').attr('data-opentab','true');

    }  
    if (openSubModal == 'true') {
      
      $(this).removeClass('active-faq');
      $(this).closest('.item').find('.title').removeClass('active-faq');
      $(this).closest('.item').find('.item-block').removeClass('active-faq');

      $(this).closest('.item').attr('data-opentab','false');

    }
  });

  $('span.close-itcon').on('click', function(e) {
    e.stopPropagation();
    console.log('clicked');
    $('.active-faq.item-block, .active-faq.title, .active-faq.item').removeClass('active-faq');

    $('.item').attr('data-opentab','false');
    // $(this).toggleClass('active-faq');
    // $(this).find('.title').toggleClass('active-faq');
    // $(this).find('.item-block').toggleClass('active-faq');
  });

  // $(document).mouseup(function(e) {
  //   var container = $('.item-block');

  //   // if ($('.item').attr('data-opentab') == 'true') {
  //     // if the target of the click isn't the container nor a descendant of the container
  //     if (!container.is(e.target) && container.has(e.target).length === 0) {

  //       $('.item').removeClass('active-faq');
  //       $('.item').find('.title').removeClass('active-faq');
  //       $('.item').find('.item-block').removeClass('active-faq');
         
  //       $('.item').attr('data-opentab','false');

  //     }
  //   // }
  // });

});
