
//== Owl Carousel

$(".hero .owl-carousel").owlCarousel({
  animateOut: 'fadeOut',
  items: 1,
  autoplay: true,
  mouseDrag: false,
  touchDrag: false,
  autoplayTimeout: 6000,
  loop: true
});



//== Reviews Carousel
// Passive event listeners
jQuery.event.special.touchstart = {
  setup: function( _, ns, handle ) {
      this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
  }
};
jQuery.event.special.touchmove = {
  setup: function( _, ns, handle ) {
      this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
  }
};


function responsiveCarousel() {
  let breakPoint = 1366;
  let checkWidth = window.innerWidth;
  let owlCarousel = $(".reviews-panel .container");

  function startCarousel() {
    owlCarousel.addClass('owl-carousel');
    owlCarousel.owlCarousel({
      responsive : {
        0 : {
            items: 1,
            margin: 20
        },
        768 : {
          items: 2,
          margin: 30
        },
        992 : {
          items: 2,
          margin: 40
        }
      }
    });
  }

  function destroyCarousel() {
    owlCarousel.owlCarousel('destroy');
    // owlCarousel.data('owl.carousel').destroy();
    owlCarousel.removeClass('owl-carousel');
  }

  if (checkWidth >= breakPoint) {
    destroyCarousel();    
  } else {
    startCarousel();
  }
}

responsiveCarousel();
$(window).resize(responsiveCarousel);