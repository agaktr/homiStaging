<?php


class HomiRequestController {


    /**
     * Creates a deal on Active campaign when a request is updated
     * (update means that the user completely filled and submitted the form )
     * This runs only if the deal on active campaign has not been created yet
     *
     * Hook on action: "after_homi_request_form_submitted"
     *
     * @param $post_ID
     */
    public function create_request_deal( $post_ID ){

        $dealRequest = new ActiveCampaignDealRequest( $post_ID );
        $dealRequest->create_deal_from_request();

    }



    /**
     * Updates the deal when a the status of a viewing/schedule tour request
     * has been confirmed or rejected
     *
     * Hook on action: "after_homi_viewing_status_changed"
     *
     * @param $post_ID
     */
    public function update_viewing_deal( $post_ID ){

        $dealRequest = new ActiveCampaignDealRequest( $post_ID );
        $dealRequest->update_deal_viewing_status();

    }



    /**
     * Deletes the deal on the active campaign when a request
     * has been deleted on the site
     *
     * Hook on action: "before_delete_post"
     *
     * @param $post_ID
     */
    public function delete_request_deal( $post_ID ){

        $dealRequest = new ActiveCampaignDealRequest( $post_ID );
        $dealRequest->delete_request_deal();

    }

}
