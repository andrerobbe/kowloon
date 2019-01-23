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
/***/ (function(module, exports, __webpack_require__) {

/*
 *
 * Components
 *
 */
__webpack_require__(/*! ./components/aboutFaq */ "./resources/js/components/aboutFaq.js");

__webpack_require__(/*! ./components/articles */ "./resources/js/components/articles.js");

__webpack_require__(/*! ./components/cookie */ "./resources/js/components/cookie.js");

__webpack_require__(/*! ./components/details */ "./resources/js/components/details.js");

__webpack_require__(/*! ./components/formValidator */ "./resources/js/components/formValidator.js");

__webpack_require__(/*! ./components/infiniteScroll */ "./resources/js/components/infiniteScroll.js");

__webpack_require__(/*! ./components/navigation */ "./resources/js/components/navigation.js");

__webpack_require__(/*! ./components/overlay */ "./resources/js/components/overlay.js");

__webpack_require__(/*! ./components/rangeSlider */ "./resources/js/components/rangeSlider.js");

__webpack_require__(/*! ./components/search */ "./resources/js/components/search.js");

__webpack_require__(/*! ./components/selectBox */ "./resources/js/components/selectBox.js");

__webpack_require__(/*! ./components/slideShow */ "./resources/js/components/slideShow.js");

/***/ }),

/***/ "./resources/js/components/aboutFaq.js":
/*!*********************************************!*\
  !*** ./resources/js/components/aboutFaq.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * About FAQ
 *
 */
function toggleQuesion() {
  var question = this;
  var arrow = this.querySelector('div');
  question.classList.toggle('active');

  if (arrow.classList.contains('arrow-right')) {
    arrow.className = "arrow-down";
  } else if (arrow.classList.contains('arrow-down')) {
    arrow.className = "arrow-right";
  }
}

function eventHandlerAboutFaq() {
  var question = document.querySelectorAll(".about-faq .question");

  for (var i = 0; i < question.length; i++) {
    question[i].addEventListener("click", toggleQuesion);
  }
}

eventHandlerAboutFaq();

/***/ }),

/***/ "./resources/js/components/articles.js":
/*!*********************************************!*\
  !*** ./resources/js/components/articles.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * Articles
 *
 */
function toggleFilter() {
  var filterOptions = document.querySelector('.article-filters');
  var filterArrow = document.getElementById('article-filter-arrow');
  filterOptions.classList.toggle('active');

  if (filterArrow.classList.contains('arrow-right')) {
    filterArrow.classList.remove('arrow-right');
    filterArrow.classList.add('arrow-down');
  } else if (filterArrow.classList.contains('arrow-down')) {
    filterArrow.classList.add('arrow-right');
    filterArrow.classList.remove('arrow-down');
  }
}

function eventHandlerArticle() {
  var filterTxt = document.getElementById('article-filter');

  if (filterTxt) {
    filterTxt.addEventListener("click", toggleFilter);
  }
}

eventHandlerArticle();

/***/ }),

/***/ "./resources/js/components/cookie.js":
/*!*******************************************!*\
  !*** ./resources/js/components/cookie.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * Create Cookies object, allowing cookies to be created, retrieved, and deleted
 *
 */
