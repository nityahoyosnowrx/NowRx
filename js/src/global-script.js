// import './investmentpage.js';
// import jquery, { ready } from 'jquery';

// window.jQuery = jquery;
// window.$ = jquery;

// lazy load library
import lozad from 'lozad';

window.addEventListener('load', function() {
  const observer = lozad(); // lazy loads elements with default selector as '.lozad'
  observer.observe();
});



// fix header on scroll
// ----------------------------------------------------------------------------------------------------
setTimeout(() => {
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

}, 3300);
// open mobile menu on click
// ----------------------------------------------------------------------------------------------------
window.addEventListener('load', function() {
  let activeMenu = false;
  $(document).on('click', 'a.menu-icon-toggle', function(e) {
    e.preventDefault();
    if (activeMenu == false) {
      $('nav.top,a.menu-icon-toggle').addClass('active-menu');
      $('a.menu-icon-toggle .txt').text('Close');
      activeMenu = true;
    } else {
      $('nav.top,a.menu-icon-toggle').removeClass('active-menu');
      $('a.menu-icon-toggle .txt').text('Menu');
      activeMenu = false;
    }
  });
});

// scroll to div link functionality
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

// scroll reveal divs
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

// popup module
// ----------------------------------------------------------------------------------------------------
$(document).on('click', '[data-toggle]', function(e) {
  e.preventDefault();
  let toggleId = $(this).data('toggle');
  // console.log(toggleId);
  let stI = '#' + toggleId;
  $(stI).addClass('active');

  $('.reveal-overlay').addClass('active');
  // $("html, body").animate({ scrollTop: "1" });
});
// close popup
$(document).on('click', 'button.close-button, .reveal-overlay', function(e) {
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
window.addEventListener('DOMContentLoaded', event => {
  var cSLiderLoad = document.getElementsByClassName('click');
  if (cSLiderLoad.length > 0) {
    window.onload = function() {
      if ($('.click').length) {
        let opeD;
        $(document).on('click', '.click', function(e) {
          e.stopPropagation();
          e.preventDefault();

          opeD = $(this).attr('data-opentab');

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

        $(document).on('click', '.item .title', function(e) {
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
          // console.log('clicked');
          $('.active-faq.item-block, .active-faq.title, .active-faq.item').removeClass('active-faq');

          $('.item').attr('data-opentab', 'false');
          // $(this).toggleClass('active-faq');
          // $(this).find('.title').toggleClass('active-faq');
          // $(this).find('.item-block').toggleClass('active-faq');
        });
      }
    };
  }
});


// referral form
// ----------------------------------------------------------------------------------------------------

window.addEventListener('DOMContentLoaded', event => {
  var cSLiderLoad = document.getElementsByClassName('referralinput');
  if (cSLiderLoad.length > 0) {
    $('input.referralinput').keyup(function() {
      $('input.referralinput').each(function() {
        if ($(this).val() == '') {
          $(this).removeClass('hasval');
        } else {
          $(this).addClass('hasval');
        }
      });
    });

    let empty = true;

    $(document).on('keyup', 'input.hasval', function() {
      $('input.hasval').each(function() {
        if ($(this).val() != '') {
          let sib = $(this)
            .closest('.medium-6')
            .siblings('.medium-6')
            .find('input.referralinput');

          if ($(sib).val() != '') {
            empty = false;
            // console.log(empty,'falsesb');
          } else {
            empty = true;
          }
        } else {
          empty = true;
        }
      });

      // on key up
      if (empty == true) {
        $('input#Submit').attr('disabled', 'disabled');
        $('.addtional-people').removeClass('addcontact');
      } else {
        $('input#Submit').removeAttr('disabled');
        $('.addtional-people').addClass('addcontact');
      }
    });

    if ($('.item-referrals').length) {
      // it exists

      $('.item-referrals .grid-x.grid-padding-x').hide(0);
      $('.item-referrals .grid-x.grid-padding-x:nth-child(' + 1 + ')').show();

      let refCount = 1;

      $('.addtional-people .text').on('click', function() {
        if (empty == false) {
          refCount++;

          empty = true;
          $('input#Submit').attr('disabled', 'disabled');
          $('.addtional-people').removeClass('addcontact');

          if (refCount >= 5) {
            $('.addtional-people').fadeOut();
          }

          $('.item-referrals .grid-x.grid-padding-x:nth-child(' + refCount + ')').show();
        }
      });

      $('form#referralForm input, .form-content input,.form-content textarea').focus(function() {
        // console.log('Handler for .focus() called.');
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
  }
});

// FAQ Flip
window.addEventListener('DOMContentLoaded', event => {
  var cSLiderLoad = document.getElementsByClassName('list-item-nw');
  if (cSLiderLoad.length > 0) {
    $(document).ready(function() {
      $('section.block-frequent-questions .list-item-nw').click(function(e) {
        if (
          $(this)
            .find('.list-action-nw')
            .data('view') == 'true'
        ) {
          $('li.list-item-nw').removeClass('active-faq');
          $('.list-action-nw').data('view', 'false');

          $('li.list-item-nw').removeClass('active-faq');
          $(this)
            .find('.list-action-nw')
            .data('view', 'false');
        } else {
          $('li.list-item-nw').removeClass('active-faq');
          $('.list-action-nw').data('view', 'false');
          $(this)
            .find('.list-action-nw')
            .closest('li.list-item-nw')
            .addClass('active-faq');
          $(this)
            .find('.list-action-nw')
            .data('view', 'true');
        }
      });
    });
  }
});

// popup modal
$(document).ready(function() {
  // var popupForm = localStorage.getItem('popupForm')
  // if (!popupForm) {
  setTimeout(() => {
    $('.pre-modal-window').addClass('is-active');
  }, 15000);
  //   localStorage.setItem('popupForm', 1)
  // }
  // else {
  //   $('section.popupform').hide();
  // }
  $('.pre-modal-btn-close,.pre-modal-window').click(function(e) {
    $('.pre-modal-window').removeClass('is-active');
  });
  $(document).on('keydown', function(event) {
    if (event.key == 'Escape') {
      $('.pre-modal-window').removeClass('is-active');
    }
  });
});

// How To Send a Prescription to NowRx - Frontpage
window.addEventListener('DOMContentLoaded', event => {
  var cSLiderLoad = document.getElementsByClassName('header-block');
  if (cSLiderLoad.length > 0) {
    $(document).on('click', '.header-block .click', function(e) {
      e.preventDefault();

      $('.header-block .click').removeClass('current');
      $(this).addClass('current');

      let toggleId = $(this).data('tab');

      // console.log(toggleId)

      switch (toggleId) {
        case 0:
          $('.sliding-items').removeClass('secondslide');
          $('.sliding-items').addClass('firstslide');
          break;
        case 1:
          $('.sliding-items').removeClass('firstslide');
          $('.sliding-items').addClass('secondslide');
          break;
        default:
          break;
      }
    });
  }
});

// swiper js

// core version + navigation, pagination modules:
import Swiper, { Navigation, Autoplay, Pagination } from 'swiper';
Swiper.use([Navigation, Autoplay]);


window.addEventListener('DOMContentLoaded', event => {
  var cSLiderLoad = document.getElementsByClassName('cnko');
  if (cSLiderLoad.length > 0) {
    setTimeout(() => {
      let cnko = new Swiper('.cnko', {
        modules: [Navigation, Autoplay],
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 4,
        loop: true,
        centeredSlides: true,
        autoplay: {
          delay: 2000
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: 2
          },
          // when window width is >= 480px
          480: {
            slidesPerView: 3
          },
          // when window width is >= 640px
          640: {
            slidesPerView: 4
          }
        }
      });
    }, 440);
  }
});

window.addEventListener('DOMContentLoaded', event => {
  var rsliderLoad = document.getElementsByClassName('reviews-slide');
  if (rsliderLoad.length > 0) {
    $(document).ready(function() {
      let reviewsSwiper = new Swiper('.reviews-slide', {
        modules: [Navigation, Autoplay],
        // Optional parameters
        loop: true,
        slidesPerView: 2,
        // If we need pagination
        pagination: {
          el: '.swiper-pagination'
        },

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev'
        },

        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 320px
          1: {
            slidesPerView: 1,
            spaceBetween: 20
          },
          // when window width is >= 640px
          1280: {
            slidesPerView: 2,
            spaceBetween: 40
          },
          1600: {
            slidesPerView: 2,
            spaceBetween: 20
          }
        }
      });
    });
  }
});

import locationdropdown from './components/locationdropdown.js';
 new locationdropdown()