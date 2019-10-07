
(function ($) {
    "use strict";
    var weekDayArray = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        monthsArray = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        Calendar = {
            event1: {
                //correct date format
                // YYYY, MM, DD, HH, MM, SS, MS
                // example: 2015, 4, 27, 8, 54, 50),
                date: new Date(2015, 0, 13, 17),
                title: 'Black Swan',
                subtitle: 'at Dev Theatre',
                link: '#',
                linkTitle: 'Purchase Tickets'
            }
        };
    $(window).on('load', function () {
        if ($(".ct-js-datePicker").length > 0) {
            $(".ct-js-datePicker").each(function (){
                var $this = $(this),
                    datepickerContainer = $('#sandbox-container')
                    , j, result;

                for(j in Calendar){

                    var months = Calendar[j].date.getMonth(), // getting month
                        weekDay = Calendar[j].date.getDay(), // getting Day
                        dayOfMonth = Calendar[j].date.getDate(), // getting Day of Month [1-31]
                        hours = Calendar[j].date.getHours(), // getting Hours
                        minutes = Calendar[j].date.getMinutes(), // getting Minutes
                        title = Calendar[j].title,
                        subtitle = Calendar[j].subtitle,
                        link = Calendar[j].link,
                        linkTitle = Calendar[j].linkTitle;

                    if (minutes > 0 && minutes < 10){
                        var minutesFix = '0' + minutes;
                    }
                    else if (minutes == 0 || minutes == undefined){
                        minutesFix = '00';
                    }
                    else{
                        minutesFix =  minutes;
                    }
                    result = '<table class="table ct-datePicker">' +
                                '<thead>' +
                                    '<tr>' +
                                        '<th class="weekDay">' + weekDayArray[weekDay] + '</th>' +
                                        '<th class="month">' + dayOfMonth +  ' '  + monthsArray[months] + '</th>' +
                                    '</tr>' +
                                '</thead>' +
                                '<tbody>' +
                                    '<tr>' +
                                        '<td class="ct-fw-500">' + hours + ':' + minutesFix +'</td>' +
                                        '<td class="ct-fw-500">' + title +
                                            '<br>' + subtitle +
                                            '<br>' +
                                            '<a href="'+ link +'">' + linkTitle + '</a>' +
                                        '</td>' +
                                        '</tr>' +
                                    '</tr>' +
                                '</tbody>' +
                            '</table>';

                    $('.ct-js-datePicker').append(result);
                }

                $(datepickerContainer).datepicker({
                    todayHighlight: true,
                    toggleActive: false
                });
                $(datepickerContainer).datepicker().on('changeDate', function (i){
                    var date = i.date,
                        statusdate = new Date(date.getDay());
                        console.log(statusdate);
                });
            });
        }
    });
})(jQuery);