// create the Cookies object
var Cookies = {
  /* Sets a cookie. The parameters are:
   *
   * name    - the name of the cookie
   * value   - the value of the cookie
   * options - an optional object which may have the following keys:
   *           domain - the domain for which the cookie should be set; if
   *                    omitted, the cookie is set for the current domain
   *           path   - the path for which the cookie should be set; if omitted,
   *                    the cookie is set for the current path
   *           expiry - the expiry date, as either an instance of Date or a
   *                    number of seconds; if omitted, the cookie expires at the
   *                    end of the browser session
   *           secure - true if the cookie should only be sent over encrypted
   *                    connections; if omitted or false, the cookie is sent
   *                    over both encrypted and unencrypted connections
   */
  set: function set(name, value, options) {
    // initialise the cookie data
    var data = [encodeURIComponent(name) + '=' + encodeURIComponent(value)]; // check whether there are options

    if (options) {
      // extend the data with the expiry date if necessary
      if ('expiry' in options) {
        if (typeof options.expiry == 'number') {
          options.expiry = new Date(options.expiry * 1000 + +new Date());
        }

        data.push('expires=' + options.expiry.toGMTString());
      } // extend the data with the other options if necessary


      if ('domain' in options) data.push('domain=' + options.domain);
      if ('path' in options) data.push('path=' + options.path);
      if ('secure' in options && options.secure) data.push('secure');
    } // set the cookie


    document.cookie = data.join('; ');
  },

  /* Returns the value of the specified cookie. If keepDuplicates is not set or
   * false then the return value is a string, or the value undefined if there is
   * no cookie with the specified name. If keepDuplucates is true then the
   * return value is an array of strings, which will be empty if there are no
   * cookies with the specified name. The parameters are:
   *
   * name           - the name of the cookie
   * keepDuplicates - true to return an array containing the values of all
   *                  cookies with the specified name; if omitted or false a
   *                  string (or the value undefined) will be returned
   */
  get: function get(name, keepDuplicates) {
    // initialise the list of values
    var values = []; // loop over the cookies

    var cookies = document.cookie.split(/; */);

    for (var i = 0; i < cookies.length; i++) {
      // if the cookie has the requested name, add its value to the list
      var details = cookies[i].split('=');

      if (details[0] == encodeURIComponent(name)) {
        values.push(decodeURIComponent(details[1].replace(/\+/g, '%20')));
      }
    } // return the first value or all values as appropriate


    return keepDuplicates ? values : values[0];
  },

  /* Clears a cookie. The parameters are:
   *
   * name    - the name of the cookie
   * options - an optional object which may have the following keys:
   *           domain - the domain for which the cookie was set; if omitted, the
   *                    cookie is cleared for the current domain
   *           path   - the path for which the cookie was set; if omitted, the
   *                    cookie is cleared for the current path
   */
  clear: function clear(name, options) {
    // clear the cookie
    if (!options) options = {};
    options.expiry = -86400;
    this.set(name, '', options);
  }
};
/*
 *
 * Cookie functions
 *
 */

function setCookie() {
  Cookies.set('kowloon', 'accepted-cookie');
  cookiePopup();
  /*
  Cookies.set('kowloon', 'accepted-cookie', {expiry : 3600});
  Cookies.set('kowloon', 'accepted-cookie', {expiry : new Date(2020, 0, 1)});
  	 Cookies.set('kowloon', 'accepted-cookie', {path : '/'});
  Cookies.set('kowloon', 'accepted-cookie', {path : '/news/'});
  	 Cookies.set('kowloon', 'accepted-cookie', {domain : '.example.com'});
  	 Cookies.set('kowloon', 'accepted-cookie', {secure : true});
  */
}

function getCookie() {
  var cookieArray = Cookies.get('kowloon', true);
  return cookieArray;
}

function delCookie() {
  Cookies.clear('kowloon');
  /*
  Cookies.clear(
  'kowloon',
  {
  	path:  '/',
  	domain:'.example.com'
  });
  */
}

function cookiePopup() {
  var popup = document.getElementsByClassName('cookie')[0];
  var fade = document.getElementsByClassName('fade-out')[0];
  var isset = getCookie(); //if cookie is set dont show popup

  if (typeof isset !== 'undefined' && isset.length > 0) {
    popup.classList.remove('active');
    fade.classList.remove('active');
  } else {
    popup.classList.add('active');
    fade.classList.add('active');
  }
}

function closeCookiePopup() {
  var popup = document.getElementsByClassName('cookie')[0];
  var fade = document.getElementsByClassName('fade-out')[0];
  popup.classList.remove('active');
  fade.classList.remove('active');
}

