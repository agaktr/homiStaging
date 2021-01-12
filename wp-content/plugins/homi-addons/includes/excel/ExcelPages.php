<?php


class ExcelPages
{

    public function registerAdminPage(){

        add_menu_page(
            __( 'Interests Excel', 'textdomain' ),
            __( 'Interests Excel','textdomain' ),
            'manage_options',
            'homi-excel-files',
            array( $this,'display'),
            'dashicons-grid-view'
        );

//        add_submenu_page(
//            'homi-email-templates',
//            'Email Template Test',
//            'Email Template Test',
//            'manage_options',
//            'email-template-test',
//            array( $this, 'display_template')
//        );



    }


    public function display(){

        $excelController = new ExcelExportController();
        $excelController->generate_interests_excel();

    }


}
