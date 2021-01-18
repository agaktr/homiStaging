<?php

use Homi\Service\Dashboard\Dashboard;

get_header();

$dashboard = new Dashboard();
$dashboard->header();
?>

<div class="dashboard-panel row no-margin-bottom">

    Dashboard page here

</div>


<?php

get_footer();
