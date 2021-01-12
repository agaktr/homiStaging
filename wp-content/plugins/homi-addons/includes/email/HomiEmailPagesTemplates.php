<?php


class HomiEmailPagesTemplates
{

    public function registerAdminPage(){

        add_menu_page(
            __( 'Email Templates', 'textdomain' ),
            __( 'Email Templates','textdomain' ),
            'manage_options',
            'homi-email-templates',
            array( $this,'display'),
            'dashicons-migrate'
        );

        add_submenu_page(
            'homi-email-templates',
            'Email Template Test',
            'Email Template Test',
            'manage_options',
            'email-template-test',
            array( $this, 'display_template')
        );

        add_submenu_page(
            'homi-email-templates',
            'Email Reminders',
            'Email Reminders',
            'manage_options',
            'email-reminders',
            array( $this, 'display_reminders')
        );

    }


    public function display_template(){

        $uploadRequestMatch = new UploadRequestMatch(22247);
        print("<pre>".print_r($uploadRequestMatch->filteredUsersToSendEmail,true)."</pre>");
//        print("<pre>".print_r($uploadRequestMatch->usersAlreadyEmailed,true)."</pre>");
//        print("<pre>".print_r($uploadRequestMatch->usersToSendEmail,true)."</pre>");

//        $emailMatches = new EmailMatchesController(21849);
//        $emailMatches->sendEmail();
//        $uploadRequestMatch = new UploadRequestMatch(22247);
//
//        $userToEmail = get_user_by('ID', 10 );
//        $emailTemplate  = new EmailMatchingTemplate();
//        $emailMessage   = $emailTemplate->get_template( $uploadRequestMatch, $userToEmail );
//        echo $emailMessage;





//            print("<pre>".print_r($images,true)."</pre>");

//        $uploadRequest = new UploadRequest( 20144 );
//        var_dump( $uploadRequest->xe_description );
//        var_dump( $uploadRequest->spitogatos_description_en );
//        var_dump( $uploadRequest->spitogatos_description_gr );


//        var_dump( $response );

//        foreach( $response['listingIDs'] as $listingID ){
//
//            var_dump( $listingID );
//            $r = $sgConverter->api->get_listing_info( $listingID['listingID'] );
//            print("<pre>".print_r($r,true)."</pre>");
//
//        }

//        $xeConverter    = new ConverterXE(20144 );
//        $xeConverter->convert_to_xe();
//        $data           = $xeConverter->listing_data();
//        print("<pre>".print_r($data,true)."</pre>");


//        $property_id = 19866;

//        $args = array(
//            'post_type'         => 'property',
//            'post_status'       => 'publish',
//            'posts_per_page'    => -1,
//            'tax_query' => array(
//               array(
//                   'taxonomy'  => 'property_type',
//                   'field'     => 'slug',
//                   'terms'     => array('raised-ground-floor'),
//                   'operator'  => 'IN'
//               )
//            ),
//        );
//
//        $query = new WP_Query( $args );
//
//        $counter = 0;
//
//        if( $query->have_posts() ){
//
//            while ( $query->have_posts() ) {
//                $query->the_post();
//                $counter++;
//                $link = get_edit_post_link( get_the_ID() );
//                echo "<br>$counter.<a href='$link'>" . get_the_title() . "</a>";
//                $updated = update_post_meta(get_the_ID(), 'fave_'.'floorf5f6afa90b7fa9', 'Raised ground floor');
//                echo "<br>Updated: $updated <br>";
//
//            }
//
//        }

    }


    public function display_reminders(){


        $reminderController = new EmailReminderController();
        $ids = $reminderController->get_requests_tomorrow( false );


        $datetime = new DateTime();
        $datetime->modify('+1 day');
        ?>

        <h1>
            Confirmed Requests for Tomorrow ( <?php echo $datetime->format('d/m/Y'); ?>)
        </h1>
        <?php
        $this->display_reminders_table( $ids );

        $reminderController = new EmailReminderController();
        $ids = $reminderController->get_requests_today( false );

        ?>

        <h1>
            Confirmed Requests for Today ( <?php echo date('d/m/Y'); ?>)
        </h1>

      <?php

        $this->display_reminders_table( $ids );

    }


    private function display_reminders_table( $ids ){

        ?>

        <table class="wp-list-table widefat fixed striped posts">
            <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Request Type
                </th>
                <th>
                    Status
                </th>
                <th>
                    Date
                </th>
                <th>
                    Time
                </th>
                <th style="width: 300px;">
                    Emails to send a reminder
                </th>
                <th>
                    Has sent Reminder
                </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach( $ids as $id ): ?>

                <?php $request = ( get_post_type( $id ) === Homi_Addons_Tour_Request::POST_TYPE_NAME ? new ViewingRequest( $id ) : new ValuationRequest( $id ) );  ?>

                <tr>
                    <td>
                        <a href="<?php echo get_edit_post_link( $id ); ?>" target="_blank">
                            <?php echo get_the_title( $id ); ?>
                        </a>

                    </td>
                    <td>
                        <?php echo get_post_type( $id ); ?>
                    </td>
                    <td>
                        <?php echo $request->status; ?>
                    </td>
                    <td>
                        <?php echo $request->date; ?>
                    </td>
                    <td>
                        <?php echo $request->time; ?>
                    </td>
                    <td>
                        <?php echo $request->landlord->email; ?>

                        <?php

                        if( $request instanceof ViewingRequest ){

                            echo ', '. $request->viewer->email;

                        }

                        ?>

                    </td>
                    <td>

                        <?php

                        $meta = get_post_meta( $request->ID, $request->meta_fields['reminder_sent_day'], true );
                        echo ( !empty( $meta ) ? $meta : 'not_sent');

                        ?>

                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>

        <?php

    }

}
