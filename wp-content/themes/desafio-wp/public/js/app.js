/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/slick-carousel/slick/slick-theme.css":
/*!***********************************************************!*\
  !*** ./node_modules/slick-carousel/slick/slick-theme.css ***!
  \***********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://desafio-wp/./node_modules/slick-carousel/slick/slick-theme.css?");

/***/ }),

/***/ "./node_modules/slick-carousel/slick/slick.css":
/*!*****************************************************!*\
  !*** ./node_modules/slick-carousel/slick/slick.css ***!
  \*****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://desafio-wp/./node_modules/slick-carousel/slick/slick.css?");

/***/ }),

/***/ "./src/global.scss":
/*!*************************!*\
  !*** ./src/global.scss ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://desafio-wp/./src/global.scss?");

/***/ }),

/***/ "./src/app.ts":
/*!********************!*\
  !*** ./src/app.ts ***!
  \********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _global_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./global.scss */ \"./src/global.scss\");\n/* harmony import */ var _components_slick_carousel__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/slick-carousel */ \"./src/components/slick-carousel.ts\");\n/* harmony import */ var _components_modal__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/modal */ \"./src/components/modal.ts\");\n/* harmony import */ var _components_modal__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_modal__WEBPACK_IMPORTED_MODULE_2__);\n\n\n\n\n\n//# sourceURL=webpack://desafio-wp/./src/app.ts?");

/***/ }),

/***/ "./src/components/modal.ts":
/*!*********************************!*\
  !*** ./src/components/modal.ts ***!
  \*********************************/
/***/ (() => {

eval("\nvar modal = document.getElementById('modal');\nvar openModals = document.querySelectorAll('.open-modal');\nvar closeModals = document.querySelectorAll('.close-modal');\nvar firstClasses = ['opacity-1', 'visible'];\nvar secondClasses = ['opacity-0', 'invisible'];\nif (openModals) {\n    openModals.forEach(function (openModal) {\n        openModal.addEventListener('click', function (event) {\n            var _a, _b;\n            event.preventDefault();\n            if (modal) {\n                (_a = modal.classList).add.apply(_a, firstClasses);\n                (_b = modal.classList).remove.apply(_b, secondClasses);\n            }\n        });\n    });\n}\nif (closeModals) {\n    closeModals.forEach(function (closeModal) {\n        closeModal.addEventListener('click', function (event) {\n            var _a, _b;\n            event.preventDefault();\n            if (modal) {\n                (_a = modal.classList).add.apply(_a, secondClasses);\n                (_b = modal.classList).remove.apply(_b, firstClasses);\n            }\n        });\n    });\n}\n\n\n//# sourceURL=webpack://desafio-wp/./src/components/modal.ts?");

/***/ }),

/***/ "./src/components/slick-carousel.ts":
/*!******************************************!*\
  !*** ./src/components/slick-carousel.ts ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var slick_carousel_slick_slick_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! slick-carousel/slick/slick.css */ \"./node_modules/slick-carousel/slick/slick.css\");\n/* harmony import */ var slick_carousel_slick_slick_theme_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! slick-carousel/slick/slick-theme.css */ \"./node_modules/slick-carousel/slick/slick-theme.css\");\n\n\n(function ($) {\n    var carousels = $('.carousel');\n    carousels.each(function () {\n        $(this).find('div').each(function () {\n            var carouselId = $(this).attr('id');\n            $(\"#\".concat(carouselId)).slick({\n                slidesToShow: 5,\n                slidesToScroll: 1,\n                autoplay: true,\n                autoplaySpeed: 1500,\n                responsive: [\n                    {\n                        breakpoint: 1230,\n                        settings: {\n                            slidesToShow: 4,\n                            slidesToScroll: 1,\n                        }\n                    },\n                    {\n                        breakpoint: 960,\n                        settings: {\n                            slidesToShow: 3,\n                            slidesToScroll: 1,\n                        }\n                    },\n                    {\n                        breakpoint: 400,\n                        settings: {\n                            slidesToShow: 2,\n                            slidesToScroll: 1,\n                        }\n                    },\n                ]\n            });\n        });\n    });\n})(jQuery);\n\n\n//# sourceURL=webpack://desafio-wp/./src/components/slick-carousel.ts?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/app.ts");
/******/ 	
/******/ })()
;