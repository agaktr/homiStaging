<?php
get_header();

$propertiesController = new UserPropertiesController();
$propertiesController->accessController();
?>

<section id="myProperties" class="row no-margin-bottom padding-top-50">

    <div class="container">

        <div class="col s12">

            <h1>
                My Properties
            </h1>

        </div>

        <div class="user-properties flex">

            <?php foreach ( $propertiesController->userProperties as $property ): ?>

                <div class="col l4 m6 s12">

                    <div class="property-item card no-padding">

                        <div class="property-availability-image">

                            <?php echo get_the_post_thumbnail( $property, 'medium_large' ); ?>

                        </div>

                        <div class="property-info">

                            <h2 class="font-size-16">
                                <?php echo get_the_title( $property ); ?>
                            </h2>

                            <a href="<?php echo get_the_permalink( $property ); ?>">
                                View Property
                            </a>

                            <a href="<?php echo home_url( 'property-availability/calendar/'. $property ); ?>">
                                Edit Availability
                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</section>

<?php

get_footer();
