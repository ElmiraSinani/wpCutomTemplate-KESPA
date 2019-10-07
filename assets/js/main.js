/**
 * createIT main javascript file.
 */
var $devicewidth = (window.innerWidth > 0) ? window.innerWidth : screen.width,
    $deviceheight = (window.innerHeight > 0) ? window.innerHeight : screen.height,
    $bodyel = jQuery("body"),
    $navbarel = jQuery(".navbar"),
    $topbarel = jQuery(".ct-topBar"),
    $lgWidth = 1199,
    $mdWidth = 991,
    $smWidth = 767,
    $xsWidth = 479;
/* ========================== */
/* ==== HELPER FUNCTIONS ==== */
function validatedata($attr, $defaultValue) {
    "use strict";
    if ($attr !== undefined) {
        return $attr
    }
    return $defaultValue;
}

function parseBoolean(str, $defaultValue) {
    "use strict";
    if (str == 'true') {
        return true;
    } else if (str == "false") {
        return false;
    }
    return $defaultValue;
}

function goBack() {
  window.history.back();
}

(function ($) {
    "use strict";
    if(document.getElementById('ct-js-wrapper')){
        var snapper = new Snap({
            element: document.getElementById('ct-js-wrapper')
        });

        snapper.settings({
            disable: "left",
            easing: 'ease',
            addBodyClasses: true
        });
    }

    $(document).ready(function () {
        
        //Clone Donation Amount into tile
        $('.btn-donate-amount').on('click', function(e){
            var amount = $(this).attr('data-amount');
            $('#contributationAmount').html('$'+amount);
            $('#contributationInfoForm .custom-amount').val(amount);
        });
        
        //logo carusel
//        $('#logo-carusel ul').bxSlider({
//            pager: false,
//            auto: true,
//            speed: 2000,
//            slideWidth: 100,
//            minSlides: 3,
//            maxSlides: 5
//        });
        
        //togle show/hide
        $('.toggleContent').on('click', function(e){
            e.preventDefault();
            if($(this).parent().hasClass('extended')){
                $(this).html('Show More &#8594;');
                $(this).parent().find('.textForExtend').addClass('hide');
                $(this).parent().removeClass('extended');                
            }else{
                $(this).parent().addClass('extended');
                $(this).parent().find('.textForExtend').removeClass('hide');
                $(this).html('Show Less');
            }          
        });
       
        

        // Add Color // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        $(".ct-js-color").each(function(){
            $(this).css("color", '#' + $(this).attr("data-color"))
        });

        // Snap Navigation in Mobile // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        if ($devicewidth > 767 && document.getElementById('ct-js-wrapper')) {
            snapper.disable();
        }

        $(".navbar-toggle").on('click', function () {
            if($bodyel.hasClass('snapjs-right')){
                snapper.close();
            } else{
                snapper.open('right');
            }
        });

        $('.ct-menuMobile .ct-menuMobile-navbar .dropdown > a').on('click', function(e) {
            return false; // iOS SUCKS
        });
        $('.ct-menuMobile .ct-menuMobile-navbar .dropdown > a, .ct-menuMobile .ct-menuMobile-navbar .dropdown-submenu > a').on('click', function(e){
            var $this = $(this);
            if($this.parent().hasClass('open')){
                $(this).parent().removeClass('open');
            } else{
                $(this).parent().addClass('open');
            }
            return false; // iOS SUCKS
        });

        $('.ct-menuMobile .ct-menuMobile-navbar .onepage > a').on('click', function(e) {
            snapper.close();
        });

        // Animations Init // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        if ($().appear) {
            if (device.mobile() || device.tablet()) {
                $("body").removeClass("cssAnimate");
            } else {

                $('.cssAnimate .animated').appear(function () {
                    var $this = $(this);

                    $this.each(function () {
                        if ($this.data('time') != undefined) {
                            setTimeout(function () {
                                $this.addClass('activate');
                                $this.addClass($this.data('fx'));
                            }, $this.data('time'));
                        } else {
                            $this.addClass('activate');
                            $this.addClass($this.data('fx'));
                        }
                    });
                }, {accX: 50, accY: -350});
            }
        }

        // Tooltips and Popovers // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        $("[data-toggle='tooltip']").tooltip();

        $("[data-toggle='popover']").popover({trigger: "hover", html: true});

        // Link Scroll to Section // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        function goToByScroll(id) {
            $('html,body').animate({scrollTop: $(id).offset().top - 70}, 'slow');
        }
        function goToByScrollMobile(id) {
            $('html,body').animate({scrollTop: $(id).offset().top}, 'slow');
        }
            $('body .ct-js-btnScroll').on('click', function () {
                goToByScroll($(this).attr('href'));
                return false;
            });
            $('body .ct-js-btnScroll--mobile').on('click', function () {
                $('.navbar-toggle').click();
                goToByScrollMobile($(this).attr('href'));
                return false;
            });
        $('.ct-js-btnScrollUp').on('click', function (e) {
            e.preventDefault();
            $("body,html").animate({scrollTop: 0}, 1200);
            console.log($navbarel);
            $navbarel.find('.onepage').removeClass('active');
            $navbarel.find('.onepage:first-child').addClass('active');
            return false;
        });

        // Placeholder Fallback // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        if ($().placeholder) {
            $("input[placeholder],textarea[placeholder]").placeholder();
        }

        //Scroll to Top

        $('#toTop').on('click', function(){
            $('html, body').animate(
                {
                    scrollTop : 0
                },
                {
                    duration: 800,
                    easing: 'swing'
                });
            return false;
        });

        // SELECT 2 init

        if ($('html').hasClass('ie8')){
            if ($('.ct-js-select2').length > 0){
                return false
            }
        }

        if ($(".ct-js-select2").length > 0){

            $(".ct-selectSize").select2({
                allowClear: true,
                placeholder: "Select Size",
                width: 'resolve'
            });
            $(".ct-selectSize1").select2({
                allowClear: true,
                width: 'resolve'
            });
            $(".ct-selectColor").select2({
                allowClear: true,
                width: 'resolve'
            });
            $(".ct-selectQuantity").select2({
                allowClear: true,
                placeholder: "Quantity",
                width: 'resolve'
            });
            $('.ct-selectProductLimit').select2({
                allowClear: true,
                width: 'resolve'
            });
            $('.ct-selectSortingBy').select2({
                allowClear: true,
                width: 'resolve'
            });
        }


        /*
         Fixed footer init
         If you want fixed menu effect ('like parallax') just add "ct-footer--fixed" after that class on footer.
         */

        var $footerheight = $('footer').outerHeight(true) -1;
        if ($('html').hasClass('ie8')){
            $('footer.ct-footer').removeClass('.ct-footer--fixed');
        }
        else{
            if($devicewidth > 992) {
                var $footerFixed = $(".ct-footer--fixed");
                if ($footerFixed.length > 0) {
                    if ($("body.boxed").length > 0){
                        return false
                    }
                    $(window).scroll(function(){
                     if ($('body').outerHeight() != window.innerHeight + $(window).scrollTop() ){
                        $('body').css('padding-bottom', $footerheight + 'px');
                        if ($footerFixed.hasClass('ct-footer--fixed')) {
                            $footerFixed.addClass('js-ff');
                            $footerFixed.css('z-index', '-1');
                        }
                    }else {
                        $footerFixed.css('z-index', '100');
                    }
                });
            }
                return false
            }
        }


        if($('body.boxed').length > 0){
            $('#ct-js-wrapper').find('.navbar .container-fluid').css({
                maxWidth: '1200px'
            });
            $('.ct-js-owl').on('beforeInit', function(){
                $('.ct-mainCarousel .owl-item').css({
                    width: '1200px',
                    maxWidth:'1200px'
                });
            });
        }
        return false



    }); // documentReady[end]

    $(window).on('resize', function() {
        if ($(window).width() < 768) {
            snapper.enable();
        } else{
            snapper.disable();
        }
    });

    $(window).on('load', function(){
        $("#loading").fadeOut(500);

        if($devicewidth > 992){

            // Typing animations

            var $typingAnimation = $(".ct-js-typingAnimation");
            if ($typingAnimation.length > 0){
                $typingAnimation.addClass("ct-typingAnimation");
            }
            $typingAnimation.each(function () {
                var $this = $(this);
                if($this.attr('data-type')=="typingAnimation"){
                    var $animationSpeed = $this.attr("data-animation-speed");
                    $this.css({
                        '-webkit-animation': 'type ' +$animationSpeed+'s steps(60, end)',
                        'animation': 'type ' +$animationSpeed+'s steps(60, end)'
                    });
                }
            });

        }
        return false;

    });

    $(window).on('scroll', function(){
        var scroll = $(window).scrollTop();

        if (scroll > 850) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });

    //Sort random function
    function random(owlSelector){
        owlSelector.children().sort(function(){
            return Math.round(Math.random()) - 0.5;
        }).each(function(){
            $(this).appendTo(owlSelector);
        });
    }

})(jQuery);
