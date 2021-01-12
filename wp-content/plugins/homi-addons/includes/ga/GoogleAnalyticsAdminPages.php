<?php

class GoogleAnalyticsAdminPages
{

    public function registerAdminPage(){

        add_menu_page(
            __( 'GA - Homi', 'textdomain' ),
            __( 'GA - Homi','textdomain' ),
            'manage_options',
            'ga-homi',
            array( $this,'display'),
            'dashicons-googleplus',
            3
        );

        add_submenu_page(
            'ga-homi',
            'Valuation Events / Day',
            'Valuation Events / Day',
            'manage_options',
            'ga-valuation-abandoned-per-day',
            array( $this, 'valuation_abandoned_per_day')
        );

        add_submenu_page(
            'ga-homi',
            'Rent Events / Day',
            'Rent Events / Day',
            'manage_options',
            'ga-rent-abandoned-per-day',
            array( $this, 'rent_abandoned_per_day')
        );

        add_submenu_page(
            'ga-homi',
            'Interest Events / Day',
            'Interest Events / Day',
            'manage_options',
            'ga-interest-abandoned-per-day',
            array( $this, 'interest_abandoned_per_day')
        );

        add_submenu_page(
            'ga-homi',
            'Valuation Events - Total',
            'Valuation Events - Total',
            'manage_options',
            'ga-valuation-total',
            array( $this, 'valuation_total')
        );

        add_submenu_page(
            'ga-homi',
            'Rent Events - Total',
            'Rent Events - Total',
            'manage_options',
            'ga-rent-total',
            array( $this, 'rent_total')
        );

        add_submenu_page(
            'ga-homi',
            'Interest Events - Total',
            'Interest Events - Total',
            'manage_options',
            'ga-interest-total',
            array( $this, 'interest_total')
        );

        add_submenu_page(
            'ga-homi',
            'Pages Metrics',
            'IPages Metrics',
            'manage_options',
            'ga-pages-metrics',
            array( $this, 'page_metrics')
        );

    }


    public function display(){



        $gaController = new GAController();

        $data = $gaController->get_pages_metrics();

        print("<pre>".print_r($data,true)."</pre>");


    }



    public function valuation_abandoned_per_day(){

        $this->display_per_day_page(
            GAConstants::FREE_VALUATION_PREFIX,
            GAConstants::FREE_VALUATION_EVENT_LABELS,
            'Free Valuation Steps Abandoned each day until today'
        );

    }


    public function rent_abandoned_per_day(){

        $this->display_per_day_page(
            GAConstants::RENTALS_PREFIX,
            GAConstants::RENT_EVENT_LABELS,
            'Rent Steps Abandoned each day until today'
        );

    }



    public function interest_abandoned_per_day(){

        $this->display_per_day_page(
            GAConstants::INTERESTS_PREFIX,
            GAConstants::INTERESTS_EVENT_LABELS,
            'Interest Steps Abandoned each day until today'
        );

    }

    public function valuation_total(){

         $this->display_total_page(
             GAConstants::FREE_VALUATION_PREFIX,
             'Valuation Form Total Events Data'
         );
    }


    public function rent_total(){

         $this->display_total_page(
             GAConstants::RENTALS_PREFIX,
             'Rent Form Total Events Data'
         );
    }


    public function interest_total(){

         $this->display_total_page(
             GAConstants::INTERESTS_PREFIX,
             'Interest Form Total Events Data'
         );
    }


    public function page_metrics(){


        $gaController = new GAController();

        $data = $gaController->get_pages_metrics();

        ?>

        <div class="homi-ga-data">

            <h1>
                Page Metrics
            </h1>

            <table class="wp-list-table widefat fixed striped posts">
                <thead>
                <tr>
                    <th>
                        Page path level 2
                    </th>
                    <th>
                        Page Views
                    </th>
                    <th>
                        Unique Page Views
                    </th>
                    <th>
                        Avg. Time on Page
                    </th>
                    <th>
                        Bounce Rate
                    </th>
                    <th>
                        Exit Rate
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $data as $index => $total_data ): ?>

                    <tr>

                        <?php foreach( $total_data as $value ): ?>

                            <td>
                                <?php echo $value; ?>
                            </td>

                        <?php endforeach; ?>
                    </tr>

                <?php endforeach; ?>
                </tbody>
            </table>

        </div>

        <?php
    }




    private function display_total_page( $prefix, $title ){

        $gaController = new GAController();

        $data = $gaController->get_events_metrics_by_category_per_label( $prefix );

        ?>

        <div class="homi-ga-data">

            <h1>
                <?php echo $title; ?>
            </h1>
            <?php $this->display_total_table_data( $data ); ?>

        </div>

        <?php

    }


    private function display_total_table_data(  $data ){

        ?>

        <table class="wp-list-table widefat fixed striped posts">
            <thead>
            <tr>
                <th>
                   Event Label
                </th>
                <th>
                  Total Events
                </th>
                <th>
                   Unique Events
                </th>
                <th>
                   Event Value
                </th>
                <th>
                   Avg. Value
                </th>

            </tr>
            </thead>
            <tbody>
            <?php foreach( $data as $index => $total_data ): ?>

                <tr>

                    <?php foreach( $total_data as $value ): ?>

                        <td>
                            <?php echo $value; ?>
                        </td>

                    <?php endforeach; ?>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
        <?php

    }

    private function display_per_day_page( $prefix, $labels, $title ){

        $gaController = new GAController();

        $data = $gaController->get_total_events_by_category_per_day( $prefix );

        ?>

        <div class="homi-ga-data">

            <h1>
                <?php echo $title; ?>
            </h1>
            <?php $this->display_date_table_data( $prefix, $labels, $data ); ?>

        </div>

        <?php

    }

    private function display_date_table_data( $prefix, $event_labels, $data ){

        ?>

        <table class="wp-list-table widefat fixed striped posts">
            <thead>
            <tr>
                <th>
                    <strong class="date">
                        Date
                    </strong>
                </th>
                <?php for( $i=0; $i < count($event_labels); $i++ ): ?>

                    <th>
                        <?php echo str_replace( $prefix, '', $event_labels[$i] ); ?>
                    </th>

                <?php endfor; ?>
            </tr>
            </thead>
            <tbody>
            <?php foreach( $data as $date_index => $total_events_array ): ?>

                <tr>
                    <td>
                        <strong class="date">
                            <?php echo $date_index; ?>
                        </strong>
                    </td>
                    <?php foreach( $total_events_array as $total_events ): ?>

                        <td>
                            <?php echo ( intval( $total_events ) > 0 ? "<strong>$total_events</strong>" : $total_events ); ?>
                        </td>

                    <?php endforeach; ?>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>

        <?php

    }

}