function eventHandlerCookie() {
  cookiePopup();
  var btnAccept = document.getElementById('accept-cookie');
  var btnIgnore = document.getElementById('ignore-cookie');
  btnAccept.addEventListener("click", setCookie);
  btnIgnore.addEventListener("click", closeCookiePopup);
}

eventHandlerCookie();

/***/ }),

/***/ "./resources/js/components/details.js":
/*!********************************************!*\
  !*** ./resources/js/components/details.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * Details
 *
 */
function changeActiveImg() {
  var otherSections = document.querySelectorAll('.img-list section');

  for (var i = 0; i < otherSections.length; i++) {
    otherSections[i].classList.remove('active');
  }

  this.classList.add('active');
  var featuredImg = document.querySelector('.item-images .featured-img');
  var clickedImg = document.querySelector('.img-list .active img');
  featuredImg.src = clickedImg.src;
}

function scrollLeft() {
  var productSlider = document.querySelector('.product-slider');
  productSlider.scrollBy(-484, 0);
}

function scrollRight() {
  var productSlider = document.querySelector('.product-slider');
  productSlider.scrollBy(484, 0);
}

function eventHandlerDetails() {
  var imgList = document.querySelectorAll('.img-list section');

  for (var i = 0; i < imgList.length; i++) {
    imgList[i].addEventListener('click', changeActiveImg);
  }

  var btnLeft = document.querySelector('.scroll-left');
  var btnRight = document.querySelector('.scroll-right');

  if (btnLeft) {
    btnLeft.addEventListener('click', scrollLeft);
  }

  if (btnRight) {
    btnRight.addEventListener('click', scrollRight);
  }
}

eventHandlerDetails();

/***/ }),

/***/ "./resources/js/components/formValidator.js":
/*!**************************************************!*\
  !*** ./resources/js/components/formValidator.js ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * formValidator
 *
 */
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validator() {
  var email = document.getElementById('email-field');
  var emailError = document.getElementById('email-error');
  var msg = document.getElementById('msg-field');
  var msgError = document.getElementById('msg-error');
  var isValid = validateEmail(email.value);
  var isTxt = msg.value; //Email error msg

  if (!isValid) {
    emailError.innerHTML = '* Fill in a correct e-mail address.';
  } else {
    emailError.innerHTML = '';
  } //Textarea error msg


  if (msg.value == '') {
    msgError.innerHTML = '* Write a message.';
  } else {
    msgError.innerHTML = '';
  } //if valid, browse to homepage


  if (isValid && msg.value != '') {
    window.location.replace("/");
  }
}

function eventHandlerFormValidator() {
  var sendBtn = document.getElementById('send-btn');

  if (sendBtn) {
    sendBtn.addEventListener("click", validator);
  }
}

eventHandlerFormValidator();

/***/ }),

/***/ "./resources/js/components/infiniteScroll.js":
/*!***************************************************!*\
  !*** ./resources/js/components/infiniteScroll.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * InfinteScroll
 *
 */
//hide loading img when at bottom
window.onscroll = function (ev) {
  if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
    // you're at the bottom of the page
    var loadingImg = document.getElementsByClassName('infinite-scroll-request')[0];
    loadingImg.classList.add('disable');
  }
}; // FAQ overlay


var navbarFaq = document.querySelector('.question-feed');

if (navbarFaq) {
  var infScroll = new InfiniteScroll(navbarFaq, {
    // options
    path: '.question__next',
    append: '.question',
    history: false //disables URL changes so going back a page isn't screwed

  });
}

var articles = document.querySelector('.article-feed');

if (articles) {
  var infScroll = new InfiniteScroll(articles, {
    // options
    path: '.article__next',
    append: '.item-small',
    history: false //disables URL changes so going back a page isn't screwed

  });
}

/***/ }),

/***/ "./resources/js/components/navigation.js":
/*!***********************************************!*\
  !*** ./resources/js/components/navigation.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * Navigation
 *
 */
