var app = angular.module("MyApp", ['ui.bootstrap']);

$(document).ready(function () {
    'use strict';
    //Nav Bar On Scroll
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
            $('.navbar-inverse').addClass('box-shadow');
        } else {
            $('.navbar-inverse').removeClass('box-shadow');
        }
        if (scroll >= 10) {
            $('.navbar-collapse ul.nav').addClass('black-list');
            $('#menu .fa').css('color', '#242424');
        } else {
            $('.navbar-collapse ul.nav').removeClass('black-list');
            $('#menu .fa').css('color', '#f7f7f7');
        }
        if (scroll >= 500) {
            $('.zip-on-nav').fadeIn('slow');
        } else {
            $('.zip-on-nav').fadeOut('slow');
        }
    });
});
