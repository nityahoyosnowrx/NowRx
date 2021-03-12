import jquery, { ready } from 'jquery';

window.jQuery = jquery;
window.$ = jquery;

import 'slick-carousel';

import lozad from 'lozad';

const observer = lozad(); // lazy loads elements with default selector as '.lozad'
observer.observe();

jQuery(document).ready(function() {
  if (jQuery('.orbit-container').length) {
    jQuery('.orbit-container').slick({
      autoplay: true,
      autoplaySpeed: 3000,
      fade: true
    });
  }
});

// mobilebar
// ----------------------------------------------------------------------------------------------------
$(document).ready(function() {
  let fixmeTop = $('.calltoaction').offset().top; // get initial position of the element

  $(window).scroll(function() {
    // assign scroll event listener

    let currentScroll = $(window).scrollTop(); // get current position

    if (currentScroll >= 1) {
      // apply position: fixed if you
      $('.calltoaction').addClass('fixed');
    } else {
      // apply position: static
      $('.calltoaction').removeClass('fixed');
    }
  });
});

// scroll fix
// ----------------------------------------------------------------------------------------------------
$(document).ready(function() {
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    //>=, not <=
    if (scroll >= 1) {
      $('.main').addClass('fixedmain');
    } else {
      $('.main').removeClass('fixedmain');
    }
  });
  if ($(window).scrollTop() >= 1) {
    $('.main').addClass('fixedmain');
  }
});
// menuclick
// ----------------------------------------------------------------------------------------------------

$(document).ready(function() {
  let activeMenu  = false;
  $('a.menu-icon-toggle').on('click', function(e) {
    e.preventDefault();
    if(activeMenu == false){
      $('nav.top').toggleClass('active-menu');
      $("a.menu-icon-toggle .txt").text("Close");
      activeMenu = true;

    } else {
      $('nav.top').toggleClass('active-menu');
      $("a.menu-icon-toggle .txt").text("Menu");
      activeMenu = false;
    }
    
  });
});

// scrolltop
// ----------------------------------------------------------------------------------------------------
$('a[href*="#"]').on('click', function(e) {
  $('html,body').animate(
    {
      scrollTop: $($(this).attr('href')).offset().top - 50
    },
    800
  );
  e.preventDefault();
});

