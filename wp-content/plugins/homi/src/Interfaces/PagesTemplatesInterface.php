<?php

namespace Homi\Interfaces;

Interface PagesTemplatesInterface {

	/**
	 * Folder with the page templates
	 */
	const TEMPLATES_FOLDER  = 'templates/public/';


	/**
	 * The array of templates that this plugin tracks.
	 * Set the array key as the page template file and
	 * set as value value the name of the template
	 */
	const PAGE_TEMPLATES    = array(
		'dashboard/dashboard.php'                               => 'Homi Dashboard',
		'dashboard/ownership/ownership.php'                     => 'Homi Dashboard / Ownership',
		'dashboard/ownership/market-value-estimate.php'         => 'Homi Dashboard / Ownership / Market Value Estimate',
		'dashboard/ownership/objective-value-estimate.php'      => 'Homi Dashboard / Ownership / Objective Value Estimate',
		'dashboard/ownership/refinancing.php'                   => 'Homi Dashboard / Ownership / Refinancing',
		'dashboard/ownership/rent-estimate.php'                 => 'Homi Dashboard / Ownership / Rent Estimate',
		'dashboard/ownership/return-of-investment.php'          => 'Homi Dashboard / Ownership / Return of Investment',
		'dashboard/taxes/taxes.php'                             => 'Homi Dashboard / Taxes',
		'dashboard/taxes/arbitary-fines-calculator.php'         => 'Homi Dashboard / Taxes / Arbitary Fines Calculator',
		'dashboard/taxes/enfia.php'                             => 'Homi Dashboard / Taxes / ENFIA',
		'dashboard/taxes/tap.php'                               => 'Homi Dashboard / Taxes / TAP',
		'dashboard/transacting/transacting.php'                 => 'Homi Dashboard / Transacting',
		'dashboard/transacting/costs-of-buying-selling.php'     => 'Homi Dashboard / Transacting / Cost of Buying-Selling',
		'dashboard/transacting/mortage-calculator.php'          => 'Homi Dashboard / Transacting / Mortage Calculator',
		'dashboard/property-objects/property-objects.php'       => 'Homi Dashboard / Property Objects',
		'dashboard/property-objects/add.php'                    => 'Homi Dashboard / Property Objects / Add',
		'dashboard/property-objects/select.php'                 => 'Homi Dashboard / Property Objects / Select Property',
		'dashboard/account/account.php'                         => 'Homi Dashboard / Account',
		'dashboard/account/availability.php'                    => 'Homi Dashboard / Account / Availability',
		'dashboard/account/setup.php'                           => 'Homi Dashboard / Account / Setup',
		'dashboard/account/settings.php'                        => 'Homi Dashboard / Account / Settings',
		'dashboard/viewings/viewings.php'                       => 'Homi Dashboard / Viewings',
		'dashboard/viewings/all.php'                             => 'Homi Dashboard / Viewings / All Viewings',
		'dashboard/viewings/past.php'                            => 'Homi Dashboard / Viewings / Past Viewings',
		'dashboard/viewings/upcoming.php'                        => 'Homi Dashboard / Viewings / Upcoming Viewings',
	);


}
