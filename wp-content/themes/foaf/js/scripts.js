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
function smoothScroll(target) {
  let header = document.querySelector('.site-header');
  let headerHeight = header.offsetHeight;
  let elementPosition = target.getBoundingClientRect().top;
  let offsetPosition = elementPosition + window.pageYOffset - headerHeight + 1;

  window.scrollTo({
    top: offsetPosition,
    behavior: "smooth"
  });
}


//== Scroll to booking Section

function scrollToBook() {

  let header = document.querySelector('.site-header');
  let currentPage = window.location.pathname;
  let bookButtons = document.querySelectorAll('.js-book');
  let target;

  if (currentPage.indexOf("reservations") > -1) {
    target = document.body;
  } else {
    target = document.querySelector('.reservation-panel');
  }

  for (let i = 0; i < bookButtons.length; i++) {
    const btn = bookButtons[i];
    btn.addEventListener('click', function(e){
      e.preventDefault();

      // Scroll to section
      smoothScroll(target);

      // Close mobile nav
      header.classList.remove('site-header--nav-open');

    });
    
  };

};


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


//== Waypoints 

function waypoints() {
  let elements = document.querySelectorAll('.animate');
  for (let i = 0; i < elements.length; i++) {
    let waypoint = new Waypoint({
      element: elements[i],
      handler: function() {
        this.element.classList.add('animate--in-view');
      },
      offset: "75%"
    })  
  };
};


//== Smooth Scroll to Anchor
function scrollToAnchor() {
  let triggers = document.querySelectorAll('.js-scroll');
  for (let i = 0; i < triggers.length; i++) {
    const trigger = triggers[i];

    trigger.addEventListener('click', function(e) {
      e.preventDefault();
      let target = document.querySelector(trigger.getAttribute("href"));
      // .substring(1);
      console.log(target);

      // Scroll to section
      smoothScroll(target);

    })
    
  }
}

//== On Document Load

document.addEventListener("DOMContentLoaded", function() {
  scrollToBook();
  mobileNavToggle();
  waypoints();
  scrollToAnchor();
});