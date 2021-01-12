<?php


class codeGeneratorPages
{

    public function registerAdminPage(){

        add_menu_page(
            __( 'Code Generator', 'textdomain' ),
            __( 'Code Generator','textdomain' ),
            'manage_options',
            'homi-code-generator',
            array( $this,'display'),
            'dashicons-media-code',
            9
        );

//        add_submenu_page(
//            'homi-code-generator',
//            'Generate Code',
//            'Email Template Test',
//            'manage_options',
//            'email-template-test',
//            array( $this, 'display_template')
//        );


    }


    public function display(){

        $codeGenerator = new codeGenerator();
        $ids = $codeGenerator->getGeneratedCodes();

        ?>

            <div class="code-generator-head">

                <h1>
                    HOMI.ONE Code Generator
                </h1>

                <form method="post">

                    <input type="number" name="codes_number" value="0">

                    <button name="generate_codes">
                        Generate Codes
                    </button>

                </form>

            </div>

            <script type="text/javascript">

                function copytable(el) {
                    var urlField = document.getElementById(el)
                    var range = document.createRange()
                    range.selectNode(urlField)
                    window.getSelection().addRange(range)
                    document.execCommand('copy')
                }

            </script>

            <div class="generated-codes">

                <input type="button" value="Copy Data" onclick="copytable( 'generatedCodes' );" class="page-title-action">

                <table id="generatedCodes" class="wp-list-table widefat fixed striped pages">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Draft Property Edit Link</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach( $ids as $id ): ?>

                            <tr>
                                <td>
                                    <?php echo $id; ?>
                                </td>
                                <td>
                                    <a href="<?php echo get_edit_post_link( $id ); ?>">
                                        <?php echo get_edit_post_link( $id ); ?>
                                    </a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

        <?php

    }

}
