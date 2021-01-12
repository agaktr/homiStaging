<?php


class Viewer
{

    public $first_name;
    public $last_name;
    public $email;
    public $phone;

    public function __construct( $request_id ){

        $this->first_name   = get_post_meta( $request_id, Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_first_name'], true );
        $this->last_name    = get_post_meta( $request_id, Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_last_name'], true );
        $this->email        = get_post_meta( $request_id, Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_email'], true );
        $this->phone        = get_post_meta( $request_id, Homi_Addons_Tour_Request::META_FIELDS_SLUG['requester_phone'], true );

    }

}