function toggleNavigation() {
  var navbar = document.getElementsByClassName('navbar-vertical')[0];
  var navbarLogo = document.getElementById('navbar-logo').getElementsByTagName('img')[0];
  var navbarLogoLong = document.getElementById('logo-long').getElementsByTagName('img')[0];
  var navbarOther = document.getElementById('nav-other');
  navbar.classList.toggle('active');
  navbarOther.classList.toggle('active');
  navbarLogo.classList.toggle('inactive');
  navbarLogoLong.classList.toggle('inactive'); //mobile

  var mobileNav = document.getElementById('mobile-menu');
  mobileNav.classList.toggle('active');
}

function eventHandlerNavigation() {
  var navbar = document.getElementById('nav-burger');
  var mobileNav = document.getElementById('mobile-menu');
  navbar.addEventListener("click", toggleNavigation);
  mobileNav.addEventListener("click", toggleNavigation);
}

eventHandlerNavigation();

/***/ }),

/***/ "./resources/js/components/overlay.js":
/*!********************************************!*\
  !*** ./resources/js/components/overlay.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * Overlay
 *
 */

/*
 *
 * BUGG FIX NOTE:
 * 
 * closeSearch() and closeFaq() are for some reason not defined as eventListener.
 * Any other function name works ..
 *
 * Update: turns out I had the same variable names as function names ..
 *
 */
function closeSearch() {
  var search = document.getElementsByClassName("overlay-search")[0];
  search.classList.remove('active');
}

function closeFaq() {
  var faq = document.getElementsByClassName("overlay-faq")[0];
  faq.classList.remove('active');
}

function toggleSearchOverlay() {
  closeNavigation();
  closeFaq();
  var search = document.getElementsByClassName("overlay-search")[0];
  var searchIcon = document.getElementById('nav-search');
  setTimeout(function () {
    search.classList.toggle('active');
    searchIcon.classList.toggle('active');
  }, 300);
}

function toggleFaqOverlay() {
  closeNavigation();
  closeSearch();
  var faq = document.getElementsByClassName("overlay-faq")[0];
  var faqIcon = document.getElementById('nav-faq');
  setTimeout(function () {
    faq.classList.toggle('active');
    faqIcon.classList.toggle('active');
  }, 300);
}

function toggleAdvancedFilter() {
  var filter = document.getElementsByClassName('advanced-filter')[0];
  var filterArrow = document.getElementById('filter-arrow');
  filter.classList.toggle('active');

  if (filterArrow.classList.contains('arrow-right')) {
    filterArrow.className = "arrow-down";
  } else if (filterArrow.classList.contains('arrow-down')) {
    filterArrow.className = "arrow-right";
  }
}

function eventHandlerOverlay() {
  var search = document.getElementById("nav-search");
  var closeSearchBtn = document.getElementById("close-search");
  var closeFaqBtn = document.getElementById("close-faq");
  var faq = document.getElementById("nav-faq");
  var filter = document.getElementById('adv-filter');
  search.addEventListener("click", toggleSearchOverlay);
  closeSearchBtn.addEventListener("click", closeSearch);
  closeFaqBtn.addEventListener("click", closeFaq);
  faq.addEventListener("click", toggleFaqOverlay);
  filter.addEventListener("click", toggleAdvancedFilter);
  var moreAboutQ = document.getElementById('more-about-questions');

  if (moreAboutQ) {
    moreAboutQ.addEventListener("click", toggleFaqOverlay);
  }
}

eventHandlerOverlay();
/*
 *
 * Navigation
 *
 */

function closeNavigation() {
  var navbar = document.getElementsByClassName('navbar-vertical')[0];
  var navbarLogo = document.getElementById('navbar-logo').getElementsByTagName('img')[0];
  var navbarLogoLong = document.getElementById('logo-long').getElementsByTagName('img')[0];
  var navbarOther = document.getElementById('nav-other');
  navbar.classList.remove('active');
  navbarOther.classList.remove('active');
  navbarLogo.classList.remove('inactive');
  navbarLogoLong.classList.add('inactive'); //mobile

  var mobileNav = document.getElementById('mobile-menu');
  mobileNav.classList.remove('active');
}

