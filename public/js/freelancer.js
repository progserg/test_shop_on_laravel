// Freelancer Theme JavaScript

(function ($) {
    "use strict"; // Start of use strict

    window.onload = function () {
        var locationNow = location.href;
        if (locationNow.indexOf('menu') !== -1){
            $('ul.nav > li').each(function () {
                $(this).removeClass('active');
            });
            $('li#menu').addClass('active');
        }else{
            $('li#menu').removeClass('active');
        }
        // jQuery for page scrolling feature - requires jQuery Easing plugin
        $('.page-scroll a').bind('click', function (event) {
            if (window.name.indexOf('#') == -1) {
                var $anchor = $(this);
                var base = 'http://steakonlaravel/';
                var href = $anchor.attr('href').substr($anchor.attr('href').indexOf('#'));
                if (locationNow.length > base.length) {
                    window.name = href;
                    location.replace(base);
                }
                if (href) {
                    $('html, body').stop().animate({
                        scrollTop: ($(href).offset().top - 50)
                    }, 1250, 'easeInOutExpo');
                }
            } else {
                var href = window.name;
                window.name = '';
                $('html, body').animate({
                    scrollTop: ($(href).offset().top - 50)
                }, 1250, 'easeInOutExpo');
                return false;
            }
            event.preventDefault();
        });


        if (window.name.indexOf('#') !== -1) {
            $('.page-scroll a[href="' + window.name + '"]').trigger('click');
        }
    }

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function () {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    });

    // Floating label headings for the contact form
    $(function () {
        $("body").on("input propertychange", ".floating-label-form-group", function (e) {
            $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
        }).on("focus", ".floating-label-form-group", function () {
            $(this).addClass("floating-label-form-group-with-focus");
        }).on("blur", ".floating-label-form-group", function () {
            $(this).removeClass("floating-label-form-group-with-focus");
        });
    });

})(jQuery); // End of use strict
