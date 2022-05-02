import jquery, { ready } from 'jquery';

window.jQuery = jquery;
window.$ = jquery;

// import Swiper JS
// import Swiper from 'swiper/bundle';

// import Swiper styles
// import 'swiper/swiper.scss';

// import 'slick-carousel';

import lozad from 'lozad';

window.addEventListener('load', function() {
  const observer = lozad(); // lazy loads elements with default selector as '.lozad'
  observer.observe();
});
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
  if ($('.calltoaction').length) {
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
  }
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

jQuery.event.special.touchstart = {
  setup: function(_, ns, handle) {
    this.addEventListener('touchstart', handle, { passive: !ns.includes('noPreventDefault') });
  }
};
jQuery.event.special.touchmove = {
  setup: function(_, ns, handle) {
    this.addEventListener('touchmove', handle, { passive: !ns.includes('noPreventDefault') });
  }
};
jQuery.event.special.wheel = {
  setup: function(_, ns, handle) {
    this.addEventListener('wheel', handle, { passive: true });
  }
};
jQuery.event.special.mousewheel = {
  setup: function(_, ns, handle) {
    this.addEventListener('mousewheel', handle, { passive: true });
  }
};

$(document).ready(function() {

setTimeout(() => {
  let cnko = new Swiper('.cnko', {
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

setTimeout(function() {
  let owlswiper = new Swiper('.owlswiper', {
    // Optional parameters
    slidesPerView: 3,
    loop: true,
    spaceBetween: 30,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },

    centeredSlides: true,
    // autoplay: {
    //     // delay: 2000,
    // },
    breakpoints: {
      // when window width is >= 320px
      1: {
        slidesPerView: 1
      },
      // when window width is >= 480px
      700: {
        slidesPerView: 2
      },
      // when window width is >= 640px
      1280: {
        slidesPerView: 3
      }
    }
  });
}, 3000);
});

$(document).ready(function () {
    var screenTop = $(document).scrollTop();
    $(document ).scroll(function() {
        var screenTop = $(document).scrollTop();
    });

    // $(document).on('click', "input.hs-button.primary.large", function(e){
    //     $('html,body').animate({
    //         scrollTop: screenTop
    //         },800);
    //     // var link = "https://www.seedinvest.com/nowrx/series.c/?utm_source=nowrxlandingpage1&utm_medium=referral";
    //     //     window.open(link,'newStuff');
    // });

    $('.closebutton').click(function(){
        $('section.popupform').fadeOut()
    })

    setTimeout(()=>{
        $('section.popupform').fadeIn()
    },3500)

    let activeMenu = false;


    $("header.main ul.nav li a").on('click', function(e) {
        e.preventDefault();
        $('nav.top,a.menu-icon-toggle').removeClass('active-menu');
        $('a.menu-icon-toggle .txt').text('Menu');
        activeMenu = false;
        return activeMenu;

    });



    $("a.menu-icon-toggle,.psedo").unbind("click").bind("click", function(){
        if (activeMenu == false) {

            $('nav.top,a.menu-icon-toggle,header.main.investorhead').addClass('active-menu');
            $('a.menu-icon-toggle .txt').text('Close');
            activeMenu = true;
        } else {
            $('nav.top,a.menu-icon-toggle,header.main.investorhead').removeClass('active-menu');
            $('a.menu-icon-toggle .txt').text('Menu');
            activeMenu = false;
        }
    });

    // $(".psedo").bind("click", function(){
    //     if (activeMenu == false) {
    //         $('nav.top,a.menu-icon-toggle,header.main.investorhead').addClass('active-menu');
    //         $('a.menu-icon-toggle .txt').text('Close');
    //         activeMenu = true;
    //     } else {
    //         $('nav.top,a.menu-icon-toggle,header.main.investorhead').removeClass('active-menu');
    //         $('a.menu-icon-toggle .txt').text('Menu');
    //         activeMenu = false;
    //     }
    // });

    $('a[href*="#"]').on('click', function(e) {
        $('html,body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
            },800);


              $('nav.top,a.menu-icon-toggle,header.main.investorhead').removeClass('active-menu');

        e.preventDefault();
        });

});

// $(document).ready(function() {
//   $('.popup-youtube').magnificPopup({
//     type: 'iframe',
//     mainClass: 'mfp-fade',
//     removalDelay: 160,
//     preloader: false,

//     fixedContentPos: false
//   });
// });

$(document).ready(function() {
  $('.deskplauft').on('click', function() {
    $('.deskplauft,video#vidov').fadeOut();
    $('#lvc')
      .get(0)
      .play();

    $('#lvc').attr('controls', true);
  });

  $('#lvc').hover(function toggleControls() {
    // if (this.hasAttribute("controls")) {
    //     this.removeAttribute("controls")
    // } else {
    //     this.setAttribute("controls", "controls")
    // }
  });

  $('.mobileplauft').on('click', function() {
    $('.mobileplauft,#mobvidov').fadeOut();
    $('#mobilelvc')
      .get(0)
      .play();
    $('#mobilelvc').attr('controls', true);
  });

  $('#mobilelvc').hover(function toggleControls() {
    // if (this.hasAttribute("controls")) {
    //     this.removeAttribute("controls")
    // } else {
    //     this.setAttribute("controls", "controls")
    // }
  });
});


$(document).ready(function() {
$('.closebutton').click(function(){
  $('section.popupform').fadeOut()
})

// var popupForm = localStorage.getItem('popupForm')

// if (!popupForm) {
// setTimeout(()=>{
//   $('section.popupform').fadeIn()
// },7000)
// localStorage.setItem('popupForm', 1)

// }
// else {
// $('section.popupform').hide();
// }

})

// competitive
$(document).ready(function () {
  if ($(window).width() < 1280) {
  $(".click-pop").click(function(e) {
    $(".row-item").removeClass('active-click')
    if($(this).data('view') == 'true'){

      $(".row-item").removeClass('active-click')
      $(this).data('view','false')

    } else {

      $(this).closest('.row-item').addClass('active-click')
      $(this).data('view','true')

    }

  });
}
});