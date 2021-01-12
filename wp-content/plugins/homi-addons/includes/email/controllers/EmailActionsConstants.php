<?php


class EmailActionsConstants
{

    const EMAIL_HEADERS = array('Content-Type: text/html; charset=UTF-8', 'From: HOMI <appointments@homi.com.gr>');

    const ADMIN_EMAILS = array('alexandros@homi.com.gr', 'christian@homi.com.gr');

    const RECIPIENT_TYPES = array(
        'landlord'  => 'landlord',
        'viewer'    => 'viewer'
    );

    const VALUATION_TYPES = array(
        'property_valuation'    => 'property_valuation',
        'rent_valuation'        => 'rent_valuation'
    );

    const VIEWING_ACTIONS = array(
        'submit_request'            => 1,
        'confirm_request'           => 2,
        'reject_request'            => 3,
        'cancel_request'            => 4,
        'remind_day_request'        => 5,
        'remind_morning_request'    => 6,
    );

    const VIEWINGS_URL = 'el/episkepseis';
    const AVAILABILITY_URL = 'el/property-availability/';


    const EMAIL_ACTIONS = array(
      'viewing_pending'             => 'User submitted a viewing request',
      'viewing_confirmed'           => 'Landlord accepted a viewing request',
      'viewing_rejected'            => 'Landlord rejected a viewing request',
      'viewing_canceled_seller'     => 'Landlord canceled a viewing request',
      'viewing_canceled_buyer'      => 'Landlord canceled a viewing request',
      'viewing_reminder_day'        => 'Sent reminder 1 day before a viewing request',
      'viewing_reminder_morning'    => 'Sent reminder on morning for a viewing request',
      'valuation_pending'           => 'A landlord submitted free val request',
      'valuation_confirmed'         => 'HOMI accepted a free val request',
      'valuation_reminder_day'      => 'Sent reminder 1 day before a free val request',
      'valuation_reminder_morning'  => 'Sent reminder on morning for a free val request',
      'rent_pending'                => 'A landlord submitted rent request',
      'rent_confirmed'              => 'HOMI accepted a rent request',
      'rent_reminder_day'           => 'Sent reminder 1 day before a rent request',
      'rent_reminder_morning'       => 'Sent reminder on morning for a rent request',
      'interest_created'            => 'New Interest Request',
    );

}
