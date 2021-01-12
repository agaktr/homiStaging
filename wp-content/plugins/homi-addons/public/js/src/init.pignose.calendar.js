(function ($) {
    'use strict';

    $(document).ready(function(){

        var $calendar = $('.calender');

        //Check for monthly availability item
        //If it doesn't exist create a new one
        function month_item_check($el) {

            var $selected_item_date 	= $el.closest('.timeslots__slots').attr('data-date'),
                $date_data 				= $selected_item_date.split("-"),
                $year_clicked 			= $date_data[0],
                $month_clicked 			= $date_data[1],
                $monthly_date 			= $year_clicked + '-' + $month_clicked,
                $months_wrapper 		= $('.db-availability .months-wrapper');

            if ( $('.monthly-availability[data-date="' + $monthly_date + '"]').length === 0 ) {

                var $month_name = monthNames[parseInt($month_clicked)] + ' ' + $year_clicked;
                $months_wrapper.append('<div class="monthly-availability" data-date="' + $monthly_date + '"><div class="month-date">' + $month_name + '</div><div class="days-wrapper"></div></div>');

                //Sort
                $months_wrapper.find('.monthly-availability').sort( function (a, b) {
                    return new Date($(a).attr('data-date')) > new Date($(b).attr('data-date'));
                }).appendTo( $months_wrapper );

            }

        }

        //Check for day item
        //If it doesn't exist create a new one
        function day_item_check( $el ) {

            var $selected_item_date = $el.closest('.timeslots__slots').attr('data-date'),
                $date_data 			= $selected_item_date.split("-"),
                $year_clicked 		= $date_data[0],
                $month_clicked 		= $date_data[1],
                $day_clicked 		= $date_data[2];

            if ($('.day-item[data-date="' + $selected_item_date + '"]').length === 0) {

                var $monthly_availability 	= $('.monthly-availability[data-date="' + $year_clicked + '-' + $month_clicked + '"]');
                var $days_wrapper 			= $monthly_availability.find('.days-wrapper');

                $days_wrapper.append('<div class="day-item" data-date="' + $selected_item_date + '"><div class="day-name">' + $day_clicked + '</div><div class="day-times"></div></div>');

                //Sort
                $days_wrapper.find('.day-item').sort(function (a, b) {
                    return new Date($(a).attr('data-date')) > new Date($(b).attr('data-date'));
                }).appendTo( $days_wrapper );

            }

        }

        if( $calendar.length > 0 ) {

            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];


            //https://www.jqueryscript.net/time-clock/Beautiful-Multifunctional-Calendar-Plugin-For-jQuery-PIGNOSE-Calender.html
            $calendar.pignoseCalendar({
                week:1,
                date:moment().add(1,'days'),
                disabledRanges: [
                    ['1999-01-01', moment()],
                    [moment().add(15,'days'), moment().add(365,'days')]
                ],
                select: function (date, obj) {

                    var d = new Date(date[0]);
                    var dayName = days[d.getDay()];
                    $('.selected-date').text((date[0] === null ? 'null' : date[0].format('DD-MM-YYYY')));
                    $('.selected-date-day').text((date[0] === null ? 'null' : dayName ));


                    if ($('#' + date[0].format('YYYY-MM-DD') + '-timeslots').length > 0) {

                        $('.timeslots__slots').addClass('hide');
                        $('#' + date[0].format('YYYY-MM-DD') + '-timeslots').removeClass('hide');

                    } else {

                        var $clone = $(".timeslots__slots:not(.hide)").clone();

                        $clone.attr('id', date[0].format('YYYY-MM-DD') + '-timeslots');
                        $clone.attr('data-date', date[0].format('YYYY-MM-DD'));
                        $clone.appendTo(".timeslots__inner");

                        $('.timeslots__slots').addClass('hide');
                        $clone.removeClass('hide');
                        $clone.find('input').removeAttr('checked');
                        $clone.find('.selected').removeClass('selected');

                        $clone.find('input').attr('name', date[0].format('YYYY-MM-DD') + '_times[]');

                    }

                    if( $(window).width() < 660 ){

                        $([document.documentElement, document.body]).animate({
                            scrollTop: $('#' + date[0].format('YYYY-MM-DD') + '-timeslots').offset().top - 180
                        }, 200);

                    }

                }
            });

            var monthNames = [
                '',
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December'
            ];

            var $body = $('body');

            $body.on('click, change', '.timeslots__slot', function () {

                console.log('time selected');

                var checked = $(this).find('input').is(':checked');
                var $selected_item_date = $(this).closest('.timeslots__slots').attr('data-date');
                var $time_clicked = $(this).find('span').text();
                var $date_data = $selected_item_date.split("-");
                var $year_clicked = $date_data[0];
                var $month_clicked = $date_data[1];
                var $monthly_date = $year_clicked + '-' + $month_clicked;

                month_item_check($(this));
                day_item_check($(this));

                var $day_wrapper = $('.day-item[data-date="' + $selected_item_date + '"] .day-times');

                if (checked) {

                    $(this).addClass('selected');

                    if ($day_wrapper.find('[data-item="' + $time_clicked + '"]').length === 0) {

                        var $item_to_add = '<span class="timeslots__slot new-slot" data-item="' + $time_clicked + '">' + $time_clicked + '</span>';
                        $day_wrapper.append($item_to_add);

                    }

                    //Sort
                    $day_wrapper.find('.timeslots__slot').sort(function (a, b) {
                        return +parseInt(a.dataset.item) - +parseInt(b.dataset.item);
                    }).appendTo($day_wrapper);

                }
                else {

                    $(this).removeClass('selected');
                    $day_wrapper.find('[data-item="' + $time_clicked + '"]').remove();

                    //Remove day item if empty
                    if ( $day_wrapper.find('.timeslots__slot').length === 0 ) {

                        $('.days-wrapper .day-item[data-date="' + $selected_item_date + '"]').remove();

                    }

                    //Remove Month item if empty
                    if ( $('.monthly-availability[data-date="' + $monthly_date + '"] .days-wrapper').find('.day-item').length === 0 ) {

                        $('.monthly-availability[data-date="' + $monthly_date + '"]').remove();

                    }

                }

            });


            $body.on('click', '#select_all', function (e) {

                e.preventDefault();

                var $active_timeslots 	= $(this).closest('.time-wrapper').find('.timeslots__slots:not(.hide)'),
                    $labels 			= $active_timeslots.find('label');

                $('.day-item[data-date="' + $active_timeslots.attr('data-date') + '"] .day-times').empty();
                $active_timeslots.find('input:checkbox:not(:checked)').attr('checked', 'checked');
                $labels.addClass('selected');
                $labels.trigger('change');

            });


            $body.on('click', '#unselect_all', function (e) {

                e.preventDefault();

                var $active_timeslots 	= $(this).closest('.time-wrapper').find('.timeslots__slots:not(.hide)'),
                    $labels 			= $active_timeslots.find('label');

                $('.day-item[data-date="' + $active_timeslots.attr('data-date') + '"] .day-times').empty();
                $active_timeslots.find('input:checkbox').prop('checked', false);
                $labels.removeClass('selected');
                $labels.trigger('change');

            });


            $body.on('click', '.day-name', function () {

                var $clicked_date = $(this).closest('.day-item').attr('data-date');

                $('.pignose-calender-unit[data-date="' + $clicked_date + '"]').trigger('click');

            });

        }


    });


}(jQuery));
