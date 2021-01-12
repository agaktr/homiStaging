<?php


class ActiveCampaignPages{

    public function registerAdminPage(){

        add_menu_page(
            __( 'Active Campaign', 'textdomain' ),
            __( 'Active Campaign','textdomain' ),
            'manage_options',
            'active-campaign-info',
            array( $this,'display'),
            'dashicons-migrate'
        );

        add_submenu_page(
            'active-campaign-info',
            'Stages Info',
            'Stages Info',
            'manage_options',
            'active-campaign-stages',
            array( $this, 'stages_info')
        );

        add_submenu_page(
            'active-campaign-info',
            'Pipelines Info',
            'Pipelines Info',
            'manage_options',
            'active-campaign-pipelines',
            array( $this, 'pipelines_info')
        );

        add_submenu_page(
            'active-campaign-info',
            'Deal Custom Fields',
            'Deal Custom Fields',
            'manage_options',
            'active-campaign-deal-custom-fields',
            array( $this, 'deal_custom_fields_info')
        );

        add_submenu_page(
            'active-campaign-info',
            'Contacts',
            'Contacts',
            'manage_options',
            'active-campaign-contacts',
            array( $this, 'contact_info')
        );

        add_submenu_page(
            'active-campaign-info',
            'Lists',
            'Lists',
            'manage_options',
            'active-campaign-lists',
            array( $this, 'lists_info')
        );

        add_submenu_page(
            'active-campaign-info',
            'Contact Custom Fields',
            'Contact Custom Fields',
            'manage_options',
            'active-campaign-contact-fields',
            array( $this, 'contact_fields')
        );

        add_submenu_page(
            'active-campaign-info',
            'Giannis for Testing',
            'Giannis for Testing',
            'manage_options',
            'ac-test',
            array( $this, 'ac_test')
        );


    }


    public function ac_test(){

        echo 'test';

//       $acAPI = new ActiveCampaignAPI();
//       var_dump( $acAPI->get_active_campaign_deals_rentals() );

    }


    public function stages_info(){

        $client = new Mediatoolkit\ActiveCampaign\Client(
            ActiveCampaignConstants::URL,
            ActiveCampaignConstants::KEY
        );

        $dealApi  = new Mediatoolkit\ActiveCampaign\Deals\Deals( $client );
        $list = $dealApi->listAllStages(array('limit' => 100));
        $list = json_decode( $list, true );
        $stages = $list['dealStages'];
//        print("<pre>".print_r($stages,true)."</pre>");


        ?>

        <table class="wp-list-table widefat fixed striped posts">
            <thead>
                <tr>
                    <th>
                        Stage ID
                    </th>
                    <th>
                        Stage Name
                    </th>
                    <th>
                        Pipeline ID
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $stages as $stage ): ?>

                    <?php if( isset( $stage['id'] ) ): ?>

                        <tr>
                            <td>
                                <?php echo $stage['id']; ?>
                            </td>
                            <td>
                                <?php echo $stage['title']; ?>
                            </td>
                            <td>
                                <?php echo $stage['group']; ?>
                            </td>
                        </tr>

                    <?php endif; ?>

                <?php endforeach; ?>
            </tbody>
        </table>

