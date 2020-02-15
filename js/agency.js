(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Hide navbar when modals trigger
  $('.portfolio-modal').on('show.bs.modal', function(e) {
    $('.navbar').addClass('d-none');
  })
  $('.portfolio-modal').on('hidden.bs.modal', function(e) {
    $('.navbar').removeClass('d-none');
  })

})(jQuery); // End of use strict

const leftButton = document.querySelector('.arrow.left');
const rightButton = document.querySelector('.arrow.right');

leftButton.addEventListener('click', () => {
  turnSlider('left');
});

rightButton.addEventListener('click', () => {
  turnSlider('right');
});

function turnSlider(direction) {
  const slides = document.querySelectorAll(`.slide`);
  slides.forEach(slide => {
    let currentSlide = +(slide.classList + '').split('-')[1];
    let slideToBe;
    switch(direction) {
      case 'left': {
        slideToBe = currentSlide - 1;
        if(slideToBe < 1) {
          slideToBe = slides.length;
          slide.style.left = '-500px';
        }
        break;
      }
      case 'right': {
        slideToBe = currentSlide + 1;
        if(slideToBe > slides.length) {
          slideToBe = 1;
          slide.style.left = '2000px';
        }
        break;
      }
    }
    slide.classList.remove(`slide-${currentSlide}`);
    slide.classList.add(`slide-${slideToBe}`);
  });
}

// nav hide js
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a:not(".dropdown-toggle")') ) {
        $(this).collapse('hide');
    }
});



// page loader start


//page loader end
