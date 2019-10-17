jQuery(document).ready(function ($) {

    $('[data-waypoint]').each(function () {
        var $element = $(this);
        var wpOffset = $element.data('waypoint-offset');
        var wpDirection = $element.data('waypoint-direction');
        var wpClass = $element.data('waypoint-class');

        $element.waypoint(function (direction) {
            if (direction == wpDirection) {
                if (!$element.hasClass(wpClass)) {
                    $element.addClass(wpClass);
                }
            }
            this.destroy();
        }, {
            offset: wpOffset
        });
    });

    $('[data-slick-slider]').slick();


    $('.single .featured-image, .first-section .bottom-image, .second-section .background-image, .third-section .background-image, .fifth-section .background-image, .mobile-third-section .background-image, .mobile-forth-section .background-image, .mobile-fifth-section .background-image, .mobile-seventh-section .background-image').each(function () {
        var $e = $(this);

        if (!$('#isMobile').is(":visible")) {
            $e.waypoint(function (direction) {
                if (direction == 'down') {
                    if (!$e.hasClass('fixBackground')) {
                        $e.addClass('fixBackground');
                    }
                } else {
                    $e.removeClass('fixBackground');
                }
            }, {
                offset: 0
            });
        }
    });

});