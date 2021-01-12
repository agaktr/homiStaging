<?php


class ActiveCampaignLog{


    public function createLog( $requestId, $requestType, $logData ){

        try {

            $metaKey = $this->getLogMetaFieldKey( $requestType );

            if( $metaKey ){

                $log = get_post_meta( $requestId, $metaKey, true );

                $log = ( !is_array( $log ) ? array() : $log );

                $logData['date'] = date('d-m-Y');
                $logData['time'] = date('H:i:s');

                $log[] = $logData;

                update_post_meta( $requestId, $metaKey, $log );

            }

        }
        catch( Exception $e ){}


    }


    private function getLogMetaFieldKey( $requestType ){

        $metaKey = false;

        switch( $requestType ){

            case Homi_Addons_Tour_Request::POST_TYPE_NAME:

                $metaKey = Homi_Addons_Tour_Request::META_FIELDS_SLUG['ac_log'];

                break;

            case Homi_Addons_Rent_Request::POST_TYPE_NAME:

                $metaKey = Homi_Addons_Rent_Request::META_FIELDS_SLUG['ac_log'];

                break;

            case Homi_Addons_Valuation_Request::POST_TYPE_NAME :

                $metaKey = Homi_Addons_Valuation_Request::META_FIELDS_SLUG['ac_log'];

                break;
//
//            default:
//
//                $metaKey = Homi_Addons_Tour_Request::META_FIELDS_SLUG['ac_log'];
//
//                break;
        }


        return $metaKey;

    }



    public function createUserLog( $userID, $message ){

        try {

            update_user_meta( $userID, 'ac_contact_log', $message );

        }
        catch( Exception $e ){

            update_user_meta( $userID, 'ac_contact_log', "Failed to create Log message" );

        }

    }

}
