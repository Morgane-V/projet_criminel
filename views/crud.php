<?php

    require('template/base.php');
    session_start();

    echo 'Vous êtes connecté, votre id est le '.$_SESSION['id_agents'];
    echo ' et votre accréditation est de rang '.$_SESSION['niveau_accreditation_a'];
    $title = 'modification des données';

    if ($_SESSION['niveau_accreditation_a'] == 1) { 
        echo ' PEUX BOSSER LE CRUD CA MARCHE LE IF';?>

//ob_start fonctionne pas
//liens pour saisir et modifier des infos de la bdd
<html>
    <div class="lien_crud">
            <a href="">Entrer de nouvelles informations</a>
            <br/>
            <a href="">Mettre à jour des informations</a>
        </div>
</html>

<?php 
    } else {
        echo ' Vous n\'avez pas le niveau d\'accréditation requis pour pouvoir accéder à la base de données';
    }

