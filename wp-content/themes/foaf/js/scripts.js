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

//== Sticky Header

function sitckyHeader(scrollY) {
  let header = document.querySelector('.site-header');

  if (scrollY > 0) {
    header.classList.add('site-header--sticky');
  } else {
    header.classList.remove('site-header--sticky');
  }

}

window.onscroll = function (e) {
  sitckyHeader(window.scrollY);
};


// Smooth Scroll



//== Mobile Nav toggle
function mobileNavToggle() {
  let openNavEl = document.querySelector('.js-open-nav');
  let closeNavEl = document.querySelector('.js-close-nav');
  let header = document.querySelector('.site-header');

  openNavEl.addEventListener('click', function(){
    header.classList.add('site-header--nav-open');
  });

  closeNavEl.addEventListener('click', function(){
    header.classList.remove('site-header--nav-open');
  });

};


//== On Document Load
document.addEventListener("DOMContentLoaded", function() {
  mobileNavToggle();
});