(function ($) {
    "use strict";

    $(document).ready(function () {

        // Progress Icons // -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

        $('.ct-js-progressIcons').each(function () {
            var $this = $(this),
                $total = $this.attr("data-total"),
                $icon = $this.attr("data-icon"),
                htmldata = "";

            $this.css("font-size", ($this.attr("data-font-size") + "px"));

            var i;
            for (i = 0; i < $total; i++) {
                htmldata += '<i class="fa ' + $icon + '"></i> ';
            }

            $this.html(htmldata);

            if (($().appear) && ($("body").hasClass("cssAnimate"))) {
                $('.ct-js-progressIcons').appear(function () {
                    var $this = $(this),
                        $active = $this.attr("data-active"),
                        $icons = $this.find('i:lt(' + $active + ')'),
                        $delay = parseInt(validatedata($this.attr("data-delay"), 20));

                    var delay = $delay;
                    for (i = 0; i < $icons.length; i++) {
                        setTimeout((function (i) {
                            return function () {
                                i.style.color = $this.attr("data-icon-color");
                            }
                        })($icons[i]), delay);
                        delay += $delay;
                    }
                }, {accY: -100});
            } else {
                $this.each(function () {
                    var $active = $this.attr("data-active");
                    var $icons = $this.find('i:lt(' + $active + ')');
                    $icons.css('color', $this.attr("data-icon-color"))
                });
            }
        })
    })
}(jQuery));