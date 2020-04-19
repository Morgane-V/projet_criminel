<?php

require('../views/template/base.php');

//infos entré dans le formulaire de recherch
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);



session_start();

//vérification si la session fonctionne bien 
echo 'Vous êtes connecté, votre id est le '.$_SESSION['id_agents'].'<br/>';
echo ' et votre accréditation est de rang '.$_SESSION['niveau_accreditation_a'].'<br/>';


//niveau accréditation de l'agent sortant de la bdd
$accredit_a = $_SESSION['niveau_accreditation_a'];


//autoload
//function monautoload_stagiaire($class) {
//    require '../class/'.$class.'.php';
//}
//spl_autoload_register('monautoload_stagiaire');


require('../class/criminels.php');
$crimi = new Criminels();
$nom_r = $crimi->get_nom_r();
$prenom_r = $crimi->get_prenom_r();
$id_r = $crimi->getId_r();

require('../class/Acolytes.php');
$acolyte = new Acolytes();
//$id_r = $acolyte->get_recherches_id_r();
$id_r1 = $acolyte->get_recherches_ir_r1();

require('../models/CriminelsManager.php');
$criminel = new CriminelsManager;
$mon_criminel_trouve = $criminel->NotAllInfos($nom, $prenom);
$all_info_crimi = $criminel->AllInfos($nom, $prenom);
$infos_acolyte = $criminel->AcolyteInfos($id_r, $id_r1);



//Selection du criminel recherché dans la bdd
if($accredit_a < 3 ) {
    /**
     * toutes les infos ici pour les accréditation 1 et 2
     */


    //selection infos criminel
    echo 'Voici les information concernant le criminel seulement';

    //affichage infos criminel
    echo '<pre>';
    print_r ($all_info_crimi);
    echo '</pre>';


    //selection acolyte du criminel
    echo 'Voici la liste de acolytes du criminel recherché';

    echo '<pre>';
    print_r ($infos_acolyte);
    echo '</pre>';



    //selection condamnations du criminel
    echo 'Voici les informations sur les condamnation du criminel recherché';

    //affichage infos criminel
    //echo 'la recherche fonctionne pour l\'accréditation 3';
    echo '<pre>';
    print_r ($infos_condamnation);
    echo '</pre>';

    //selection des témoignages le signalant




} else {

    echo 'la recherche fonctionne pour l\'accréditation 3';
    echo '<pre>';
    print_r ($mon_criminel_trouve);
    echo '</pre>';
    //header('Location:../views/template/fiche_criminel.php');
}