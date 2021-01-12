<?php

class Homi_Addons_Rent_Request{

    const POST_TYPE_NAME = 'rent_request';

    const META_FIELDS_SLUG = [
        'post_code'                 => self::POST_TYPE_NAME . '_post_code',
        'suburb'                    => self::POST_TYPE_NAME . '_suburb',
        'street_name'               => self::POST_TYPE_NAME . '_street_name',
        'street_number'             => self::POST_TYPE_NAME . '_street_number',
        'long'                      => self::POST_TYPE_NAME . '_long',
        'lat'                       => self::POST_TYPE_NAME . '_lat',
        'map'                       => self::POST_TYPE_NAME . '_map',
        'valuation_day'             => self::POST_TYPE_NAME . '_valuation_day',
        'valuation_time'            => self::POST_TYPE_NAME . '_valuation_time',
        'requester_first_name'      => self::POST_TYPE_NAME . '_requester_first_name',
        'requester_last_name'       => self::POST_TYPE_NAME . '_requester_last_name',
        'requester_email'           => self::POST_TYPE_NAME . '_requester_email',
        'requester_phone'           => self::POST_TYPE_NAME . '_requester_phone',
        'price'                     => self::POST_TYPE_NAME . '_price',
        'package'                   => self::POST_TYPE_NAME . '_package',
        'request_status'            => self::POST_TYPE_NAME . '_request_status',
        'admin_mail_sent'           => self::POST_TYPE_NAME . '_admin_mail_sent',
        'requester_mail_sent'       => self::POST_TYPE_NAME . '_requester_mail_sent',
        'confirmed_mail_sent'       => self::POST_TYPE_NAME . '_confirmed_mail_sent',
        'ac_deal_id'                => self::POST_TYPE_NAME . '_ac_deal_id',
        'ac_deal_message'           => self::POST_TYPE_NAME . '_ac_ac_deal_message',
        'ac_log'                    => self::POST_TYPE_NAME . '_ac_log',
        'pdf'                       => self::POST_TYPE_NAME . '_pdf',
        'valuation_date'            => self::POST_TYPE_NAME . '_valuation_date',
        'reminder_sent_day'         => self::POST_TYPE_NAME . '_reminder_sent_day',
        'reminder_sent_morning'     => self::POST_TYPE_NAME . '_reminder_sent_morning',
    ];

    const AJAX_INSERT_REQUEST = 'ajax_insert_rent_request';
    const AJAX_UPDATE_REQUEST = 'ajax_update_rent_request';

    public function register_post_type() {

        $labels = array(
            'name'               => __( 'Rent Requests', Homi_Addons::PLUGIN_NAME ),
            'singular_name'      => __( 'Rent Request', Homi_Addons::PLUGIN_NAME ),
            'menu_name'          => _x( 'Rent Requests', 'admin menu', Homi_Addons::PLUGIN_NAME ),
            'name_admin_bar'     => _x( 'Rent Request', 'add new on admin bar', Homi_Addons::PLUGIN_NAME ),
            'add_new'            => _x( 'Add New Request', Homi_Addons::PLUGIN_NAME ),
            'add_new_item'       => __( 'Add New Request', Homi_Addons::PLUGIN_NAME ),
            'new_item'           => __( 'New Rent Request', Homi_Addons::PLUGIN_NAME ),
            'edit_item'          => __( 'Edit Rent Request', Homi_Addons::PLUGIN_NAME ),
            'view_item'          => __( 'View Rent Request', Homi_Addons::PLUGIN_NAME ),
            'all_items'          => __( 'All Rent Requests', Homi_Addons::PLUGIN_NAME ),
            'search_items'       => __( 'Search Rent Requests', Homi_Addons::PLUGIN_NAME ),
            'parent_item_colon'  => __( 'Parent Rent Requests:', Homi_Addons::PLUGIN_NAME ),
            'not_found'          => __( 'No Rent Requests found.', Homi_Addons::PLUGIN_NAME ),
            'not_found_in_trash' => __( 'No Rent Requests found in Trash.', Homi_Addons::PLUGIN_NAME )
        );

        $args = array(
            'label'                 => __( 'Rent Requests', Homi_Addons::PLUGIN_NAME ),
            'labels'                => $labels,
            'description'           => '',
            'public'                => false,
            'publicly_queryable'    => false,
            'show_ui'               => true,
            'delete_with_user'      => false,
            'show_in_rest'          => true,
            'rest_base'             => '',
            'rest_controller_class' => 'WP_REST_Posts_Controller',
            'has_archive'           => true,
            'show_in_menu'          => 'booking-requests',
            'show_in_nav_menus'     => true,
            'exclude_from_search'   => true,
            'capability_type'       => 'post',
            'map_meta_cap'          => true,
            'hierarchical'          => false,
            'query_var'             => true,
            'supports'              => array( 'title', 'editor', 'author'),
        );

        register_post_type( self::POST_TYPE_NAME, $args );

    }

