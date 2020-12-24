/*----------Read more---------*/
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  }
  else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}

// Smooth scroll for the navigation menu and links with .scrollto classes
var scrolltoOffset = $('#header').outerHeight() - 2;
$(document).on('click', '.nav-menu a, .scrollto', function(e) {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    if (target.length) {
      e.preventDefault();

      var scrollto = target.offset().top - scrolltoOffset;
      if ($(this).attr("href") == '#header') {
        scrollto = 0;
      }

      $('html, body').animate({
        scrollTop: scrollto
      }, 1500, 'easeInOutExpo');

      if ($(this).parents('.nav-menu').length) {
        $('.nav-menu .active').removeClass('active');
        $(this).closest('li').addClass('active');
      }
      return false;
    }
  }
});

// Activate smooth scroll on page load with hash links
$(document).ready(function() {
  if (window.location.hash) {
    var initial_nav = window.location.hash;
    if ($(initial_nav).length) {
      var scrollto = $(initial_nav).offset().top - scrolltoOffset;
      $('html, body').animate({
        scrollTop: scrollto
      }, 1500, 'easeInOutExpo');
    }
  }
});


// Toggle .header-scrolled class to #header when page is scrolled
$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  } else {
    $('#header').removeClass('header-scrolled');
  } 
});

if ($(window).scrollTop() > 100) {
  $('#header').addClass('header-scrolled');
}

/*---------------Slick slider---------------------*/
$(function () {
  $('.slider').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500,
    prevArrow: '<span class="prev-icon"><i class="fas fa-chevron-circle-left prev-arrow"></i></span>',
    nextArrow: '<span class="next-icon"><i class="fas fa-chevron-circle-right"></i></span>',
  });
});

/* ---------------------Service divider animation----------------------- */

/*-----------------------------Divider1------------------------------*/
var element1 = document.getElementById('servicesDivider1');

let options1 = {
  root: null,
  rootMargin: '0px',
  threshold:1.0
};

let callback1 = (entries1,observer1)=> {
  entries1.forEach(entry => {
    if(entry.target.id === 'servicesDivider1'){
      servicesDivider1.style = (entry.isIntersecting) ? 'background-image: url("./assets/images/divider.png");background-position: center center;background-repeat: no-repeat;' : 'background-image: url("./assets/images/service-blink.png");background-position: center center;background-repeat: no-repeat;' ;
    }
  });
}

let observer1 = new IntersectionObserver(callback1,options1);
observer1.observe(servicesDivider1);


/*-----------------------------Divider2------------------------------*/
var element2 = document.getElementById('servicesDivider2');

let options2 = {
  root: null,
  rootMargin: '0px',
  threshold:1.0
};

let callback2 = (entries2,observer2)=> {
  entries2.forEach(entry => {
    if(entry.target.id === 'servicesDivider2'){
      servicesDivider2.style = (entry.isIntersecting) ? 'background-image: url("./assets/images/divider-1.png");background-position: center center;background-repeat: no-repeat;' : 'background-image: url("./assets/images/service-blink.png");background-position: center center;background-repeat: no-repeat;' ;
    }
  });
}

let observer2 = new IntersectionObserver(callback2,options2);
observer2.observe(servicesDivider2);


/*-----------------------------Divider3------------------------------*/
var element3 = document.getElementById('servicesDivider3');

let options3 = {
  root: null,
  rootMargin: '0px',
  threshold:1.0
};

let callback3 = (entries3,observer3)=> {
  entries3.forEach(entry => {
    if(entry.target.id === 'servicesDivider3'){
      servicesDivider3.style = (entry.isIntersecting) ? 'background-image: url("./assets/images/divider.png");background-position: center center;background-repeat: no-repeat;' : 'background-image: url("./assets/images/service-blink.png");background-position: center center;background-repeat: no-repeat;' ;
    }
  });
}

let observer3 = new IntersectionObserver(callback3,options3);
observer3.observe(servicesDivider3);




/*-----------------------------Divider4------------------------------*/
var element4 = document.getElementById('servicesDivider4');

let options4 = {
  root: null,
  rootMargin: '0px',
  threshold:1.0
};

let callback4 = (entries4,observer4)=> {
  entries4.forEach(entry => {
    if(entry.target.id === 'servicesDivider4'){
      servicesDivider4.style = (entry.isIntersecting) ? 'background-image: url("./assets/images/divider-1.png");background-position: center center;background-repeat: no-repeat;' : 'background-image: url("./assets/images/service-blink.png");background-position: center center;background-repeat: no-repeat;' ;
    }
  });
}

let observer4 = new IntersectionObserver(callback4,options4);
observer4.observe(servicesDivider4);


/*-----------------------------Divider5------------------------------*/
var element5 = document.getElementById('servicesDivider5');

let options5 = {
  root: null,
  rootMargin: '0px',
  threshold:1.0
};

let callback5 = (entries5,observer5)=> {
  entries5.forEach(entry => {
    if(entry.target.id === 'servicesDivider5'){
      servicesDivider5.style = (entry.isIntersecting) ? 'background-image: url("./assets/images/divider.png");background-position: center center;background-repeat: no-repeat;' : 'background-image: url("./assets/images/service-blink.png");background-position: center center;background-repeat: no-repeat;' ;
    }
  });
}

let observer5 = new IntersectionObserver(callback5,options5);
observer5.observe(servicesDivider5);



/*-----------------------------Divider6------------------------------*/
var element6 = document.getElementById('servicesDivider6');

let options6 = {
  root: null,
  rootMargin: '0px',
  threshold:1.0
};

let callback6 = (entries6,observer6)=> {
  entries6.forEach(entry => {
    if(entry.target.id === 'servicesDivider6'){
      servicesDivider6.style = (entry.isIntersecting) ? 'background-image: url("./assets/images/divider-1.png");background-position: center center;background-repeat: no-repeat;height:450px' : 'background-image: url("./assets/images/service-blink.png");background-position: center center;background-repeat: no-repeat;height:450px';
    }
  });
}

let observer6 = new IntersectionObserver(callback6,options6);
observer6.observe(servicesDivider6);

/*-----------------------------Divider7------------------------------*/
var element7 = document.getElementById('servicesDivider7');

let options7 = {
  root: null,
  rootMargin: '0px',
  threshold:1.0
};

let callback7 = (entries7,observer7)=> {
  entries7.forEach(entry => {
    if(entry.target.id === 'servicesDivider7'){
      servicesDivider7.style = (entry.isIntersecting) ? 'background-image: url("./assets/images/divider.png");background-position: center center;background-repeat: no-repeat;' : 'background-image: url("./assets/images/service-blink.png");background-position: center center;background-repeat: no-repeat;' ;
    }
  });
}

let observer7 = new IntersectionObserver(callback7,options7);
observer7.observe(servicesDivider7);


/*-----------------------------Divider8------------------------------*/
var element8 = document.getElementById('servicesDivider8');

let options8 = {
  root: null,
  rootMargin: '0px',
  threshold:1.0
};

let callback8 = (entries8,observer8)=> {
  entries8.forEach(entry => {
    if(entry.target.id === 'servicesDivider8'){
      servicesDivider8.style = (entry.isIntersecting) ? 'background-image: url("./assets/images/divider-1.png");background-position: center center;background-repeat: no-repeat;' : 'background-image: url("./assets/images/service-blink.png");background-position: center center;background-repeat: no-repeat;' ;
    }
  });
}

let observer8 = new IntersectionObserver(callback8,options8);
observer8.observe(servicesDivider8);