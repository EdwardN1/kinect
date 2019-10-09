jQuery(document).ready(function ($) {

    var delay = 1000;
    var frame0Fade = 1000;

    function fadeOut(e) {
        Foundation.Motion.animateOut($(e), 'fade-out', function () {
            window.console.log(e + ' Faded Out');
        });
    }

    function fadeIn(e) {
        Foundation.Motion.animateIn($(e), 'fade-in', function () {
            window.console.log(e + ' Faded In');
        });
    }

    function slideInLeft(e) {
        Foundation.Motion.animateIn($(e), 'slide-in-left', function () {
            window.console.log(e + ' Slided In From Left');
        });
    }

    function slideInRight(e) {
        Foundation.Motion.animateIn($(e), 'slide-in-right', function () {
            window.console.log(e + ' Slided In From Left');
        });
    }

    function slideInUp(e) {
        Foundation.Motion.animateIn($(e), 'fade-in-up', function () {
            window.console.log(e + ' Slided In Up');
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
                        fadeOut('#frame-0');
                    }, frame0Fade)
                }, delay)
            }, delay)
        }, delay)
    }, delay);

    $('.suivant').click(function () {
        $('.pizza').each(function (e) {
            if (!$(this).hasClass('animation')) {
                $(this).addClass('animation');
                $(this).addClass('rotate-one');
                $('.icons .icon').addClass('faded');
                $('.icons .icon').removeClass('active');
                setTimeout(function () {
                    showIcon('.veille.icon')
                }, 150);
            } else {
                if ($(this).hasClass('rotate-one')) {
                    if (!$(this).hasClass('rotate-two')) {
                        $(this).addClass('rotate-two');
                        $('.icons .icon').addClass('faded');
                        $('.icons .icon').removeClass('active');
                        setTimeout(function () {
                            showIcon('.consommations.icon')
                        }, 150);
                    } else {
                        if (!$(this).hasClass('rotate-three')) {
                            $(this).addClass('rotate-three');
                            $('.icons .icon').addClass('faded');
                            $('.icons .icon').removeClass('active');
                            setTimeout(function () {
                                showIcon('.donnees.icon')
                            }, 150);
                        } else {
                            $(this).addClass('rotate-four');
                            $('.icons .icon').addClass('faded');
                            $('.icons .icon').removeClass('active');
                            setTimeout(function () {
                                showIcon('.contrats.icon')
                            }, 150);
                        }
                    }
                }
                currentPizza = this;
                setTimeout(function () {
                    resetPizza(currentPizza)
                }, 300);
            }
        })
    });

    function showIcon(e) {
        $(e).addClass('active');
        $(e).removeClass('faded');
       /* $('.icon').each(function () {
            if(!$(this).hasClass(e)) {
                $(this).removeClass('active');
                $(this).addClass('faded');
            }
        })*/
    }

    function resetPizza(e) {
        if ($(e).hasClass('rotate-four')) {
            $(e).removeClass('animation');
            $(e).removeClass('rotate-one');
            $(e).removeClass('rotate-two');
            $(e).removeClass('rotate-three');
            $(e).removeClass('rotate-four');
        }
    }


});