        <?php

    }


    public function pipelines_info(){

        $ac = new ActiveCampaign(ActiveCampaignConstants::URL, ActiveCampaignConstants::KEY);
        $list = $ac->api("deal/pipeline/list");

//print("<pre>".print_r($list,true)."</pre>");
        ?>

        <table class="wp-list-table widefat fixed striped posts">
            <thead>
                <tr>
                    <th>
                        Pipeline ID
                    </th>
                    <th>
                        Pipeline Name
                    </th>
                    <th>
                        Autoasign
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach( $list as $pipeline ): ?>

                    <?php if( isset( $pipeline->id ) ): ?>

                        <tr>
                            <td>
                                <?php echo $pipeline->id; ?>
                            </td>
                            <td>
                                <?php echo $pipeline->title; ?>
                            </td>
                            <td>
                                <?php echo $pipeline->autoassign; ?>
                            </td>
                        </tr>

                    <?php endif; ?>

                <?php endforeach; ?>
            </tbody>
        </table>

        <?php

    }


    public function lists_info(){

        $client = new Mediatoolkit\ActiveCampaign\Client(
            ActiveCampaignConstants::URL,
            ActiveCampaignConstants::KEY
        );

        $ac = new \Mediatoolkit\ActiveCampaign\Lists\Lists( $client );
        $list = $ac->retrieve();
        $list = json_decode( $list, true );

//        print("<pre>".print_r($list,true)."</pre>");
        ?>

        <table class="wp-list-table widefat fixed striped posts">
            <thead>
                <tr>
                    <th>
                        List ID
                    </th>
                    <th>
                        List Name
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php foreach( $list['lists'] as $list ): ?>

                <tr>
                    <td>
                        <?php echo $list['id']; ?>
                    </td>
                    <td>
                        <?php echo $list['name']; ?>
                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>

        <?php

    }

    public function deal_custom_fields_info(){

        $client = new Mediatoolkit\ActiveCampaign\Client(
            ActiveCampaignConstants::URL,
            ActiveCampaignConstants::KEY
        );


        $acDeal = new Mediatoolkit\ActiveCampaign\Deals\Deals( $client );
        $customFields = json_decode( $acDeal->listAllCustomFields(), true );
//print("<pre>".print_r($customFields,true)."</pre>");

        if( isset( $customFields['dealCustomFieldMeta'] ) ){
        ?>

            <table class="wp-list-table widefat fixed striped posts">
                <thead>
                <tr>
                    <th>
                        Field ID
                    </th>
                    <th>
                        Field Name/Label
                    </th>
                    <th>
                        Field Type
                    </th>
                    <th>
                        Personalization Tag
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $customFields['dealCustomFieldMeta'] as $customField ): $customField = (object) $customField; ?>

                    <?php if( isset( $customField->id ) ): ?>

                        <tr>
                            <td>
                                <?php echo $customField->id; ?>
                            </td>
                            <td>
                                <?php echo $customField->fieldLabel; ?>
                            </td>
                            <td>
                                <?php echo $customField->fieldType; ?>
                            </td>
                            <td>
                                <?php echo $customField->personalization; ?>
                            </td>
                        </tr>

                    <?php endif; ?>

                <?php endforeach; ?>
                </tbody>
            </table>

        <?php
        }

    }


    public function contact_info(){

        $client = new Mediatoolkit\ActiveCampaign\Client(
            ActiveCampaignConstants::URL,
            ActiveCampaignConstants::KEY
        );


        $acContact = new Mediatoolkit\ActiveCampaign\Contacts\Contacts( $client );

//        $res = $acContact->updateListStatus(
//             array(
//
//                "list"      => 7,
//                "contact"   => 185,
//                "status"    => 2
//             )
//        );

//        $res = json_decode( $res, true );
//        print("<pre>".print_r( $res,true)."</pre>");

        $all_contacts = json_decode( $acContact->listAll( array(), 100, 0 ), true );
//print("<pre>".print_r($all_contacts,true)."</pre>");

        if( isset( $all_contacts['contacts'] ) ){
            ?>

            <table class="wp-list-table widefat fixed striped posts">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        First Name
                    </th>
                    <th>
                        Last Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Phone
                    </th>
                    <th>
                        Exists on Site
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $all_contacts['contacts'] as $contact ): $contact = (object) $contact; ?>

                    <?php if( isset( $contact->id ) ): ?>

                        <tr>
                            <td>
                                <?php echo $contact->id; ?>
                            </td>
                            <td>
                                <?php echo $contact->firstName; ?>
                            </td>
                            <td>
                                <?php echo $contact->lastName; ?>
                            </td>
                            <td>
                                <?php echo $contact->email; ?>
                            </td>
                            <td>
                                <?php echo $contact->phone; ?>
                            </td>
                            <td>
                                <?php

                                    $user = get_user_by('email', $contact->email );

                                    if( $user instanceof WP_User ){

                                        $ac_id = get_user_meta( $user->ID, 'ac_contact_id', true );

                                        if( empty( $ac_id ) ){

                                            echo "Should create a contact ID Meta";
//                                            add_user_meta( $user->ID, 'ac_contact_id', $contact->id );
//                                            echo "Successfully created contact ID Meta";

                                        }
                                        else {
                                            echo "User has contact ID Meta";
                                        }

                                    }
                                    else {
                                        echo "No HOMI User";
                                    }

                                ?>
                            </td>
                        </tr>

                    <?php endif; ?>

                <?php endforeach; ?>
                </tbody>
            </table>

            <?php
        }

    }


    public function contact_fields(){

        $client = new Mediatoolkit\ActiveCampaign\Client(
            ActiveCampaignConstants::URL,
            ActiveCampaignConstants::KEY
        );


        $acContact = new Mediatoolkit\ActiveCampaign\Contacts\Contacts( $client );


        $contact_fields = json_decode( $acContact->listAllCustomFields( array(
                'limit' => 80
        )), true );
        print("<pre>".print_r($contact_fields,true)."</pre>");

        if( isset( $contact_fields['fields'] ) ){
            ?>

            <table class="wp-list-table widefat fixed striped posts">
                <thead>
                <tr>
                    <th>
                        Field ID
                    </th>
                    <th>
                        Field Title
                    </th>
                    <th>
                        Field Type
                    </th>
                    <th>
                        Personalization Tag
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach( $contact_fields['fields'] as $customField ): $customField = (object) $customField; ?>

                    <?php if( isset( $customField->id ) ): ?>

                        <tr>
                            <td>
                                <?php echo $customField->id; ?>
                            </td>
                            <td>
                                <?php echo $customField->title; ?>
                            </td>
                            <td>
                                <?php echo $customField->type; ?>
                            </td>
                            <td>
                                <?php echo $customField->perstag; ?>
                            </td>
                        </tr>

                    <?php endif; ?>

                <?php endforeach; ?>
                </tbody>
            </table>

            <?php
        }


    }

}
