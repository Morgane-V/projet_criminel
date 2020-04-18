<?php

$dsn = 'mysql:dbname=crimi_projet';
$user = 'stagiaire';
$password = 'stagiairealaji';

//connexion bdd
try {
    $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

    ?>