/***/ }),

/***/ "./resources/js/components/rangeSlider.js":
/*!************************************************!*\
  !*** ./resources/js/components/rangeSlider.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * rangeSliders
 *
 */
function getValues() {
  // Get slider values
  var parent = this.parentNode;
  var sliders = parent.getElementsByTagName("input");
  var slide1 = parseFloat(sliders[0].value);
  var slide2 = parseFloat(sliders[1].value); // Neither slider will clip the other, so make sure we determine which is larger

  if (slide1 > slide2) {
    var tmp = slide2;
    slide2 = slide1;
    slide1 = tmp;
  }

  var displayValOne = parent.getElementsByClassName("rangeValue-1")[0];
  var displayValTwo = parent.getElementsByClassName("rangeValue-2")[0];
  displayValOne.innerHTML = slide1;
  displayValTwo.innerHTML = slide2;
} //


window.onload = function () {
  var sliderSections = document.getElementsByClassName("range-slider");

  for (var i = 0; i < sliderSections.length; i++) {
    var sliders = sliderSections[i].getElementsByTagName("input");

    for (var y = 0; y < sliders.length; y++) {
      if (sliders[y].type === "range") {
        sliders[y].oninput = getValues; // Manually trigger event first time to display values

        sliders[y].oninput();
      }
    }
  }
};

/***/ }),

/***/ "./resources/js/components/search.js":
/*!*******************************************!*\
  !*** ./resources/js/components/search.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * Search
 *
 */
function focusInput() {
  var searchInput = document.getElementsByClassName("search-input")[0];
  var faqInput = document.getElementsByClassName("search-input")[1];
  var searchOverlay = document.getElementsByClassName("overlay-search")[0];
  var faqOverlay = document.getElementsByClassName("overlay-faq")[0];
  setTimeout(function () {
    //focus input field if overlay is active
    if (searchOverlay.classList.contains('active')) {
      searchInput.focus();
    }

    if (faqOverlay.classList.contains('active')) {
      faqInput.focus();
    }
  }, 300); //300ms delay on setting active class, cus of potential closing animation
}

function checkInputToShowLabel() {
  var searchInput = document.getElementsByClassName("search-input");
  var searchLabelMobile = document.getElementById("search-mobile");
  var searchLabelDesktop = document.getElementById("search-desktop");
  var searchLabelFaq = document.getElementById("search-faq"); //if input is empty, show the label

  setInterval(function () {
    //check value of Search Page
    if (searchInput[0].value == '') {
      searchLabelMobile.classList.add('active');
      searchLabelDesktop.classList.add('active');
    } else if (searchInput[0].value != '') {
      searchLabelMobile.classList.remove('active');
      searchLabelDesktop.classList.remove('active');
    } //check value of Faq Page


    if (searchInput[1].value == '') {
      searchLabelFaq.classList.add('active');
    } else if (searchInput[1].value != '') {
      searchLabelFaq.classList.remove('active');
    }
  }, 300); //check input every 300ms
}

function clearInput() {
  var searchInput = document.getElementsByClassName("search-input");

  for (var i = 0; i < searchInput.length; i++) {
    searchInput[i].value = '';
  }
}

function eventHandlerSearch() {
  checkInputToShowLabel();
  var search = document.getElementById("nav-search");
  var faq = document.getElementById("nav-faq");
  search.addEventListener("click", focusInput);
  faq.addEventListener("click", focusInput);
  var searchLabel = document.getElementsByClassName("search-label");

  for (var i = 0; i < searchLabel.length; i++) {
    searchLabel[i].addEventListener("click", focusInput);
  }

  var clearBtn = document.querySelectorAll("button.sprite.clear");

  for (var i = 0; i < clearBtn.length; i++) {
    clearBtn[i].addEventListener("click", clearInput);
  }
}

