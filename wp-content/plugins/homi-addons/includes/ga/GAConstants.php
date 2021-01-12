<?php


class GAConstants{

    const CREDENTIALS_FILE                  = 'homi-1573127782407-f779df4aaaa1.json';
    const READ_SCOPE                        = ['https://www.googleapis.com/auth/analytics.readonly'];
    const VIEW_ID                           = 'ga:209855988';
    const FIRST_DATE_EVENTS                 = '2020-05-07';
    const FIRST_DATE_INTERESTS_EVENTS       = '2020-07-07';

    const PAGES_METRICS  = array(
        '/dwrean-ektimisi/',
        '/rent/',
        '/interest/'
    );

    const FREE_VALUATION_PREFIX = 'Property Valuation Form / ';

    const FREE_VALUATION_EVENT_LABELS = array(
        self::FREE_VALUATION_PREFIX . 'Contact',
        self::FREE_VALUATION_PREFIX . 'Property Type',
        self::FREE_VALUATION_PREFIX . 'Property Map',
        self::FREE_VALUATION_PREFIX . 'Apartment Floor',
        self::FREE_VALUATION_PREFIX . 'Property Size',
        self::FREE_VALUATION_PREFIX . 'Bedrooms',
        self::FREE_VALUATION_PREFIX . 'Bathrooms',
        self::FREE_VALUATION_PREFIX . 'Construction Year',
        self::FREE_VALUATION_PREFIX . 'Property Condition',
        self::FREE_VALUATION_PREFIX . 'Valuation Reason',
        self::FREE_VALUATION_PREFIX . 'Calendar',
        self::FREE_VALUATION_PREFIX . 'Phone Number',
        self::FREE_VALUATION_PREFIX . 'Thank You',
    );

    const RENTALS_PREFIX = 'Rent Property Form / ';

    const RENT_EVENT_LABELS = array(
        self::RENTALS_PREFIX . 'Contact',
        self::RENTALS_PREFIX . 'Property Map',
        self::RENTALS_PREFIX . 'Package',
        self::RENTALS_PREFIX . 'Calendar',
        self::RENTALS_PREFIX . 'Phone Number',
        self::RENTALS_PREFIX . 'Thank You',
    );


    const INTERESTS_PREFIX = 'Rent Interest Form / ';

    const INTERESTS_EVENT_LABELS = array(
        self::INTERESTS_PREFIX . 'Contact',
        self::INTERESTS_PREFIX . 'Areas of Interest',
        self::INTERESTS_PREFIX . 'Preferences',
        self::INTERESTS_PREFIX . 'Thank You',
    );




}
