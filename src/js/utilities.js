// Check if element has class.
export function hasClass(el, cls) {
    return (' ' + el.className + ' ').indexOf(' ' + cls + ' ') > -1;
};

// ************************************************************

// Smooth Scroll by Andrew Johnson

// Calculate current position
export function currentYPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop)
        return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}

// When calling the smoothScroll function add the element id of the element 
// you wish to scroll to as a parameter (need to be a string).

// Calculate position of the element to scroll to
export function elmYPosition(eID) {
    var elm = document.getElementById(eID);
    var y = elm.offsetTop;
    var node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
        node = node.offsetParent;
        y += node.offsetTop;
    } return y;
}

// Scroll function
export function smoothScroll(eID) {
    var startY = currentYPosition();
    var stopY = elmYPosition(eID);
    var distance = stopY > startY ? stopY - startY : startY - stopY;
    if (distance < 100) {
        scrollTo(0, stopY); return;
    }
    var speed = Math.round(distance / 100);
    if (speed >= 20) speed = 20;
    var step = Math.round(distance / 25);
    var leapY = stopY > startY ? startY + step : startY - step;
    var timer = 0;
    if (stopY > startY) {
        for ( var i=startY; i<stopY; i+=step ) {
            setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
            leapY += step; if (leapY > stopY) leapY = stopY; timer++;
        } return;
    }
    for ( var i=startY; i>stopY; i-=step ) {
        setTimeout("window.scrollTo(0, "+leapY+")", timer * speed);
        leapY -= step; if (leapY < stopY) leapY = stopY; timer++;
    }
}

// ************************************************************

// Swiper by Vladimir Kharlampidi from iDangero.us

// Standard Swiper

let mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Swipe speed
    speed: 800,

    hideOnClick: true,
    disabledClass: 'swiper-button-disabled',
    hiddenClass: 'swiper-button-hidden',

    // Autoplay interval time
    autoplay: {
        delay: 7000,
    },
})

// Employee Swiper

let employeeSwiper = new Swiper ('.swiper-employee-container', {
    // Optional parameters
    direction: 'horizontal',
    // loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Swipe speed
    speed: 800,

    hideOnClick: true,
    disabledClass: 'swiper-button-disabled',
    hiddenClass: 'swiper-button-hidden',

    // Autoplay interval time
    // autoplay: {
    //     delay: 7000,
    // },

    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',

    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : false,
    },

  })

export default {employeeSwiper, mySwiper};
