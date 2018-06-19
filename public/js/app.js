webpackJsonp([1],[
/* 0 */,
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(2);
module.exports = __webpack_require__(3);


/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {//
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// require('./bootstrap');
//
// window.Vue = require('vue');
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

$(function () {

    // dropdown menu parent item clickable
    function dropdownClickable() {
        if ($(window).width() > 767) {
            $('.navbar .dropdown').hover(function () {
                $(this).find('.dropdown-menu').first().stop(true, true).delay(30).slideDown();
            }, function () {
                $(this).find('.dropdown-menu').first().stop(true, true).delay(30).slideUp();
            });

            $('.navbar .dropdown > a').click(function () {
                location.href = this.href;
            });
        }
    }
    dropdownClickable();

    $(window).resize(function () {
        dropdownClickable();
    });
});
/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(0)))

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
],[1]);