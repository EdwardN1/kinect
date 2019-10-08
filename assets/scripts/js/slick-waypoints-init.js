jQuery(document).ready(function ($) {

    $('[data-waypoint]').each(function () {
        var $element = $(this);
        var wpOffset = $element.data('waypoint-offset');
        var wpDirection = $element.data('waypoint-direction');
        var wpClass = $element.data('waypoint-class');

        $element.waypoint(function (direction) {
            if(direction==wpDirection) {
                if(!$element.hasClass(wpClass)) {
                    $element.addClass(wpClass);
                }
            }
            this.destroy();
        }, {
            offset: wpOffset
        });
    });

    $('[data-slick-slider]').slick();


    $('.first-section .bottom-image, .second-section .background-image, .third-section .background-image').each(function () {
        var $e = $(this);

        $e.waypoint(function (direction) {
            if(direction=='down') {
                if(!$e.hasClass('fixBackground')) {
                    $e.addClass('fixBackground');
                }
            } else {
                $e.removeClass('fixBackground');
            }
        }, {
            offset: 0
        });
    });

});