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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

var gender;
var physical;
var products = [];
var working;
var measurement = []; // stop frame

$(".carousel").carousel({
  interval: false
}); // end stop frame
// svg-select animation

$(".svg-select").click(function () {
  if ($(this).attr('data-products') == "nomeat") {
    products = [];
    $(".svg-select").removeClass("checked");
    $(this).addClass("checked");
    console.log(products);
  } else {
    $("#nomeat").removeClass("checked");

    if ($(this).hasClass("checked")) {
      $(this).removeClass("checked");
      products.splice($.inArray($(this).attr('data-products'), products), 1);
      console.log(products);
    } else {
      $(this).addClass("checked");
      products.push($(this).attr('data-products'));
      console.log(products);
    }
  }
}); // end svg-select animation
// get gender

$(".gender").click(function () {
  gender = $(this).attr('data-gender');
  console.log(gender);
}); // end get gender
// get physical activity 

$(".physical").click(function () {
  physical = $(this).attr('data-physical');
  console.log(physical);
}); // end gt physical activity
// select typical day

$(".typical").click(function () {
  working = $(this).attr('data-typical');
  console.log(working);
}); // end select typical day

function initChart(el) {
  var data = el.data();
  var size = data.size ? data.size : 270;
  var line = data.line ? data.line : 20;
  var bgcolor = data.bgcolor ? data.bgcolor : '#ffffff';
  var trackcolor = data.trackcolor ? data.trackcolor : '#c14240';
  var speed = data.speed ? data.speed : 3000;
  el.easyPieChart({
    barColor: trackcolor,
    trackColor: bgcolor,
    scaleColor: false,
    scaleLength: false,
    lineCap: 'butt',
    lineWidth: line,
    size: size,
    rotate: 0,
    animate: speed,
    onStep: function onStep(from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });
} // get measurements


$(document).on('click', '.processing', function (event) {
  var $chart = $('#chart-processing .chart');
  $chart.appear();
  initChart($chart);
  measurement.push($("#age").val(), $("#height").val(), $("#weight").val(), $("#target_weight").val());
  console.log(measurement);
}); // end get measurements

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\011_Diet\diet_plan_source\resources\js\app.js */"./resources/js/app.js");
!(function webpackMissingModule() { var e = new Error("Cannot find module 'D:\\011_Diet\\diet_plan_source\\resources\\sass\\app.scss'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());


/***/ })

/******/ });