// reveal
// ----------------------------------------------------------------------------------------------------
$(document).ready(function() {
  // reveal if object is already in view port
  if ($('.rvl,.reganim,.imgslide').length) {
    $('.rvl,.reganim,.imgslide').each(function(i) {
      var top_of_object = $(this).offset().top;
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      /* If the object is completely visible in the window, fade it */
      if (bottom_of_window > top_of_object) {
        $(this).addClass('animatein');
      } else {
        // reveal object reaches the in view port
        $(window).scroll(function() {
          $('.rvl,.reganim,.imgslide').each(function(i) {
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
  }
});

// modals
// ----------------------------------------------------------------------------------------------------
$('[data-toggle]').on('click', function(e) {
  e.preventDefault();
  let toggleId = $(this).data('toggle');
  console.log(toggleId);
  let stI = '#' + toggleId;
  $(stI).addClass('active');
  $('.reveal-overlay').addClass('active');
});

$('button.close-button, .reveal-overlay').on('click', function(e) {
  e.preventDefault();
  $('.reveal').removeClass('active');
  $('.reveal-overlay').removeClass('active');
});
// modals

// setTimeout(function() {
//   $('#offCanvas').css('display', '');
//   $('body').css('opacity', '');
// }, 100);

// tabs
// ----------------------------------------------------------------------------------------------------
$(document).ready(function() {
  if ($('.click').length) {
    let opeD;
    $('.click').on('click', function(e) {
      e.stopPropagation();
      e.preventDefault();

      opeD = $(this).attr('data-opentab');
      console.log(opeD);

      $('.click')
        .parent('.faq-block')
        .siblings()
        .find('.click')
        .removeClass('active-faq');
      $('.click')
        .parent('.faq-block')
        .siblings()
        .find('.block-content')
        .removeClass('active-faq');

      if (opeD == '0') {
        $('.click').attr('data-opentab', '0');

        $(this).addClass('active-faq');
        $(this)
          .siblings('.block-content')
          .addClass('active-faq');

        $(this).attr('data-opentab', '1');
      } else {
        $(this).removeClass('active-faq');
        $(this)
          .siblings('.block-content')
          .removeClass('active-faq');

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

      openSubModal = $(this)
        .closest('.item')
        .attr('data-opentab');

      //  console.log(openSubModal);

      if (openSubModal == 'false') {
        $('.item').attr('data-opentab', 'false');

        $(this)
          .closest('.item')
          .addClass('active-faq');
        $(this).addClass('active-faq');
        $(this)
          .closest('.item')
          .find('.item-block')
          .addClass('active-faq');

        $(this)
          .closest('.item')
          .attr('data-opentab', 'true');
      }
      if (openSubModal == 'true') {
        $(this).removeClass('active-faq');
        $(this)
          .closest('.item')
          .find('.title')
          .removeClass('active-faq');
        $(this)
          .closest('.item')
          .find('.item-block')
          .removeClass('active-faq');

        $(this)
          .closest('.item')
          .attr('data-opentab', 'false');
      }
    });

    $('span.close-itcon').on('click', function(e) {
      e.stopPropagation();
      console.log('clicked');
      $('.active-faq.item-block, .active-faq.title, .active-faq.item').removeClass('active-faq');

      $('.item').attr('data-opentab', 'false');
      // $(this).toggleClass('active-faq');
      // $(this).find('.title').toggleClass('active-faq');
      // $(this).find('.item-block').toggleClass('active-faq');
    });
  }
});

// referral form
// ----------------------------------------------------------------------------------------------------
$(document).ready(function() {
  if ($('.item-referrals').length) {
    // it exists

    $('.item-referrals .grid-x.grid-padding-x').hide(0);
    $('.item-referrals .grid-x.grid-padding-x:nth-child(' + 1 + ')').slideDown();

    let refCount = 1;

    $('.addtional-people .text').on('click', function() {
      refCount++;
      console.log(refCount);

      if (refCount >= 5) {
        $('.addtional-people').fadeOut();
      }

      $('.item-referrals .grid-x.grid-padding-x:nth-child(' + refCount + ')').slideDown();
    });

    $('form#referralForm input, .form-content input,.form-content textarea').focus(function() {
      console.log('Handler for .focus() called.');
      $(this)
        .siblings('span')
        .addClass('hasstext');
    });

    $('form#referralForm input, .form-content input,.form-content textarea').on('blur', function() {
      if ($(this).val()) {
        $(this)
          .siblings('span')
          .addClass('hasstext');
      } else {
        $(this)
          .siblings('span')
          .removeClass('hasstext');
      }
    });
  }

  // ready
});

import anime from 'animejs/lib/anime.es.js';

anime
  .timeline({ loop: 0, direction: 'normal' })
  .add({
    targets: '.ml5 .line',
    opacity: [0.5, 1],
    scaleX: [0, 1],
    easing: 'easeInOutExpo',
    duration: 700
  })
  .add({
    targets: '.ml5 .line',
    duration: 600,
    easing: 'easeOutExpo',
    translateY: (el, i) => -0.625 + 0.625 * 2 * i + 'em'
  })
  .add({
    targets: '.ml5 .ampersand',
    opacity: [0, 1],
    scaleY: [0.5, 1],
    easing: 'easeOutExpo',
    duration: 600,
    offset: '-=600'
  })
  .add({
    targets: '.ml5 .letters-left',
    opacity: [0, 1],
    translateX: ['0.5em', 0],
    easing: 'easeOutExpo',
    duration: 600,
    offset: '-=300'
  })
  .add({
    targets: '.ml5 .letters-right',
    opacity: [0, 1],
    translateX: ['-0.5em', 0],
    easing: 'easeOutExpo',
    duration: 600,
    offset: '-=600'
  });

// Wrap every letter in a span
// var textWrapper = document.querySelector('.ml3');
// textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

// anime.timeline({loop: false})
//   .add({
//     targets: '.ml3 .letter',
//     opacity: [0,1],
//     easing: "easeInOutQuad",
//     duration: 111,
//     delay: (el, i) => 150 * (i+1)
//   });

$(document).ready(function() {
  $('.has-animation').each(function(index) {
    $(this)
      .delay($(this).data('delay'))
      .queue(function() {
        $(this).addClass('animate-in');
      });
  });
});

$(document).ready(function() {
  setInterval(() => {
    setTimeout(() => {
      $('a.button.secondary.rounded.shadow').addClass('active');
    }, 0);

    setTimeout(() => {
      $('a.button.secondary.rounded.shadow').removeClass('active');
    }, 600);
  }, 4000);
});
