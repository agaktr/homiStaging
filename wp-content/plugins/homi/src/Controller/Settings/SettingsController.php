<?php

namespace Homi\Controller\Settings;

use Homi\Includes\Settings;

class SettingsController
{

    public $options;

    public function __construct(){

        $settings = new \Homi\Includes\Settings('homi');
        $this->options = $settings->getOptions();

    }

}
