<?php


class ActiveCampaignContactFieldsConstants
{

    //array with HOMI interactive fields mapped to Active Campaign Contact's custom fields
    //the array has the interactive form field as key name and the id of the custom field as a value
    const MAPPED_FIELDS = array(
        'form/privacy_consent'               => 2,
        'form/marketing_consent'             => 3,
        'form/tcs_consent'                   => 4,
        'user/user_registered'               => 5,
    );

}
