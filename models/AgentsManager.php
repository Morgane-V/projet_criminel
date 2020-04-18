Fichier traitement de la connexion
<?php

class AgentsManager {

    //selection info pour se connecter
    public function getAgents($pseudo) {

        $db = $this->dbConnect();

        $sql = "SELECT * FROM agents WHERE pseudo_a='$pseudo'";
        $result=$db->prepare($sql);
        $result->execute(array('pseudo' => $pseudo));
        $data = $result->fetch();

        return $data;

    }

    public function dbConnect() {
        $db = new PDO('mysql:hist=localhost;dbname=crimi_projet','stagiaire', 'stagiairealaji');
        return $db;
    }

}