<?php


class HomiApiCronController {

    const CRON_EVENTS = array(
      'cron_homi_api_ac_deals_rentals' => array(
          'recurrence'  => 'every4hours',
          'callback'    => 'setACDealsRentals',
      )
    );


    /**
     * This function is responsible for registering the scheduled
     * cron jobs to the site and set them to run on an hourly recurrence.
     *
     */
    public function registerScheduledEvents(){

        foreach( self::CRON_EVENTS as $cron_job => $cronData ){

            if( !wp_next_scheduled( $cron_job ) ){

                wp_schedule_event ( time(), $cronData['recurrence'], $cron_job );

            }

        }

    }



    /**
     * This is a callback cron job function responsible for getting the Active Campaign
     * deals rentals and puts the data on a json file that it will be fetched from Klipfolio
     *
     */
    public function setACDealsRentals(){

        $acHomiAPI = new ActiveCampaignAPI();
        $dealsData = $acHomiAPI->get_deals(ActiveCampaignConstants::PIPELINE_RENTALS );

        $this->writeJSONFile( $dealsData, 'active-campaign-deals-rentals');

    }


    /**
     * Create a json file with name $filename and put the
     * json encoded $data into the file
     *
     * @param $data
     * @param $filename
     */
    public function writeJSONFile($data, $filename ){

        $upload = wp_upload_dir();
        $homiAPIDir = str_replace("uploads", "homiAPI", $upload['basedir'] );
        $filePath = $homiAPIDir . "/$filename.json";

        $fp = fopen( $filePath, 'w');
        fwrite($fp, json_encode($data));
        fclose($fp);

    }

}
