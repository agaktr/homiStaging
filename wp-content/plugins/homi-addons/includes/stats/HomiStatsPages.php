<?php


class HomiStatsPages
{

    public function registerAdminPage(){

        add_menu_page(
            __( 'Homi Statistics', 'textdomain' ),
            __( 'Homi Statistics','textdomain' ),
            'manage_options',
            'homi-stats',
            array( $this,'display'),
            'dashicons-chart-bar',
            3
        );

        add_submenu_page(
            'homi-stats',
            'Requests Overview',
            'Requests Overview',
            'manage_options',
            'homi-stats-requests-overview',
            array( $this, 'display_requests_overview')
        );

        add_submenu_page(
            'homi-stats',
            'Giannis Test',
            'Giannis Test',
            'manage_options',
            'homi-stats-test',
            array( $this, 'test')
        );


    }


    public function test(){

        $args = array(
            'post_type'     => 'property',
            'post_status'   => 'publish',
            'posts_per_page' => -1,
        );


        $query = new WP_Query( $args );
        if ( $query->have_posts() ){

            $availabilityController = new SellerAvailabilityController();

            while ( $query->have_posts() ) {

                $query->the_post();

                if (strpos( get_the_title(), 'RENTED') === false) {

                    $availabilityController->set_the_14th_day_available( get_the_ID() );
                }


            }


        }


    }

    public function display(){

        echo 'testtt';

    }

    public function display_requests_overview(){

        $statsController    = new RequestStatsController();
        $statsRent          = $statsController->get_rent_stats();
        $statsVal           = $statsController->get_free_val_stats();


        ?>

        <div class="stats-section">

            <h1>
                Free Valuations Requests
            </h1>

            <div class="stats-section--item">

                <div class="stats-section--item--box">

                    <h3>
                        Total
                    </h3>

                    <strong>
                        <?php echo $statsVal->total; ?>
                    </strong>

                </div>

                <div class="stats-section--item--box completed">

                    <h3>
                        Completed
                    </h3>

                    <strong>
                        <?php echo $statsVal->completed; ?>
                        (<?php echo round( $statsVal->completed/$statsVal->total * 100, 2 ); ?>%)
                    </strong>

                </div>

                <div class="stats-section--item--box abandoned">

                    <h3>
                        Abandoned
                    </h3>

                    <strong>
                        <?php echo $statsVal->abandoned; ?>
                        (<?php echo round( $statsVal->abandoned/$statsVal->total * 100, 2 ); ?>%)
                    </strong>

                </div>

            </div>

        </div>
        <div class="stats-section">

            <h1>
                Rent Requests
            </h1>

            <div class="stats-section--item">

                <div class="stats-section--item--box">

                    <h3>
                        Total
                    </h3>

                    <strong>
                        <?php echo $statsRent->total; ?>
                    </strong>

                </div>

                <div class="stats-section--item--box completed">

                    <h3>
                        Completed
                    </h3>

                    <strong>
                        <?php echo $statsRent->completed; ?>
                        (<?php echo round( $statsRent->completed/$statsRent->total * 100, 2 ); ?>%)
                    </strong>

                </div>

                <div class="stats-section--item--box abandoned">

                    <h3>
                        Abandoned
                    </h3>

                    <strong>
                        <?php echo $statsRent->abandoned; ?>
                        (<?php echo round( $statsRent->abandoned/$statsRent->total * 100, 2 ); ?>%)
                    </strong>

                </div>

            </div>

        </div>

        <?php

    }

}
