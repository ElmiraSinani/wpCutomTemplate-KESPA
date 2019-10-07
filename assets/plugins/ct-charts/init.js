(function ($) {
    "use strict";
    $(window).on('load', function () {
        /* ==================== */
        /* ==== PIE CHARTS ==== */
        $('.ct-js-pieChart').each(function () {
            var $this = $(this),
                $color = validatedata($(this).attr('data-ct-firstColor'), "#2b8be9"),
                $color2 = validatedata($(this).attr('data-ct-secondColor'), "#eeeeee"),
                $cutout = validatedata($(this).attr('data-ct-middleSpace'), 90),
                $stroke = validatedata($(this).attr('data-ct-showStroke'), false),
                $margin = validatedata($(this).attr('data-ct-margin'), false);
            $(this).parent().css('margin-left',$margin + 'px');
            $(this).parent().css('margin-right',$margin + 'px');
            var options = {
                responsive: true, percentageInnerCutout: $cutout, segmentShowStroke: $stroke, showTooltips: false
            }
            var doughnutData = [{
                value: parseInt($this.attr('data-ct-percentage')), color: $color, label: false
            }, {
                value: parseInt(100 - $this.attr('data-ct-percentage')), color: $color2
            }];

            if (($().appear) && ($("body").hasClass("cssAnimate"))) {
                $('.ct-js-pieChart').appear(function () {
                    var ctx = $this[0].getContext("2d");
                    window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, options);
                });
            } else {
                var ctx = $this[0].getContext("2d");
                window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, options);
            }
        })
    })
})(jQuery);