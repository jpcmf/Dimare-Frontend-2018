//
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

// dropdown menu parent item clickable
function dropdownClickable() {
    if ($(window).width() > 767) {
        $('.navbar .dropdown').hover(function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(30).slideDown();

        }, function() {
            $(this).find('.dropdown-menu').first().stop(true, true).delay(30).slideUp();
        });

        $('.navbar .dropdown > a').click(function() {
            location.href = this.href;
        });
    }
}

// open images modal
function openModal() {
    $('.pop').on('click', function(e) {
        e.preventDefault();
        $('.imagepreview').attr('src', $(this).find('img').attr('src'));
        $('#imagemodal').modal('show');
    });
}

$(function() {
    dropdownClickable();
    openModal();
});

$(window).resize(function() {
    dropdownClickable();
});
