<?php


class GoogleAnalyticsAPI
{

    const DAILY_EVENTS    = 'ga/events/daily/(?P<eventCategory>[a-zA-Z0-9-]+)';
    const EVENT_METRICS   = 'ga/events/metrics/(?P<eventCategory>[a-zA-Z0-9-]+)';
    const PAGE_METRICS    = 'ga/pages/metrics';

    const EVENT_CATEGORIES = array(
        'valuation' => GAConstants::FREE_VALUATION_PREFIX,
        'rent'      => GAConstants::RENTALS_PREFIX,
        'interest'  => GAConstants::INTERESTS_PREFIX,
    );


    /**
     * This functions takes the data passed which has numeric indexes
     * and converts it into key values array. The names of the keys are defined
     * in the $labels array
     *
     * In addition is added to 'data' key.
     *
     *
     * @param $data array
     * @param $labels array
     * @return array[]
     */
    public function create_data_from_labels($data, $labels ){

        $final_data = array(
            'data' => array()
        );
        foreach( $data as $rowIndex => $row ){

            foreach( $row as $colIndex => $col ){

                $final_data['data'][$rowIndex][ $labels[ $colIndex ] ] = $col;

            }

        }

        return $final_data;

    }

    public function get_daily_events( $data ){

        $eventCategories = self::EVENT_CATEGORIES;

        $eventCategory = $data['eventCategory'];

        if( isset( $eventCategories[ $eventCategory ] ) ){

            $gaController = new GAController();
            $data = $gaController->get_total_events_by_category_per_day( $eventCategories[ $eventCategory ] );


            $final_data = array(
                'data' => array()
            );

            $rowIndex = 0;
            foreach( $data as $date => $steps_events ){

                $final_data['data'][$rowIndex]['date'] = $date;

                foreach( $steps_events as $colIndex => $events ){

                    $stepIndex = $colIndex + 1;
                    $final_data['data'][$rowIndex]['step_' . $stepIndex ] = $events;

                }

                $rowIndex++;

            }

            return new WP_REST_Response( $final_data, 200 );

        }
        else {

            return new WP_Error(
                'invalid_event_cat',
                'The event category name you passed is invalid. Available event categories are: ' . implode( ', ', array_keys( $eventCategories ) ),
                array( 'status' => 404 )
            );

        }

    }


    public function get_events_metrics( $data ){

        $eventCategories = self::EVENT_CATEGORIES;

        $eventCategory = $data['eventCategory'];

        if( isset( $eventCategories[ $eventCategory ] ) ){

            $gaController = new GAController();

            $final_data = $this->create_data_from_labels(
                $gaController->get_events_metrics_by_category_per_label( $eventCategories[ $eventCategory ] ),
                array(
                    'step',
                    'totalEvents',
                    'uniqueEvents',
                    'eventValue',
                    'avgEventValue',
                )
            );

            return new WP_REST_Response( $final_data, 200 );

        }
        else {

            return new WP_Error(
                'invalid_event_cat',
                'The event category name you passed is invalid. Available event categories are: ' . implode( ', ', array_keys( $eventCategories ) ),
                array( 'status' => 404 )
            );

        }

    }


    public function get_pages_metrics(){

        $gaController = new GAController();

        $final_data = $this->create_data_from_labels(
            $gaController->get_pages_metrics(),
            array(
                'pagePathLevel2',
                'pageViews',
                'uniquePageViews',
                'avgTimeOnPage',
                'bounceRate',
                'exitRate',
            )
        );

        return new WP_REST_Response( $final_data, 200 );

    }

}
