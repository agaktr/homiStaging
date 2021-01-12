<?php

class UploadRequestMatch extends UploadRequest {

    public $usersPerfectMatches;
    public $usersAlreadyEmailed;
    public $usersToSendEmail;
    public $usersFilteredMatches;
    public $filteredUsersToSendEmail;

    public function __construct( $upload_request_id ) {

        parent::__construct( $upload_request_id );

        //Get the users already emailed
        $this->usersAlreadyEmailed  = get_post_meta( $upload_request_id, Homi_Addons_Upload_Request::META_FIELDS_SLUG['matched_users_emailed'] );
        $this->usersAlreadyEmailed  = ( empty( $this->usersAlreadyEmailed ) ? array() : $this->usersAlreadyEmailed );

        //Perfect Matches Data
        $this->setPerfectMatches();
        $this->usersToSendEmail = array_diff( $this->usersPerfectMatches, $this->usersAlreadyEmailed );

        //Filtered Matches Data
        $this->setFilteredMatches();
        $this->filteredUsersToSendEmail = array_diff( $this->usersFilteredMatches, $this->usersAlreadyEmailed );

    }


    private function setPerfectMatches(){

        $this->usersPerfectMatches  = array();
        $propertyMatching           = new PropertyMatching();
        $price_percentage           = 15;
        $size_percentage            = 15;
        $location                   = $this->suburb;
        $type                       = ( $this->list_type === 'sale' ? 'buy' : 'rent');
        $detect                     = preg_match("/^[a-zA-Z\p{Cyrillic}0-9\s\-]+$/u", $location );

        if( $detect === 0 ){

            $location2 = $propertyMatching->replace_accents( $location );
            $location2 = $propertyMatching->create_english( $location2 );

        }
        else {

            if( $location === 'Athens' || $location === 'Athina' ){
                $location2 = 'Aθήνα';
            }
            else {
                $location2 = $propertyMatching->create_greek( strtolower( $location ) );
            }

        }

        $priceMargin = ( $this->price * $price_percentage / 100 );
        $newPriceFrom = $this->price - $priceMargin;

        $sizeMargin = ( $this->size * $size_percentage / 100 );
        $newSizeTo = $this->size + $sizeMargin;

        $args = $propertyMatching->getInterestMatchesArgs( $type, $location, $location2, true, false, $newPriceFrom, true, false, $newSizeTo );

        $this->usersPerfectMatches = $this->getUsers( $args );

    }


    public function setFilteredMatches(){

        $this->usersFilteredMatches = array();
        $propertyMatching           = new PropertyMatching();
        $price_percentage           = get_post_meta( $this->ID, 'upload_request_price_margin', true );
        $size_percentage            = get_post_meta( $this->ID, 'upload_request_size_margin', true );
        $location                   = $this->suburb;
        $type                       = ( $this->list_type === 'sale' ? 'buy' : 'rent');
        $location2                  = get_post_meta( $this->ID, 'upload_request_alternative_location_name', true );
        $priceFilter                = boolval( get_post_meta( $this->ID, 'upload_request_enable_price_filter', true  ) );
        $sizeFilter                 = boolval( get_post_meta( $this->ID, 'upload_request_enable_size_filter', true  ) );
        $includeEmptyPrices         = boolval( get_post_meta( $this->ID, 'upload_request_include_no_price', true  ) );
        $includeEmptySizes          = boolval( get_post_meta( $this->ID, 'upload_request_include_no_size', true  ) );

        $priceMargin = ( $this->price * $price_percentage / 100 );
        $newPriceFrom = $this->price - $priceMargin;

        $sizeMargin = ( $this->size * $size_percentage / 100 );
        $newSizeTo = $this->size + $sizeMargin;

        $args = $propertyMatching->getInterestMatchesArgs( $type, $location, $location2, $priceFilter, $includeEmptyPrices, $newPriceFrom, $sizeFilter, $includeEmptySizes, $newSizeTo );

        $this->usersFilteredMatches = $this->getUsers( $args );


    }

    private function getUsers( $args ){

        $users = array();

        $query = new WP_Query( $args );

        if( $query->have_posts() ){

            while ( $query->have_posts() ){

                $query->the_post();
                $interestRequest = new RentInterest( get_the_ID() );

                $users[] = $interestRequest->user->ID;

            }

        }

        return $users;

    }

}
