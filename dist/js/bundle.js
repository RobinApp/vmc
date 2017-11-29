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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(1);

var _mainNavigation = __webpack_require__(2);

console.log('Testing');

var mn = new _mainNavigation.MainNavigation();

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
    value: true
});

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

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
        this.manufacturer = document.querySelector('.current-menu-item');
        this.manufacturerMenuStyling();
    }

    _createClass(MainNavigation, [{
        key: 'mobileMenuToggle',
        value: function mobileMenuToggle(e) {
            this.menuSymbol.innerHTML === 'Meny' ? this.menuSymbol.innerHTML = '&#x02A2F' : this.menuSymbol.innerHTML = 'Meny';
            this.menuState === false ? this.menuToggle.classList.add('main-navigation-toggle') : this.menuToggle.classList.remove('main-navigation-toggle');
            this.menuState === false ? this.menuState = true : this.menuState = false;
            return true;
        }
    }, {
        key: 'manufacturerMenuStyling',
        value: function manufacturerMenuStyling() {

            if (this.menuMobile.style.display === 'none') {

                console.log('ja');
            }
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

/***/ })
/******/ ]);