    /**
     * @param $meta_boxes
     *
     * @return array
     */
    public function add_meta_boxes( $meta_boxes ) {

        $meta_boxes[] = array(
            'id'         => self::POST_TYPE_NAME . '_information',
            'title'      => esc_html__( 'Rent Request Information', Homi_Addons::PLUGIN_NAME ),
            'post_types' => array( self::POST_TYPE_NAME ),
            'context'    => 'normal',
            'priority'   => 'default',
            'autosave'   => 'false',
            'fields'     => array(
                array(
                    'id'   => self::META_FIELDS_SLUG['post_code'],
                    'name' => esc_html__( 'Post Code', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'number',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['suburb'],
                    'name' => esc_html__( 'Suburb', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['street_name'],
                    'name' => esc_html__( 'Street Name', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['street_number'],
                    'name' => esc_html__( 'Street Number', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'number',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['long'],
                    'name' => esc_html__( 'Google Maps Longitude', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['lat'],
                    'name' => esc_html__( 'Google Maps Latitude', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['map'],
                    'name' => esc_html__( 'Google Maps Coordinates', Homi_Addons::PLUGIN_NAME ),
                    'type'            => 'select',
                    'options'         => array(
                        '0'        => 'Correct location on Map',
                        '1'        => 'Invalid location on Map',
                    ),
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['package'],
                    'name' => esc_html__( 'Selected Package', Homi_Addons::PLUGIN_NAME ),
                    'type'            => 'select',
                    'options'         => array(
                        'none'              => 'None',
                        'premium'           => 'Premium',
                        'basic'             => 'Basic',
                        'not_sure'          => 'I don\' know',
                    ),
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['requester_first_name'],
                    'name' => esc_html__( 'Requester First Name', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['requester_last_name'],
                    'name' => esc_html__( 'Requester Last Name', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['requester_email'],
                    'name' => esc_html__( 'Requester Email', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['requester_phone'],
                    'name' => esc_html__( 'Requester Phone', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['valuation_day'],
                    'name' => esc_html__( 'Date of Appointment', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'date',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['valuation_time'],
                    'name' => esc_html__( 'Time of Appointment', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'select',
                    'options'  => array(
                        '0' => '09:00',
                        '1' => '11:00',
                        '2' => '13:00',
                        '3' => '15:00',
                        '4' => '17:00',
                        '5' => '19:00',
                        '6' => '21:00',
                    ),
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['price'],
                    'name' => esc_html__( 'Price after valuation', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['admin_mail_sent'],
                    'name' => esc_html__( 'Sent email to admin', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['requester_mail_sent'],
                    'name' => esc_html__( 'Sent email to Requester', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                    'desc' => 'This field is related to the pending status of the request. Meaning that it stores the info for whether an email has been sent to the request when the request is being created and it is on pending state.',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['confirmed_mail_sent'],
                    'name' => esc_html__( 'Confirmation email sent to Requester', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                    'desc' => 'This field is related to the confirmed status of the request. Meaning that it stores the info for whether an email has been sent to the requester when the request is being updated and it is on confirmed state.',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['ac_deal_id'],
                    'name' => esc_html__( 'Active Campaign Deal ID', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'number',
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['ac_deal_message'],
                    'name' => esc_html__( 'Active Campaign Deal Message', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'text',
                ),
            ),
        );


        $meta_boxes[] = array(
            'id'         => self::POST_TYPE_NAME . '_ac_log',
            'title'      => esc_html__( 'Active Campaign API Log', Homi_Addons::PLUGIN_NAME ),
            'post_types' => array( self::POST_TYPE_NAME ),
            'context'    => 'normal',
            'priority'   => 'default',
            'autosave'   => 'false',
            'fields'     => array(
                array(
                    'id'   => self::META_FIELDS_SLUG['ac_log'],
                    'type'    => 'fieldset_text',
                    'class'     => 'inline-fieldset',
                    'options' => array(
                        'date'      => 'Date',
                        'time'      => 'Time',
                        'action'    => 'Action',
                        'status'    => 'Status',
                        'response'  => 'Response',
                    ),
                    'clone'     => true,
                    'multiple'  => true,
                ),
            )
        );


        $meta_boxes[] = array(
            'id'         => self::POST_TYPE_NAME . '_status',
            'title'      => esc_html__( 'Rent Request Status', Homi_Addons::PLUGIN_NAME ),
            'post_types' => array( self::POST_TYPE_NAME ),
            'context'    => 'side',
            'priority'   => 'default',
            'autosave'   => 'false',
            'fields'     => array(
                array(
                    'id'   => self::META_FIELDS_SLUG['request_status'],
                    'name' => esc_html__( 'Request Status', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'select',
                    'options'  => array(
                        'pending'           => 'Pending',
                        'confirmed'         => 'Confirmed',
                    ),
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['reminder_sent_day'],
                    'name' => esc_html__( 'Reminder 1 day before Sent', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'select',
                    'options'  => array(
                        'not_sent'     => 'Not Sent',
                        'sent'         => 'Sent',
                    ),
                ),
                array(
                    'id'   => self::META_FIELDS_SLUG['reminder_sent_morning'],
                    'name' => esc_html__( 'Reminder Morning Sent', Homi_Addons::PLUGIN_NAME ),
                    'type' => 'select',
                    'options'  => array(
                        'not_sent'     => 'Not Sent',
                        'sent'         => 'Sent',
                    ),
                ),
            ),
        );

        $meta_boxes[] = array(
            'id'         => self::POST_TYPE_NAME . '_ac_information',
            'title'      => esc_html__( 'Active Campaign', Homi_Addons::PLUGIN_NAME ),
            'post_types' => array( self::POST_TYPE_NAME ),
            'context'    => 'side',
            'priority'   => 'default',
            'autosave'   => 'false',
            'fields'     => array(
                array(
                    'type'     => 'custom_html',
                    'callback' => array( $this, 'display_ac_information' ),
                ),
            )
        );

        return $meta_boxes;

    }


    public function display_ac_information(){

        if( isset( $_GET['post'] ) ){

            $post_id    = $_GET['post'];
            $deal_id    = get_post_meta( $post_id, self::META_FIELDS_SLUG['ac_deal_id'], true );
            $contact_id = get_user_meta( get_post_field( 'post_author', $post_id ), 'ac_contact_id', true );

            if( !empty( $deal_id ) ){

                ?>
                <a href="https://homi.activehosted.com/app/deals/<?php echo $deal_id; ?>" target="_blank" class="page-title-action">
                    View Deal
                </a>
                <?php

            }
            if( !empty( $contact_id ) ){

                ?>
                <a href="https://homi.activehosted.com/app/contacts/<?php echo $contact_id; ?>" target="_blank" class="page-title-action">
                    View Contact
                </a>
                <?php

            }

        }


    }

    private function build_address( $post_id ){

        $suburb         = get_post_meta( $post_id, self::META_FIELDS_SLUG['suburb'], true );
        $street_name    = get_post_meta( $post_id, self::META_FIELDS_SLUG['street_name'], true );
        $street_number  = get_post_meta( $post_id, self::META_FIELDS_SLUG['street_number'], true );
        $post_code      = get_post_meta( $post_id, self::META_FIELDS_SLUG['post_code'], true );

        $address = "$street_name $street_number, $suburb, $post_code";

        return $address;

    }


    public function posts_columns_id($defaults){

        unset( $defaults['author'] );
        unset( $defaults['date'] );
        unset( $defaults['search_exclude'] );

        $defaults['status']  = __('Status');
        $defaults['address'] = __('Address');
        $defaults['contact'] = '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 511.874 511.874"  xml:space="preserve"><g><g><g><path d="M490.114,12.813H132.568c-12.012,0.014-21.746,9.748-21.76,21.76v98.62l-16.35-24.525c-7.484-11.289-22.535-14.676-34.133-7.68l-33.638,20.224c-11.016,6.464-19.097,16.946-22.545,29.244c-12.271,44.681-3.166,121.66,109.824,234.667C203.821,474.885,270.816,499.06,316.99,499.06c10.69,0.049,21.339-1.34,31.659-4.13c12.293-3.448,22.775-11.518,29.252-22.519l20.198-33.673c6.968-11.589,3.584-26.609-7.68-34.091l-80.546-53.692c-11.049-7.308-25.859-4.905-34.031,5.521l-23.45,30.148c-2.451,3.226-6.897,4.166-10.445,2.21l-4.463-2.458c-14.686-8.004-32.964-17.971-69.879-54.886c-3.994-3.994-7.612-7.731-11.008-11.307h333.517c11.982,0.009,21.713-9.676,21.76-21.658V34.573C511.86,22.561,502.126,12.827,490.114,12.813z M229.318,401.362l4.335,2.381c10.897,6.093,24.614,3.266,32.213-6.639l23.45-30.148c2.666-3.396,7.49-4.179,11.093-1.801l80.546,53.692c3.659,2.439,4.759,7.321,2.5,11.093l-20.198,33.673c-4.218,7.233-11.071,12.553-19.123,14.848c-40.337,11.093-110.933,1.707-218.078-105.446S9.56,195.273,20.627,154.97c2.293-8.051,7.61-14.903,14.839-19.123l33.673-20.207c3.773-2.254,8.652-1.155,11.093,2.5l53.717,80.546c2.382,3.602,1.599,8.43-1.801,11.093l-30.157,23.458c-9.903,7.597-12.731,21.311-6.639,32.205l2.389,4.335c8.533,15.65,19.14,35.123,57.805,73.779C194.212,382.213,213.677,392.828,229.318,401.362z M494.808,298.526c-0.028,2.567-2.127,4.627-4.693,4.608H141.203c-11.083-12.674-20.64-26.604-28.476-41.506l-2.458-4.48c-1.96-3.54-1.022-7.982,2.202-10.428l30.157-23.458c10.43-8.17,12.833-22.982,5.521-34.031l-20.275-30.43V34.573c-0.014-1.249,0.476-2.451,1.359-3.334c0.883-0.883,2.085-1.373,3.334-1.359h357.547c1.249-0.014,2.451,0.476,3.334,1.359c0.883,0.883,1.373,2.085,1.359,3.334V298.526z"/><path d="M460.725,52.323l-142.618,108.16c-4.035,2.932-9.499,2.932-13.534,0L162.008,52.323c-3.756-2.849-9.111-2.113-11.959,1.643c-2.849,3.756-2.113,9.111,1.643,11.959l142.583,108.151c10.144,7.494,23.989,7.494,34.133,0L471.034,65.925c1.805-1.368,2.992-3.398,3.299-5.642c0.307-2.244-0.29-4.518-1.661-6.321C469.824,50.213,464.478,49.48,460.725,52.323z"/><path d="M238.517,174.793l-87.415,93.611c-3.214,3.447-3.025,8.848,0.422,12.062c3.447,3.214,8.848,3.025,12.062-0.422l87.416-93.653c2.888-3.484,2.553-8.617-0.762-11.698C246.924,171.612,241.78,171.656,238.517,174.793z"/><path d="M384.728,174.793c-3.214-3.447-8.614-3.637-12.062-0.422c-3.447,3.214-3.637,8.614-0.422,12.062l87.39,93.611c3.214,3.447,8.614,3.637,12.062,0.422c3.447-3.214,3.637-8.614,0.422-12.062L384.728,174.793z"/></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg> <span>Contact Info</span>';
        $defaults['requester'] = '<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"  x="0px" y="0px" viewBox="0 0 482.9 482.9" xml:space="preserve"><g><g><path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z"/><path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3C447,415.5,446.9,388.8,446.8,383.6z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg><span>Requester</span>';
        $defaults['appointment'] = '<svg height="480pt" viewBox="0 -8 480 480" width="480pt" xmlns="http://www.w3.org/2000/svg"><title>Appointment Date Time</title><path d="m344 192c-75.109375 0-136 60.890625-136 136s60.890625 136 136 136 136-60.890625 136-136c-.082031-75.074219-60.925781-135.917969-136-136zm0 256c-66.273438 0-120-53.726562-120-120s53.726562-120 120-120 120 53.726562 120 120c-.074219 66.242188-53.757812 119.925781-120 120zm0 0"/><path d="m352 305.472656v-49.472656h-16v49.472656c-6.777344 2.417969-12.109375 7.75-14.527344 14.527344h-33.472656v16h33.472656c3.699219 10.53125 14.1875 17.109375 25.28125 15.855469 11.09375-1.257813 19.84375-10.007813 21.101563-21.101563 1.253906-11.09375-5.324219-21.582031-15.855469-25.28125zm-8 30.527344c-4.417969 0-8-3.582031-8-8s3.582031-8 8-8 8 3.582031 8 8-3.582031 8-8 8zm0 0"/><path d="m240 320h16v16h-16zm0 0"/><path d="m336 416h16v16h-16zm0 0"/><path d="m432 320h16v16h-16zm0 0"/><path d="m336 224h16v16h-16zm0 0"/><path d="m16 344v-232h368v72h16v-112c-.027344-22.082031-17.917969-39.972656-40-40h-56v-8c0-13.253906-10.746094-24-24-24s-24 10.746094-24 24v8h-112v-8c0-13.253906-10.746094-24-24-24s-24 10.746094-24 24v8h-56c-22.082031.027344-39.9726562 17.917969-40 40v272c.0273438 22.082031 17.917969 39.972656 40 40h160v-16h-160c-13.253906 0-24-10.746094-24-24zm256-320c0-4.417969 3.582031-8 8-8s8 3.582031 8 8v32c0 4.417969-3.582031 8-8 8s-8-3.582031-8-8zm-160 0c0-4.417969 3.582031-8 8-8s8 3.582031 8 8v32c0 4.417969-3.582031 8-8 8s-8-3.582031-8-8zm-72 24h56v8c0 13.253906 10.746094 24 24 24s24-10.746094 24-24v-8h112v8c0 13.253906 10.746094 24 24 24s24-10.746094 24-24v-8h56c13.253906 0 24 10.746094 24 24v24h-368v-24c0-13.253906 10.746094-24 24-24zm0 0"/><path d="m112 176c0-8.835938-7.164062-16-16-16h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h32c8.835938 0 16-7.164062 16-16zm-48 32v-32h32v32zm0 0"/><path d="m192 176c0-8.835938-7.164062-16-16-16h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h32c8.835938 0 16-7.164062 16-16zm-48 32v-32h32v32zm0 0"/><path d="m272 200v-24c0-8.835938-7.164062-16-16-16h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h16v-16h-16v-32h32v24zm0 0"/><path d="m96 256h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h32c8.835938 0 16-7.164062 16-16v-32c0-8.835938-7.164062-16-16-16zm-32 48v-32h32v32zm0 0"/><path d="m176 256h-32c-8.835938 0-16 7.164062-16 16v32c0 8.835938 7.164062 16 16 16h32c8.835938 0 16-7.164062 16-16v-32c0-8.835938-7.164062-16-16-16zm-32 48v-32h32v32zm0 0"/><path d="m352 184v-8c0-8.835938-7.164062-16-16-16h-32c-8.835938 0-16 7.164062-16 16v8h16v-8h32v8zm0 0"/></svg>';
        $defaults['date'] = __('Date');

        return $defaults;

    }



    public function posts_custom_id_columns($column_name, $id){


        switch( $column_name ){


            case 'address':
                echo  $this->build_address( $id );

                $long = get_post_meta( $id, self::META_FIELDS_SLUG['long'], true );
                $lat  = get_post_meta( $id, self::META_FIELDS_SLUG['lat'], true );

                $link = "http://maps.google.com/?q=$lat,$long"
                ?>
                <a href="<?php echo $link; ?>" target="_blank" class="view-map-link">
                    View on Map
                </a>
                <?php
                break;

            case 'contact':
                $email = get_post_meta( $id, self::META_FIELDS_SLUG['requester_email'], true );
                $phone = get_post_meta( $id, self::META_FIELDS_SLUG['requester_phone'], true );
                ?>
                <div class="contact-info contact-email">
                    <?php echo $email; ?>
                </div>
                <div class="contact-info contact-phone">
                    <?php echo $phone; ?>
                </div>
                <?php
                break;

            case 'requester':

                $name       = get_post_meta( $id, self::META_FIELDS_SLUG['requester_first_name'], true ) . ' '. get_post_meta( $id, self::META_FIELDS_SLUG['requester_last_name'], true );
                $name       = ( empty( $name ) ? get_post_meta( $id, self::META_FIELDS_SLUG['requester_name'], true ) : $name );
                ?>
                <div class="requester-name">
                    <?php echo $name ; ?>
                </div>
                <?php
                break;

            case 'status':

                if (strpos( get_the_title( $id ), 'ABANDONED') === false) {

                    $status = get_post_meta( $id, self::META_FIELDS_SLUG['request_status'], true );
                    $status = ( !empty( $status ) ? $status : 'pending' );

                    ?>
                    <div class="request-status <?php echo $status; ?>">
                        <?php echo $status; ?>
                    </div>
                    <?php

                }
                else {
                    echo '-';
                }


                break;

            case 'appointment':
                $date = get_post_meta( $id, self::META_FIELDS_SLUG['valuation_day'], true );
                $time = get_post_meta( $id, self::META_FIELDS_SLUG['valuation_time'], true );

                if( !empty( $time ) ): ?>

                    <div class="appointment-info date">
                        <?php echo date('d/m/Y', strtotime( $date ) ); ?>
                    </div>

                    <div class="appointment-info time">
                        <?php echo CalendarController::VALUATION_TIME_INDEX[ $time ]; ?>
                    </div>

                <?php endif;

                break;

        }


    }



    public function ajax_insert_request(){

        $result = array();
        $params = array();
        $meta_input = array();
        parse_str( $_POST['data'], $params );
        $timestamp = time();

        $requester_email    = $params[ self::META_FIELDS_SLUG['requester_email'] ];
        $abandoned_req_id   = $this->has_abandoned_request_last_hour( $requester_email );

        $result['requester_existing'] = (email_exists($params[self::META_FIELDS_SLUG['requester_email']]) ? 'yes' : 'no');

        if( !$abandoned_req_id && !empty( $requester_email ) ) {

            foreach (self::META_FIELDS_SLUG as $meta_key) {

                if (isset($params[$meta_key]) && !empty($params[$meta_key])) {

                    $meta_input[$meta_key] = sanitize_text_field($params[$meta_key]);

                }

            }

//            if (isset($params[self::META_FIELDS_SLUG['valuation_day']])) {
//
//                $meta_input[self::META_FIELDS_SLUG['valuation_time']] = $params[$params[self::META_FIELDS_SLUG['valuation_day']] . "_times"];
//
//            }

            $request = array(
                'post_title' => "ABANDONED RENT_REQ-$timestamp",
                'post_content' => "This is an abandoned request made from the property valuation form",
                'post_status' => 'publish',
                'post_type' => self::POST_TYPE_NAME,
                'post_author' => 1,
                'meta_input' => $meta_input,
            );

            $new_request = wp_insert_post($request, true);

            if (!$new_request instanceof WP_Error) {

                $formActions = new InteractiveFormActions();

                $result['status'] = 'success';
                $result['request_id'] = $new_request;
                $result['ac_contact_id'] = $formActions->create_abandoned_contact($params);

            } else {

                $result['status'] = 'error';
                $result['message'] = $new_request->get_error_message();

            }

        }
        else {
            $result['status']       = 'success';
            $result['request_id']   = $abandoned_req_id;
        }

        wp_send_json( $result );
        wp_die();

    }


    public function ajax_update_request(){

        $result     = array();
        $params     = array();
        $meta_input = array();
        parse_str( $_POST['data'], $params );
        $timestamp = time();


        $formActions    = new InteractiveFormActions();
        $user_id        = $formActions->force_register_requester( $params );
        $result['userid']  = $user_id;
        $user_id        = ( $user_id === false ? 1 : $user_id );

        foreach( self::META_FIELDS_SLUG as $meta_key ){

            if( isset( $params[ $meta_key ] ) && !empty( $params[ $meta_key ] ) ){

                $meta_input[ $meta_key ] = sanitize_text_field( $params[ $meta_key ] );

            }

        }

        if ( isset( $params[ self::META_FIELDS_SLUG['valuation_day'] ] ) && isset( $params[$params[self::META_FIELDS_SLUG['valuation_day']] . "_times"] ) ) {

            $meta_input[ self::META_FIELDS_SLUG['valuation_time'] ] = $params[ $params[ self::META_FIELDS_SLUG['valuation_day'] ]. "_times" ];

        }

        $meta_input[ self::META_FIELDS_SLUG['request_status'] ] = 'pending';

        $request = array(
            'post_title'    => "RENT_REQ-$timestamp",
            'post_content'  => "This is a rent request made from the rent property valuation form",
            'post_status'   => 'publish',
            'post_type'     => self::POST_TYPE_NAME,
            'post_author'   => $user_id,
            'meta_input'    => $meta_input,
        );

        if( isset( $params['request_id'] ) ){

            $request['ID']  = $params['request_id'];
            $new_request    = wp_update_post( $request, true );

        }
        else {

            $new_request = wp_insert_post( $request, true );

        }

        if( !$new_request instanceof WP_Error ){

            //Run code after the request has been created completely with all the info
            do_action( 'after_homi_request_form_submitted', $new_request );

            $full_name          = $params[ self::META_FIELDS_SLUG['requester_first_name'] ] . ' '. $params[ self::META_FIELDS_SLUG['requester_last_name'] ];
            $result['status']   = 'success';

            $date = date('d/m/Y', strtotime( get_post_meta( $new_request, self::META_FIELDS_SLUG['valuation_day'], true ) ) );
            $time = CalendarController::VALUATION_TIME_INDEX[ get_post_meta( $new_request, self::META_FIELDS_SLUG['valuation_time'] , true ) ];


            if ( $params['message_language'] === 'GR' ) {

                $result['message']  = __(
                    "Αγαπητή/έ $full_name,
                    <br><br>Ευχαριστούμε για το ενδιαφέρον σου και για το αίτημά σου για να καταχωρήσεις το ακινήτο σου με τη ΗΟΜΙ.
                    <br>Έχεις δηλώσει την ημέρα $date και ώρα $time ως επιθυμητή ημέρα συνάντησης.
                    <br><br>Θα επικοινωνήσουμε μαζί σου σύντομα για να επιβεβαιώσουμε επιπλέον στοιχεία για το ακινήτο σου.
                    <br><br>Με εκτίμηση,
                    <br><br>Η ομάδα ΗΟΜΙ",
                    Homi_Addons::PLUGIN_NAME
                );

            }
            else {

                $result['message']  = __("
                    Dear $full_name,
                    <br><br>Thank you for your interest in HOMI and for your request to list your property with us.
                    <br><br>You have requested an appointment at $time, $date
                    <br><br>We will contact you shortly to confirm your appointment and ask for some further details regarding your property. 
                    <br><br>Regards, 
                    <br><br>Team HOMI",
                    Homi_Addons::PLUGIN_NAME
                );

            }


//            $emailValuationController = new EmailValuationController();
//            $emailValuationController->send_valuation_emails( $new_request );

        }
        else {

            $result['status']   = 'error';
            $result['message']  = $new_request->get_error_message();

        }

        wp_send_json( $result );
        wp_die();

    }


    /**
     * This functions handles the email being sent to
     * the admin, buyer and seller of a request
     *
     * @param $post_id int
     * @param $post WP_Post
     * @param $update bool
     */
    public function new_rent_request_callback( $post_id, $post, $update ){

        if ( ( $post->post_type ===  self::POST_TYPE_NAME ) && ( $update === true )  && ( strpos( get_the_title( $post_id ), 'ABANDONED') === false )  && ( get_post_status( $post_id ) === 'publish') ){

            $emailController = new EmailValuationController();
            $emailController->send_valuation_emails( $post_id );

        }

    }


    public function has_abandoned_request_last_hour( $email ){

        $args = array(
            'post_type' => self::POST_TYPE_NAME,
            'posts_per_page'=> -1,
            's'             => 'ABANDONED',
            'date_query' => [
                [
                    'after'     => '1 hour ago',
                    'inclusive' => true,
                ],
            ],
            'meta_query' => array(
                'key'     => self::META_FIELDS_SLUG['requester_email'],
                'value'   => $email,
                'compare' => '='
            )
        );

        $query = new WP_Query( $args );

        if( $query->have_posts() ){

            while ( $query->have_posts() ) {
                $query->the_post();
                return get_the_ID();
            }

        }

        return false;

    }

}
