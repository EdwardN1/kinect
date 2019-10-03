jQuery(document).ready(function ($) {

    var delay = 1000;
    var frame0Fade = 5000;

    function fadeOut(e) {
        Foundation.Motion.animateOut($(e), 'fade-out', function () {
            window.console.log(e+' Faded Out');
        });
    }

    function fadeIn(e) {
        Foundation.Motion.animateIn($(e), 'fade-in', function () {
            window.console.log(e+' Faded In');
        });
    }

    function slideInLeft(e) {
        Foundation.Motion.animateIn($(e), 'slide-in-left', function () {
            window.console.log(e+' Slided In From Left');
        });
    }

    function slideInRight(e) {
        Foundation.Motion.animateIn($(e), 'slide-in-right', function () {
            window.console.log(e+' Slided In From Left');
        });
    }

    function slideInUp(e) {
        Foundation.Motion.animateIn($(e), 'fade-in-up', function () {
            window.console.log(e+' Slided In Up');
        });
    }

    setTimeout(function () {
        $('#frame-0 .left-chevron').show();
        slideInRight('#frame-0 .left-chevron');
        setTimeout(function () {
            $('#frame-0 .right-chevron').show();
            slideInRight('#frame-0 .right-chevron');
            setTimeout(function () {
                //fadeOut('#frame-0');
               slideInUp('#frame-0 .logo');
               setTimeout(function () {
                   slideInUp('#frame-0 .strap-line-message');
                   setTimeout(function () {
                       //fadeOut('#frame-0');
                   },frame0Fade)
               },delay)
            },delay)
        },delay)
        },delay);


});
