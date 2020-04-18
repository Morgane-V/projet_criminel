<?php
    require('template/base.php');
    session_start();
    $accredit_a = $_SESSION['niveau_accreditation_a'];
    


    switch ($accredit_a) {
        case 1:
        case 2 :
            ob_start;?>

                <div></div>

            <?php $content = ob_get_clean();
            break;
        case 3 :
            ob_start;?>

                <div></div>

            <?php $content = ob_get_clean();
            break;
        default:
            # code...
            break;
    }
