/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.hasClass = hasClass;
exports.currentYPosition = currentYPosition;
exports.elmYPosition = elmYPosition;
exports.smoothScroll = smoothScroll;
// Check if element has class
function hasClass(el, cls) {
    return (' ' + el.className + ' ').indexOf(' ' + cls + ' ') > -1;
};

// Smooth Scroll by Andrew Johnson

// Calculate current position
function currentYPosition() {
    // Firefox, Chrome, Opera, Safari
    if (self.pageYOffset) return self.pageYOffset;
    // Internet Explorer 6 - standards mode
    if (document.documentElement && document.documentElement.scrollTop) return document.documentElement.scrollTop;
    // Internet Explorer 6, 7 and 8
    if (document.body.scrollTop) return document.body.scrollTop;
    return 0;
}

// When calling the smoothScroll function add the element id of the element 
// you wish to scroll to as a parameter (need to be a string).

// Calculate position of the element to scroll to
function elmYPosition(eID) {
    var elm = document.getElementById(eID);
    var y = elm.offsetTop;
    var node = elm;
    while (node.offsetParent && node.offsetParent != document.body) {
        node = node.offsetParent;
        y += node.offsetTop;
    }return y;
}

// Scroll function
function smoothScroll(eID) {
    var startY = currentYPosition();
    var stopY = elmYPosition(eID);
    var distance = stopY > startY ? stopY - startY : startY - stopY;
    if (distance < 100) {
        scrollTo(0, stopY);return;
    }
    var speed = Math.round(distance / 100);
    if (speed >= 20) speed = 20;
    var step = Math.round(distance / 25);
    var leapY = stopY > startY ? startY + step : startY - step;
    var timer = 0;
    if (stopY > startY) {
        for (var i = startY; i < stopY; i += step) {
            setTimeout("window.scrollTo(0, " + leapY + ")", timer * speed);
            leapY += step;if (leapY > stopY) leapY = stopY;timer++;
        }return;
    }
    for (var i = startY; i > stopY; i -= step) {
        setTimeout("window.scrollTo(0, " + leapY + ")", timer * speed);
        leapY -= step;if (leapY < stopY) leapY = stopY;timer++;
    }
}

var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination'
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },

    // Swipe speed
    speed: 800,

    hideOnClick: true,
    disabledClass: 'swiper-button-disabled',
    hiddenClass: 'swiper-button-hidden',

    // Autoplay interval time
    autoplay: {
        delay: 7000
    }
});

exports.default = mySwiper;

/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(2);

var _mainNavigation = __webpack_require__(3);

var _footer = __webpack_require__(4);

var _contact = __webpack_require__(5);

var _utilities = __webpack_require__(0);

var mainNavigationOne = new _mainNavigation.MainNavigation();
var footerOne = new _footer.Footer();
var contactOne = new _contact.Contact();

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.MainNavigation = undefined;

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _utilities = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var MainNavigation = exports.MainNavigation = function () {
    function MainNavigation() {
        var _this = this;

        _classCallCheck(this, MainNavigation);

        this.menuState = false;
        this.menu = document.getElementById('mobile-menu-toggle');
        this.menuToggle = document.getElementById('site-navigation');
        this.menuMobile = document.getElementById('site-navigation-mobile');
        this.menuSymbol = document.getElementById('mobile-menu-toggle');
        this.menu.addEventListener('click', function (e) {
            return _this.mobileMenuToggle(e);
        });
        this.menuList = [].slice.call(document.querySelectorAll('.menu-item'));
        this.manufacturer;
        this.currentMenuItem();
    }
    // Toggle menu in mobile/tablet view


    _createClass(MainNavigation, [{
        key: 'mobileMenuToggle',
        value: function mobileMenuToggle(e) {
            this.menuSymbol.innerHTML === 'Meny' ? this.menuSymbol.innerHTML = '&#x02A2F' : this.menuSymbol.innerHTML = 'Meny';
            this.menuState === false ? this.menuToggle.classList.add('main-navigation-toggle') : this.menuToggle.classList.remove('main-navigation-toggle');
            this.menuState === false ? this.menuState = true : this.menuState = false;
            return true;
        }
        // Check if element has class "current-menu-item"

    }, {
        key: 'currentMenuItem',
        value: function currentMenuItem() {
            var _this2 = this;

            var current = void 0;
            this.menuList.map(function (i) {
                current = (0, _utilities.hasClass)(i, 'current-menu-item');
                current === true ? _this2.manufacturerMenuStyling() : '';
            });
        }
        // If current page is a manufacturer page, apply their color to menu item

    }, {
        key: 'manufacturerMenuStyling',
        value: function manufacturerMenuStyling() {
            this.manufacturer = document.querySelector('.current-menu-item');
            var currentManufacturer = this.manufacturer.children[0].innerHTML;

            switch (currentManufacturer) {
                case 'Volov':
                    this.manufacturer.style.borderColor = '#003057';
                    break;
                case 'Renault':
                    this.manufacturer.style.borderColor = '#fc3';
                    break;
                case 'Nissan':
                    this.manufacturer.style.borderColor = '#C3002F';
                    break;
                case 'Dacia':
                    this.manufacturer.style.borderColor = '#003057';
                    break;
            }
            return true;
        }
    }]);

    return MainNavigation;
}();

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.Footer = undefined;

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _utilities = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Footer = exports.Footer = function () {
    function Footer() {
        var _this = this;

        _classCallCheck(this, Footer);

        this.elementID = 'page';
        this.scrollBtn = document.querySelector('.scroll-top-btn');
        this.scrollBtn.addEventListener('click', function (e) {
            return _this.scrollToTop(e);
        });
    }
    // Scroll to top of page


    _createClass(Footer, [{
        key: 'scrollToTop',
        value: function scrollToTop(e) {
            (0, _utilities.smoothScroll)(this.elementID);
        }
    }]);

    return Footer;
}();

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.Contact = undefined;

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

var _utilities = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Contact = exports.Contact = function () {
    function Contact() {
        _classCallCheck(this, Contact);

        this.elementID = 'vmc-opening-hours';
        this.scrollBtn = document.querySelector('.opening-hour-button');
        this.ifButtonExist();
    }
    // Check if opening hour button exists, if so add event listener


    _createClass(Contact, [{
        key: 'ifButtonExist',
        value: function ifButtonExist() {
            var _this = this;

            this.scrollBtn !== null ? this.scrollBtn.addEventListener('click', function (e) {
                return _this.scrollToOpeningHour(e);
            }) : '';
        }
        // Scroll to opening hours

    }, {
        key: 'scrollToOpeningHour',
        value: function scrollToOpeningHour(e) {
            (0, _utilities.smoothScroll)(this.elementID);
        }
    }]);

    return Contact;
}();

/***/ })
/******/ ]);