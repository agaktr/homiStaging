<?php

/**
 * The class responsible for creating the queries on Google Analytics
 * to fetch any data needed. You can use the Query Explorer from the below link
 * to create queries and pass the query args to the data get function
 *
 * @see https://ga-dev-tools.appspot.com/query-explorer/
 *
 */
class GAController{

    private $analytics;
    private $today;


    /**
     * Initialize the Google Client that will be used for
     * the Google Service Analytics object, which is used to get
     * any data we want from Google Analytics.
     *
     * To authorize the client an authorization/credentials file is need
     * which is declared in the GAConstants Class
     *
     */
    public function __construct(){

        $this->today  = date('Y-m-d');
        $client       = new Google_Client();

        try {

            $client->setAuthConfig( dirname( __FILE__ ) . '/' . GAConstants::CREDENTIALS_FILE );
            $client->setScopes( GAConstants::READ_SCOPE );
            $this->analytics = new Google_Service_Analytics( $client );

        }
        catch (Google_Exception $e) {

            print("<pre>".print_r($e,true)."</pre>");

        }

    }



    /**
     * Creates an array with dates from the date range
     * The array has each day of the dates as key and as a value
     * an array with empty pre filled zeros with a size/count of the $total_elements
     *
     * This array is used in the events per day functions to replace the zeros of each step in each
     * day with the total events occurred on each step each day
     *
     * @param $start
     * @param $end
     * @param $total_elements
     * @param string $format
     * @return array
     * @throws Exception
     */
    public function getDatesFromRange( $start, $end, $total_elements, $format = 'd-m-Y' ) {

        // Declare an empty array
        $array = array();

        // Variable that store the date interval
        // of period 1 day
        $interval = new DateInterval('P1D');

        $realEnd = new DateTime( $end );
        $realEnd->add( $interval );

        $period = new DatePeriod( new DateTime( $start ), $interval, $realEnd );

        // Loop to store date into array
        foreach ($period as $date) {

            $array[ $date->format( $format ) ] = array();

            for( $i=0; $i < $total_elements; $i++ ){

                $array[ $date->format( $format ) ][ $i ] = 0;

            }

        }

        // Return the array of dates with reverse order
        return array_reverse( $array );

    }



    /**
     * Returns an array with dates from the first time we created events on HOMI website
     * until today's date. The first date we created events is define in the GAConstants Class.
     *
     * The functions takes as an argument the Event Category Name which is practically the type of Form.
     *
     * @param $event_category_name
     * @return array
     * @throws Exception
     */
    public function get_total_events_by_category_per_day( $event_category_name ){

        $stepsLabels = $dateArray = array();
        $first_date  = GAConstants::FIRST_DATE_EVENTS;

        //Get the Event Category we are searching for
        //Event Category on GA is actually the type of Form
        switch( $event_category_name ){

            case GAConstants::FREE_VALUATION_PREFIX:

                $stepsLabels = GAConstants::FREE_VALUATION_EVENT_LABELS;
                break;

            case GAConstants::RENTALS_PREFIX:

                $stepsLabels = GAConstants::RENT_EVENT_LABELS;
                break;

            case GAConstants::INTERESTS_PREFIX:

                $first_date  = GAConstants::FIRST_DATE_INTERESTS_EVENTS;
                $stepsLabels = GAConstants::INTERESTS_EVENT_LABELS;
                break;

        }

        //Run the query to get data from GA
        $data = $this->analytics->data_ga->get(
            GAConstants::VIEW_ID,
            $first_date,
            $this->today,
            "ga:totalEvents",
            array(
                'dimensions'    => 'ga:eventLabel,ga:Date',
                'sort'          => '-ga:Date',
                'filters'       => "ga:eventLabel=@$event_category_name"
            )
        );

        if( !empty( $stepsLabels ) ){

            //Get a pre filled with zeros date array
            $dateArray = $this->getDatesFromRange( $first_date, $this->today, count( $stepsLabels ) );

            // Loop through the GA data and for every date fill in the according step
            // with the total number of events occurred that date on each step
            // We get the step index by running array_search into $stepsLabels
            foreach ( $data->getRows() as $row) {

                $dateArray[ date('d-m-Y', strtotime( $row[1] ) ) ][ array_search( $row[0], $stepsLabels ) ] = intval( $row[2] );

            }

        }

        return $dateArray;

    }



    /**
     * This function makes a query request on GA to get data
     * for event metrics for the events labels that are inside the Event Category ( $event_category_name )
     *
     * The Event metrics we are fetching are:
     *  - totalEvents
     *  - uniqueEvents
     *  - eventValue
     *  - avgEventValue
     *
     * @param $event_category_name
     * @return array|bool
     */
    public function get_events_metrics_by_category_per_label( $event_category_name ){

        $data = $this->analytics->data_ga->get(
            GAConstants::VIEW_ID,
            GAConstants::FIRST_DATE_EVENTS,
            $this->today,
            "ga:totalEvents,ga:uniqueEvents,ga:eventValue,ga:avgEventValue",
            array(
                'dimensions'    => 'ga:eventLabel',
                'sort'          => '-ga:totalEvents',
                'filters'       => "ga:eventLabel=@$event_category_name"
            )
        );

        $gaData = $data->getRows();

        foreach( $gaData as $index => $row ){

            foreach ( $row as $cIndex => $col ){

                if( is_numeric( $col ) ){

                    $gaData[ $index ][ $cIndex ] = intval( $col );

                }

            }

        }

        return $gaData;

    }



    /**
     * This function makes a query request on GA to get data
     * for page metrics for the pages defined on GAConstants::PAGES_METRICS
     *
     * The Page metrics we are fetching are:
     *  - pageViews
     *  - uniquePageViews
     *  - avgTimeOnPage
     *  - bounceRate
     *  - exitRate
     *
     * @return array|bool
     */
    public function get_pages_metrics(){

        $data = $this->analytics->data_ga->get(
            GAConstants::VIEW_ID,
            GAConstants::FIRST_DATE_EVENTS,
            $this->today,
            "ga:pageViews,ga:uniquePageViews,ga:avgTimeOnPage,ga:bounceRate,ga:exitRate",
            array(
                'dimensions'    => 'ga:pagePathLevel2',
                'sort'          => '-ga:pageViews',
                'filters'       => "ga:pagePathLevel2==" . implode(',ga:pagePathLevel2==',GAConstants::PAGES_METRICS )
            )
        );

        $gaData = $data->getRows();

        foreach( $gaData as $index => $row ){

            foreach ( $row as $cIndex => $col ){

                if( is_numeric( $col ) ){

                    $gaData[ $index ][ $cIndex ] = ( $this->isFloat( floatval( $col ) ) ? round( floatval( $col ), 2 ) : intval( $col ) );

                }

            }

        }

        return $gaData;

    }


    private function isFloat( $n) {
        return $n === +$n && $n !== ($n|0);
    }

}
