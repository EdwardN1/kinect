jQuery(document).ready(function ($) {

    var delay = 1000;
    var frame0Fade = 1000;

    function fadeOut(e) {
        Foundation.Motion.animateOut($(e), 'fade-out', function () {
            //window.console.log(e + ' Faded Out');
        });
    }

    function fadeIn(e) {
        Foundation.Motion.animateIn($(e), 'fade-in', function () {
            //window.console.log(e + ' Faded In');
        });
    }

    function fadeInLeft(e) {
        Foundation.Motion.animateIn($(e), 'fade-in-left', function () {
            //window.console.log(e + ' Faded In');
        });
    }

    function fadeInRight(e) {
        Foundation.Motion.animateIn($(e), 'fade-in-right', function () {
            window.console.log(e + ' Faded In Right');
        });
    }

    function fadeInUp(e) {
        Foundation.Motion.animateIn($(e), 'fade-in-up', function () {
            //window.console.log(e + ' Faded In');
        });
    }

    function fadeInDown(e) {
        Foundation.Motion.animateIn($(e), 'fade-in-down', function () {
            //window.console.log(e + ' Faded In');
        });
    }

    function slideInLeft(e) {
        Foundation.Motion.animateIn($(e), 'slide-in-left', function () {
            //window.console.log(e + ' Slided In From Left');
        });
    }

    function slideInRight(e) {
        Foundation.Motion.animateIn($(e), 'slide-in-right', function () {
            //window.console.log(e + ' Slided In From Left');
        });
    }

    function slideInUp(e) {
        Foundation.Motion.animateIn($(e), 'slide-in-up', function () {
            //window.console.log(e + ' Slided In Up');
        });
    }

    function slideInDown(e) {
        Foundation.Motion.animateIn($(e), 'slide-in-down', function () {
            //window.console.log(e + ' Slided In Up');
        });
    }


    //==============================================Splash Screen Animations=================================
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

    //==============================================First Section Animations=================================


    setTimeout(function () {
        fadeInRight('.first-section .frame-animation');
        setTimeout(function () {
            fadeIn('.first-section .strap-line');
        }, delay)
    }, delay);

    $('#first-section-waypoint-1').each(function () {
        var $e = $(this);
        $e.waypoint(function (direction) {
            if (direction == 'down') {
                //window.console.log('Going Down');
                fadeInRight('#first-section-waypoint-1 .sub-heading.animate');
                $('#first-section-waypoint-1 .sub-heading.animate').removeClass('animate');
                setTimeout(function () {
                    fadeIn('.first-section .bottom-chevrons .content.animate');
                    $('.first-section .bottom-chevrons .content.animate').removeClass('animate');
                }, delay);
            } else {

            }
        }, {
            offset: -175
        });
    });

    //==============================================Second Section Animations=================================

    $('#second-section-waypoint-1').each(function () {
        var $e = $(this);
        $e.waypoint(function (direction) {
            if (direction == 'down') {
                //window.console.log('Going Down');
                fadeInLeft('#second-section-waypoint-1 .heading.animate');
                $('#second-section-waypoint-1 .heading.animate').removeClass('animate');
                setTimeout(function () {
                    fadeIn('#second-section-waypoint-1 .content.animate');
                    $('#second-section-waypoint-1 .content.animate').removeClass('animate');
                }, delay);
            } else {

            }
        }, {
            offset: 175
        });
    });

    //==============================================Third Section Animations=================================

    $('#third-section-waypoint-1').each(function () {
        var $e = $(this);
        $e.waypoint(function (direction) {
            if (direction == 'down') {
                //window.console.log('Going Down');
                fadeInRight('#third-section-waypoint-1 .heading.animate');
                fadeInLeft('.third-section .chevrons .fly-in-chevron.animate');
                $('#third-section-waypoint-1 .heading.animate').removeClass('animate');
                $('.third-section .chevrons .fly-in-chevron.animate').removeClass('animate');
                setTimeout(function () {
                    fadeIn('#third-section-waypoint-1 .content.animate');
                    $('#third-section-waypoint-1 .content.animate').removeClass('animate');
                }, delay);
            } else {

            }
        }, {
            offset: 175
        });
    });

    //==============================================Forth Section Animations=================================

    $('.forth-section').each(function () {
        var $e = $(this);
        if (!$('#isMobile').is(":visible")) {

            $e.waypoint(function (direction) {
                if (direction == 'down') {
                    //window.console.log('Going Down');
                    fadeInLeft('.forth-section .fly-in-chevron.animate');
                    fadeInRight('.forth-section .suivant.animate');
                    fadeInRight('.forth-section .left .heading.animate')
                    $('.forth-section .fly-in-chevron.animate').removeClass('animate');
                    $('.forth-section .left .heading.animate').removeClass('animate');

                    setTimeout(function () {
                        fadeIn('.forth-section .left .frame-4-fade-in-box.animate');
                        $('.forth-section .left .frame-4-fade-in-box.animate').removeClass('animate');
                    }, delay);

                    setTimeout(function () {
                        fadeInLeft('.forth-section .pizza-box.animate');
                        $('.forth-section .pizza-box.animate').removeClass('animate');
                    }, delay * 2)

                    setTimeout(function () {
                        fadeOut('.forth-section .suivant.animate');
                        setTimeout(function () {
                            fadeIn('.forth-section .suivant.animate');
                            $('.forth-section .suivant.animate').removeClass('animate');
                        }, delay)
                    }, delay * 3);

                    setTimeout(function () {

                    }, delay);
                } else {

                }
            }, {
                offset: 175
            });
        }
    });

    $('.forth-section .chart').each(function () {
        var $e = $(this);
        if (!$('#isMobile').is(":visible")) {

            $e.waypoint(function (direction) {
                if (direction == 'down') {

                    fadeIn('.forth-section .chart .panel-1.animate');
                    $('.forth-section .chart .panel-1.animate').removeClass('animate');
                    delayMod = 0.2;
                    setTimeout(function () {
                        fadeIn('.forth-section .chart .panel-arrow-1.animate');
                        $('.forth-section .chart .panel-arrow-1.animate').removeClass('animate');
                        setTimeout(function () {
                            fadeIn('.forth-section .chart .panel-2.animate');
                            $('.forth-section .chart .panel-2.animate').removeClass('animate');
                            setTimeout(function () {
                                fadeIn('.forth-section .chart .panel-arrow-2.animate');
                                $('.forth-section .chart .panel-arrow-2.animate').removeClass('animate');
                                setTimeout(function () {
                                    fadeIn('.forth-section .chart .panel-3.animate');
                                    $('.forth-section .chart .panel-3.animate').removeClass('animate');
                                    setTimeout(function () {
                                        fadeIn('.forth-section .chart .chart-circle.animate');
                                        $('.forth-section .chart .chart-circle.animate').removeClass('animate');
                                        setTimeout(function () {
                                            fadeIn('.forth-section .chart .panel-4.animate');
                                            $('.forth-section .chart .panel-4.animate').removeClass('animate');
                                            setTimeout(function () {
                                                fadeIn('.forth-section .chart .panel-5.animate');
                                                $('.forth-section .chart .panel-5.animate').removeClass('animate');
                                                setTimeout(function () {
                                                    fadeIn('.forth-section .chart .panel-6.animate');
                                                    $('.forth-section .chart .panel-6.animate').removeClass('animate');
                                                    setTimeout(function () {
                                                        fadeIn('.forth-section .chart .panel-7.animate');
                                                        $('.forth-section .chart .panel-7.animate').removeClass('animate');
                                                        setTimeout(function () {
                                                            fadeIn('.forth-section .chart .panel-8.animate');
                                                            $('.forth-section .chart .panel-8.animate').removeClass('animate');
                                                            setTimeout(function () {
                                                                fadeInRight('.forth-section .chart .content.animate');
                                                                $('.forth-section .chart .content.animate').removeClass('animate');

                                                            },delay*delayMod);
                                                        },delay*delayMod);
                                                    },delay*delayMod);
                                                },delay*delayMod);
                                            },delay*delayMod);
                                        },delay*delayMod);
                                    },delay*delayMod);
                                },delay*delayMod);
                            },delay*delayMod);
                        },delay*delayMod);
                    },delay*delayMod);;

                } else {

                }
            }, {
                offset: 175
            });
        }
    });

    //==============================================Pie Chart Animations=================================
    $('.suivant').click(function () {
        $('.pizza').each(function (e) {
            if (!$(this).hasClass('animation')) {
                $(this).addClass('animation');
                $(this).addClass('rotate-one');
                $('.icons .icon, .bullets').addClass('faded');
                $('.icons .icon, .bullets').removeClass('active');
                setTimeout(function () {
                    showIcon('.veille.icon, .veille.bullets')
                }, 150);
            } else {
                if ($(this).hasClass('rotate-one')) {
                    if (!$(this).hasClass('rotate-two')) {
                        $(this).addClass('rotate-two');
                        $('.icons .icon, .bullets').addClass('faded');
                        $('.icons .icon, .bullets').removeClass('active');
                        setTimeout(function () {
                            showIcon('.consommations.icon, .consommations.bullets')
                        }, 150);
                    } else {
                        if (!$(this).hasClass('rotate-three')) {
                            $(this).addClass('rotate-three');
                            $('.icons .icon, .bullets').addClass('faded');
                            $('.icons .icon, .bullets').removeClass('active');
                            setTimeout(function () {
                                showIcon('.donnees.icon, .donnees.bullets')
                            }, 150);
                        } else {
                            $(this).addClass('rotate-four');
                            $('.icons .icon, .bullets').addClass('faded');
                            $('.icons .icon, .bullets').removeClass('active');
                            setTimeout(function () {
                                showIcon('.contrats.icon, .contrats.bullets')
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

    //==============================================Fifth Section Animations=================================

    $('.fifth-section').each(function () {
        var $e = $(this);
        $e.waypoint(function (direction) {
            if (direction == 'down') {
                //window.console.log('Going Down');
                fadeInLeft('.fifth-section .heading.animate');
                //fadeInLeft('.third-section .chevrons .fly-in-chevron.animate');
                $('.fifth-section .heading.animate').removeClass('animate');
                //$('.third-section .chevrons .fly-in-chevron.animate').removeClass('animate');
                setTimeout(function () {
                    fadeIn('.fifth-section .content.animate');
                    $('.fifth-section .content.animate').removeClass('animate');
                }, delay);
            } else {

            }
        }, {
            offset: 175
        });
    });

    //==============================================Video Section Animations=================================

    $('.sixth-section .bullets li:first-child').addClass('active');

    $('.sixth-section .bullets li').click(function () {
        if (!$(this).hasClass('active')) {
            $('.sixth-section .bullets li').removeClass('active');
            $(this).addClass('active');
            var vidIndex = $(this).index() + 1;
            $('.sixth-section .video').removeClass('active');
            $('.sixth-section .video.vid-' + vidIndex).addClass('active');
        }
    })


});