eventHandlerSearch();

/***/ }),

/***/ "./resources/js/components/selectBox.js":
/*!**********************************************!*\
  !*** ./resources/js/components/selectBox.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * Select Box
 *
 */
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "select-box":*/

x = document.getElementsByClassName("select-box");

for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/

  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/

  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");

  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function (e) {
      /*when an item is clicked, update the original select box,
      and the selected item:*/
      var y, i, k, s, h;
      s = this.parentNode.parentNode.getElementsByTagName("select")[0];
      h = this.parentNode.previousSibling;

      for (i = 0; i < s.length; i++) {
        if (s.options[i].innerHTML == this.innerHTML) {
          s.selectedIndex = i;
          h.innerHTML = this.innerHTML;
          y = this.parentNode.getElementsByClassName("same-as-selected");

          for (k = 0; k < y.length; k++) {
            y[k].removeAttribute("class");
          }

          this.setAttribute("class", "same-as-selected");
          break;
        }
      }

      h.click();
    });
    b.appendChild(c);
  }

  x[i].appendChild(b);
  a.addEventListener("click", function (e) {
    /*when the select box is clicked, close any other select boxes,
    and open/close the current select box:*/
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x,
      y,
      i,
      arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");

  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i);
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }

  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/


document.addEventListener("click", closeAllSelect);

/***/ }),

/***/ "./resources/js/components/slideShow.js":
/*!**********************************************!*\
  !*** ./resources/js/components/slideShow.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*
 *
 * SlideShow
 *
 */
var slideIndex = 2; // Slide 1 is active on start

var slideTimer = 800; // Time between slides, using miliseconds so clicking feels responsive

var seconds; // Global timer, reset on clicking another slide

function showNextSlide() {
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot-slides"); //active class on slides and dots

  for (var i = 0; i < slides.length; i++) {
    slides[i].classList.remove('active');
    dots[i].classList.remove('active');
  }

  slides[slideIndex - 1].classList.add('active');
  dots[slideIndex - 1].classList.add('active');
  slideIndex++;

  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
}

function changeSlide() {
  //change id and reset timer
  slideIndex = this.id.substring(4);
  seconds = 0;
}
/*
 *
 * If global variable seconds hits zero, showNextSlide
 *
 * Check the time every 50 miliseconds
 * If a dot is clicked, timer is reset and slideIndex is set
 * Will showNextSlide after maximum 50 miliseconds
 * 
 */


function startSlideShow(n) {
  seconds = slideTimer;
  setInterval(function () {
    seconds--;

    if (seconds <= 0) {
      showNextSlide();
      seconds = slideTimer;
    }
  }, 10);
}

function eventHandlerSlideShow() {
  //only startSlideShow on pages that have slideShowContainer
  var slideShowContainer = document.getElementsByClassName("slideshow-container")[0];

  if (slideShowContainer) {
    startSlideShow();
  }

  var dots = document.getElementsByClassName("dot-slides");

  for (var i = 0; i < dots.length; i++) {
    dots[i].addEventListener("click", changeSlide);
  }
}

eventHandlerSlideShow();

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/styleguide.scss":
/*!****************************************!*\
  !*** ./resources/sass/styleguide.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!**********************************************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ./resources/sass/styleguide.scss ***!
  \**********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\Maurits\Documents\School\jaar4\development\websites\kowloon\resources\js\app.js */"./resources/js/app.js");
__webpack_require__(/*! C:\Users\Maurits\Documents\School\jaar4\development\websites\kowloon\resources\sass\app.scss */"./resources/sass/app.scss");
module.exports = __webpack_require__(/*! C:\Users\Maurits\Documents\School\jaar4\development\websites\kowloon\resources\sass\styleguide.scss */"./resources/sass/styleguide.scss");


/***/ })

/******/ });