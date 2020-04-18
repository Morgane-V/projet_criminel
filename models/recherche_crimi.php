<?php

    require('../controllers/co_bdd.php');
    require('../views/template/base.php');

//infos entré dans le formulaire de recherch
    $nom_r = htmlspecialchars($_POST['nom']);
    $prenom_r = htmlspecialchars($_POST['prenom']);



    session_start();

    //vérification si la session fonctionne bien 
    echo 'Vous êtes connecté, votre id est le '.$_SESSION['id_agents'].'<br/>';
    echo ' et votre accréditation est de rang '.$_SESSION['niveau_accreditation_a'].'<br/>';
    

//niveau accréditation de l'agent sortant de la bdd
    $accredit_a = $_SESSION['niveau_accreditation_a'];


//autoload
    function monautoload_stagiaire($class) {
        require '../class/'.$class.'.php';
    }
    spl_autoload_register('monautoload_stagiaire');

    //$criminel = new Criminels;
    //$id_r = 'id_r';



//Selection du criminel recherché dans la bdd
    if($accredit_a < 3 ) {
        /**
         * toutes les infos ici pour les accréditation 1 et 2
         */


        //selection infos criminel
        echo 'Voici les information concernant le criminel seulement';
        $sql1 = "SELECT nom_r, prenom_r, date_naissance_r, signe_distinctif_r, profil_psy_r, nom_photo_r, informations_r, derniere_adresse_r FROM recherches
                WHERE nom_r='$nom_r' OR prenom_r='$prenom_r' ";

        $result=$dbh->prepare($sql1);
        $result->execute();
        $all_info_crimi = $result->fetchAll();

        //affichage infos criminel
        //echo 'la recherche fonctionne pour l\'accréditation 3';
        echo '<pre>';
        print_r ($all_info_crimi);
        echo '</pre>';


        //selection acolyte du criminel
        echo 'Voici la liste de acolytes du criminel recherché';
        $sql2 = "SELECT nom_r, prenom_ FROM recherches JOIN acolytes WHERE id_r LIKE acolytes.recherches_id_r1 ";

        $result2=$dbh->prepare($sql2);
        $result2->execute();
        $infos_acolyte = $result2->fetchAll();

        echo '<pre>';
        print_r ($infos_acolyte);
        echo '</pre>';



        //selection condamnations du criminel
        echo 'Voici les informations sur les condamnation du criminel recherché';

        $sql3 = "SELECT libelle_affaire_c, date_c, duree_c, date_liberation_c FROM condamnations WHERE recherches_id_r='2' ";

        $resultat=$dbh->prepare($sql3);
        $resultat->execute();
        $infos_condamnation = $resultat->fetchAll();

        //affichage infos criminel
        //echo 'la recherche fonctionne pour l\'accréditation 3';
        echo '<pre>';
        print_r ($infos_condamnation);
        echo '</pre>';

        //selection des témoignages le signalant




    } else {
        $not_all_info = "SELECT nom_photo_r, nom_r, prenom_r, derniere_adresse_r  FROM recherches
                        WHERE nom_r='$nom_r' OR prenom_r='$prenom_r' ";
        $result=$dbh->prepare($not_all_info);
        $result->execute();
        $mon_criminel_trouve = $result->fetchAll();

        echo 'la recherche fonctionne pour l\'accréditation 3';
        echo '<pre>';
        print_r ($mon_criminel_trouve);
        echo '</pre>';
        //header('Location:../views/template/fiche_criminel.php');
    }