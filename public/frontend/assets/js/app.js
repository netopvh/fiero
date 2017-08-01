function getUrl() {
    var newURL = window.location.protocol + "//" + window.location.host;
    var pathArray = window.location.pathname.split('/');

    if (pathArray.indexOf('public') > -1) {
        result = newURL + '/' + pathArray[1] + '/' + pathArray[2] + '/';
    } else {
        result = newURL;
    }
    return result;
}


$(function () {

    $(document).ready(function () {

        var slider = $('.bxslider').bxSlider({
            auto: true,
            autoHover: true,
            slideMargin: 0,
            pause: 4000,
            captions: true,
            controls: true,
            pager: false
        });
        $('.bx-controls-direction').hide();
        var box = $('.bx-wrapper');
        box.mouseover(function () {
            $('.bx-controls-direction').show();
        });
        box.mouseleave(function () {
            $('.bx-controls-direction').hide();
        });

        $('.news-slide').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            arrows: false
        });
        $(".video-slider").lightSlider({
            pager: false,
            responsive : [
                {
                    breakpoint:800,
                    settings: {
                        item:1,
                        slideMove:1,
                        slideMargin:6
                    }
                },
                {
                    breakpoint:480,
                    settings: {
                        item:2,
                        slideMove:1
                    }
                }
            ]
        });
    });




    //Validation
    var validator = $(".form-validate").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },

        // Different components require proper error label placement
        errorPlacement: function (error, element) {

            // Styled checkboxes, radios, bootstrap switch
            if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container')) {
                if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                    error.appendTo(element.parent().parent().parent().parent());
                }
                else {
                    error.appendTo(element.parent().parent().parent().parent().parent());
                }
            }

            // Unstyled checkboxes, radios
            else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
                error.appendTo(element.parent().parent().parent());
            }

            // Input with icons and Select2
            else if (element.parents('div').hasClass('has-feedback') || element.hasClass('select2-hidden-accessible')) {
                error.appendTo(element.parent());
            }

            // Inline checkboxes, radios
            else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                error.appendTo(element.parent().parent());
            }

            // Input group, styled file input
            else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
                error.appendTo(element.parent().parent());
            }

            else {
                error.insertAfter(element);
            }
        },
        validClass: "validation-valid-label"
    });
});