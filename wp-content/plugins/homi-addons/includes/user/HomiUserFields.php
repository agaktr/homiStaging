<?php


class HomiUserFields{

    const USER_META = array(
        'ac_contact_id'     => array(
            'meta_key'      => 'ac_contact_id',
            'type'          => 'text',
            'label'         => 'Active Campaign Contact ID',
            'placeholder'   => '',
            'sanitize'      => 'FILTER_SANITIZE_STRING',
            'required'      => false,
            'show_on_admin' => true,
            'description'   => 'The unique ID of the contact in the Active Campaign',
        ),
        'ac_contact_log'     => array(
            'meta_key'      => 'ac_contact_log',
            'type'          => 'text',
            'label'         => 'Active Campaign Contact Log',
            'placeholder'   => '',
            'sanitize'      => 'FILTER_SANITIZE_STRING',
            'required'      => false,
            'show_on_admin' => true,
            'description'   => 'Log info of contract creation in Active Campaign',
        ),
        'privacy_consent'     => array(
            'meta_key'      => 'privacy_consent',
            'type'          => 'text',
            'label'         => 'Privacy Consent Date',
            'placeholder'   => '',
            'sanitize'      => 'FILTER_SANITIZE_STRING',
            'required'      => false,
            'show_on_admin' => true,
            'description'   => 'The date the user consented to the Privacy Policy',
        ),
        'marketing_consent'     => array(
            'meta_key'      => 'marketing_consent',
            'type'          => 'text',
            'label'         => 'Marketing Consent Date',
            'placeholder'   => '',
            'sanitize'      => 'FILTER_SANITIZE_STRING',
            'required'      => false,
            'show_on_admin' => true,
            'description'   => 'The date the user consented to receiving marketing emails',
        ),
        'tcs_consent'     => array(
            'meta_key'      => 'tcs_consent',
            'type'          => 'text',
            'label'         => 'Terms & Conditions Consent Date',
            'placeholder'   => '',
            'sanitize'      => 'FILTER_SANITIZE_STRING',
            'required'      => false,
            'show_on_admin' => true,
            'description'   => 'The date the user consented to terms and conditions',
        ),
    );


    /**
     * Display meta fields on 'Users => Your profile" screen inside admin panel
     *
     * @param $user WP_User
     */
    public function display_meta_fields_on_profile_screen( $user ) {

        if ( ( false === property_exists( $user, 'roles' ) )  ) {
            return;
        }

        ?>

        <h2><?php _e( 'HOMI Custom information', Homi_Addons::PLUGIN_NAME ) ?></h2>

        <table class="form-table">

            <tbody>

            <?php

            foreach( self::USER_META as $key => $userMeta ) {

                switch ( $userMeta['type'] ){

                    default:

                        ?>

                        <tr class="user-<?php echo $key; ?>">

                            <th>
                                <label for="<?php echo $userMeta['meta_key']; ?>">
                                    <?php _e( $userMeta['label'], 'apto-resume' ) ?>
                                    <span class="description">(<?php echo ( $userMeta['required'] ? 'Required' : 'Not Mandatory'); ?>)</span>
                                </label>
                            </th>

                            <td>

                                <input type="<?php echo $userMeta['type']; ?>" name="<?php echo $userMeta['meta_key']; ?>" id="<?php echo $userMeta['meta_key']; ?>"
                                       value="<?php echo ( ! empty( get_user_meta( $user->ID, $userMeta['meta_key'], true ) ) ? esc_attr( get_user_meta( $user->ID, $userMeta['meta_key'], true ) ) : '' ) ?>"
                                       class="regular-text ltr " >


                                <?php if ( isset( $userMeta['description'] ) && !empty( $userMeta['description'] ) ): ?>

                                    <p class="description"><?php echo $userMeta['description']; ?></p>

                                <?php endif; ?>


                                <?php if ( $key === 'ac_contact_id' &&  !empty( get_user_meta( $user->ID, $userMeta['meta_key'], true ) ) ): ?>

                                    <a href="https://homi.activehosted.com/app/contacts/<?php echo get_user_meta( $user->ID, $userMeta['meta_key'], true ); ?>" target="_blank" class="button" style="margin-top:10px;">
                                        View Contact on Active campaign
                                    </a>

                                <?php endif; ?>

                            </td>
                        </tr>

                        <?php
                        break;

                }

            }

            ?>

            </tbody>

        </table>

        <?php


    }



    /**
     * Save the User Meta fields
     *
     * @param $user_id int
     */
    public function save_meta_fields_on_profile_screen( $user_id ) {

        foreach ( self::USER_META as $key => $userMeta ) {

            $value = filter_input( INPUT_POST, $userMeta['meta_key'], constant( $userMeta['sanitize'] ) );

            if ( null !== $value ) {
                update_user_meta( $user_id, $userMeta['meta_key'], $value );
            }

        }

        $this->create_ac_contact( $user_id );


//        return true;

    }


    /**
     * @param $user_id
     */
    public function create_ac_contact( $user_id ){

        $user = get_user_by( 'ID', $user_id );
        $acContact = get_user_meta( $user_id, self::USER_META['ac_contact_id']['meta_key'], true );

        if( empty( $acContact ) && $user instanceof WP_User ){

            $acController   = new ActiveCampaignController();
            $acLog          = new ActiveCampaignLog();

            try {

                //Create the basic contact info
                $contact = array(
                    "email"         => $user->user_email,
                    "first_name"    => $user->first_name,
                    "last_name"     => $user->last_name,
                );

                $phone = get_user_meta( $user->ID, 'fave_author_mobile', true );

                if( !empty( $phone ) ){

                    $contact["phone"] = $phone;

                }

                $contact_id   = $acController->sync_contact( $contact, 1, false );

                if ( is_numeric( $contact_id ) ) {

                    $acLog->createUserLog( $user->ID, "Contact Successfully created on Active Campaign" );

                    //Get the contact ID and add it to wp user meta
                    $ac_update = update_user_meta( $user->ID, 'ac_contact_id', $contact_id );


                }
                else {

                    $acLog->createUserLog( $user->ID, "Failed to create contact on Active Campaign | " );

                }

            }
            catch( Exception $e ){}

        }

    }

}
