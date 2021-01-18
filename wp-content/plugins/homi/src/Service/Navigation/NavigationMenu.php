<?php

namespace Homi\Service\Navigation;

class NavigationMenu {

    public function registerNavMenus(){

        register_nav_menus(
            array(
                'homi-dashboard'                   => __( 'Homi Dashboard Menu', 'homi' ),
            )
        );

    }

}
