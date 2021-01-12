<?php


class Landlord
{


    public $ID;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;


    public function __construct( $user_id ){

        $user = get_user_by( 'ID', $user_id );

        $this->ID           = $user_id;
        $this->first_name   = $user->first_name;
        $this->last_name    = $user->last_name;
        $this->email        = $user->user_email;
        $this->phone        = get_user_meta( $user_id, 'fave_author_mobile', true );

    }

}
