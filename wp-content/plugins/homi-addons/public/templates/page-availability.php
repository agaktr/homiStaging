<?php

$availabilityController = new SellerAvailabilityController();
$post_id                = get_query_var('calendar');

if( ! $availabilityController->user_can_set_availability( $post_id ) ){

    wp_redirect( home_url('login') . '?redirect_to=' . urlencode(site_url() . $_SERVER['REQUEST_URI'] ) );
    exit;

}

get_header();


if( is_user_logged_in() ):

    $current_user       = wp_get_current_user();
    $seller_id          = $current_user->ID;
?>

    <section id="sellerAvailability" class="row homi-row">

        <div class="container">

            <div class="user-properties-wrapper">

                <div class="col s12">

                    <h1 class="availability-title">
                        Availability

                        <?php if ( !empty( $post_id ) ): ?>
                            <a href="<?php echo site_url('property-availability'); ?>" class="view-all-properties">
                                View all the properties
                            </a>
                        <?php endif; ?>

                    </h1>

                    <?php if ( empty( $post_id ) ): ?>

                        <p class="how-to">
                            Click on a property from the ones below to set its availability for a scheduled viewing.
                        </p>

                    <?php endif; ?>

                </div>

                <?php if( empty( $post_id ) ): ?>

                <div class="user-properties flex">
                    <?php

                         $user_meta = get_userdata( $seller_id );
                        $user_roles = $user_meta->roles;

                        $args = array(
                            'post_type'     => 'property',
                            'post_status'   => 'publish',
                            'posts_per_page' => -1,
                        );

                        if( in_array( Homi_Addons::SELLER_ROLE, $user_roles ) ){

                            $args['author'] = $seller_id;

                        }

                        $query = new WP_Query( $args );

                        ?>

                        <?php if ( $query->have_posts() ) : ?>


                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                                <div class="col l4 m6 s12">

                                    <div class="property-availability-item card">

                                        <a href="<?php echo site_url('property-availability/calendar/' . get_the_ID() ); ?>">

                                            <div class="property-availability-image">
                                                <?php echo get_the_post_thumbnail( get_the_ID(), 'medium_large'); ?>
                                            </div>

                                            <div class="property-info">

                                                <h2><?php the_title(); ?></h2>

                                                <?php if( in_array( 'administrator', $user_roles ) ): ?>

                                                    <div class="property-seller">

                                                        Landlord:

                                                        <span><?php the_author(); ?></span>

                                                    </div>

                                                <?php endif; ?>

                                                <?php if( $availabilityController->has_availability_set( get_the_ID() ) ): ?>

                                                    <div class="availability-status availability-set">

                                                        <i class="fa fa-check"></i>
                                                        Available

                                                    </div>

                                                <?php else: ?>

                                                    <div class="availability-status availability-not-set">

                                                        <i class="fa fa-times"></i>
                                                        Unavailable

                                                    </div>

                                                <?php endif; ?>

                                            </div>

                                        </a>

                                    </div>

                                </div>

                            <?php endwhile; ?>


                            <?php wp_reset_postdata(); ?>

                        <?php else : ?>

                            <p>Sorry, there are no properties to set availability for.</p>

                        <?php endif; ?>


                </div>

                <?php endif; ?>

            </div>

            <?php if ( !empty( $post_id ) ): ?>


                <div class="availability-content margin-top-30">

                    <form method="post">

                        <div class="col l7 s12 calendar-select-col">

                            <input type="hidden" name="property_id" value="<?php echo $post_id; ?>">

                            <div class="property-availability-item card">

                                <div class="property-image">
                                    <?php echo get_the_post_thumbnail( $post_id, 'medium_large'); ?>

                                    <a href="<?php echo get_the_permalink( $post_id ); ?>" class="button-primary">
                                        View Property
                                    </a>

                                </div>

                                <div class="property-info">

                                    <h2><?php echo get_the_title( $post_id ); ?></h2>

                                    <?php if( $availabilityController->has_availability_set( $post_id ) ): ?>

                                        <div class="availability-status availability-set">

                                            <i class="fa fa-check"></i>
                                            Available

                                        </div>

                                    <?php else: ?>

                                        <div class="availability-status availability-not-set">

                                            <i class="fa fa-times"></i>
                                            Unavailable

                                        </div>

                                    <?php endif; ?>

                                </div>

                            </div>

                            <div class="card availability-instructions">

                                Set your availability so users can request to view your property

                            </div>

                            <div class="card">

                                <div class="property-availability">

                                    <div id="pickDate" class="calendar-content">

                                        <div class="col s12">

                                            <h3>
                                                Select a date
                                            </h3>

                                        </div>

                                        <div class="col s12">
                                            <div class="calender"></div>
                                        </div>

                                        <div id="pickAvailability" class="col s12">

                                            <h3>
                                                Click when you are available
                                            </h3>

                                        </div>

                                        <div class="col s12">

                                            <div class="time-wrapper">

                                                <div class="user-selected-date center">

                                                    <span class="selected-date-wrapper">

                                                         <span class="selected-date-day">
                                                            <?php echo date('l', time() + 86400); ?>
                                                        </span>

                                                        <span class="selected-date">
                                                            <?php echo date('d-m-Y', time() + 86400); ?>
                                                        </span>

                                                    </span>

                                                </div>

                                                <div class="buttons-wrapper">

                                                    <button id="select_all" class="button button-primary">
                                                        All day
                                                    </button>

                                                    <button id="unselect_all" class="button button-primary">
                                                        Not available
                                                    </button>

                                                </div>

                                                <div class="timeslots__inner">

                                                    <?php $availabilityController->display_timeslots( $post_id); ?>

                                                </div>

                                            </div>

                                        </div>


                                        <div class="col s12 margin-top-30">

                                            <button id="save_availability" type="submit" class="button button-primary" name="save_availability">
                                                Publish Availability
                                            </button>

                                        </div>

                                    </div>

                                </div>

                                <div class="clearfix"></div>

                            </div>


                        </div>

                        <div class="col l5 s12 calendar-overview-col hide-on-down">

                            <?php  $post_id = intval( $post_id ); ?>

                            <div class="db-availability">

                                <div class="card">

                                    <h3>
                                        Property Availability
                                    </h3>

                                    <p class="how-to">
                                        An overview of the dates and times you are available to welcome interested buyers to view your property.
                                    </p>

                                    <div class="months-wrapper">

                                        <?php $availabilityController->display_available_date_times( $post_id ); ?>

                                    </div>

                                    <?php if( $availabilityController->has_availability_set( $post_id ) ): ?>

                                        <div class="legend availability-legend col s12">

                                            <div class="legend-item unavailable">
                                                Available Times
                                            </div>

                                            <div class="legend-item available">
                                                Booked Times
                                            </div>

                                        </div>

                                        <div class="hide">
                                            <button id="delete_availability" type="submit" class="button button-primary" name="delete_availability">
                                                Reset Availability
                                            </button>
                                        </div>

                                    <?php endif; ?>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            <?php endif; ?>

        </div>

    <?php if ( !empty( $post_id ) ): ?>

    <div class="mobile-actions flex flex-center flex-dir-row flex-just-center center fixed bottom-0 full-width left-0 z-index-999">

            <a href="#pickDate">
                <i class="fa fa-calendar"></i>
                <div>Select a Date</div>
            </a>

            <a href="#pickAvailability">
                <i class="fa fa-clock"></i>
                <div>Select Availability</div>
            </a>

        </div>

    <?php endif; ?>

    </section>

<?php

endif;

get_footer();
