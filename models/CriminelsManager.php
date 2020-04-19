fichier traitement infos criminels
<?php

class CriminelsManager {


    //selection des infos pour accréditation 3
    public function NotAllInfos($nom, $prenom) {

        $db = $this->dbConnect();

        $not_all_info = "SELECT nom_photo_r, nom_r, prenom_r, derniere_adresse_r  FROM recherches
        WHERE nom_r='$nom' OR prenom_r='$prenom' ";
        $result=$db->prepare($not_all_info);
        $result->execute();
        $mon_criminel_trouve = $result->fetchAll();

        return $mon_criminel_trouve;
    }

    public function AllInfos($nom, $prenom) {

        $db = $this->dbConnect();

        $sql1 = "SELECT nom_r, prenom_r, date_naissance_r, signe_distinctif_r, profil_psy_r, nom_photo_r, informations_r, derniere_adresse_r FROM recherches
        WHERE nom_r='$nom' OR prenom_r='$prenom' ";
        $result=$db->prepare($sql1);
        $result->execute();
        $all_info_crimi = $result->fetchAll();

        return $all_info_crimi;
    }

    public function AcolyteInfos($id_r, $id_r1) {

        $db = $this->dbConnect();

        $sql2 = "SELECT nom_r, prenom_ FROM recherches INNER JOIN acolytes WHERE $id_r = acolytes.'$id_r1' ";
        $result2=$db->prepare($sql2);
        $result2->execute();
        $infos_acolyte = $result2->fetchAll();

        return $infos_acolyte;
    }

    public function Condamnation() {

        $db = $this->dbConnect();

        $sql3 = "SELECT libelle_affaire_c, date_c, duree_c, date_liberation_c FROM condamnations WHERE recherches_id_r='2' ";
        $resultat=$db->prepare($sql3);
        $resultat->execute();
        $infos_condamnation = $resultat->fetchAll();

        return $infos_condamnation;
    }





//connexion bdd
    public function dbConnect() {
        $db = new PDO('mysql:hist=localhost;dbname=crimi_projet','stagiaire', 'stagiairealaji');
        return $db;
    }
}