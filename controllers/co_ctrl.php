<?php

$title = 'Erreur de connexion';


//require('co_bdd.php');

//autoload fonctionne pas
//function monautoload_stagiaire($class) {
//    require '../class/'.$class.'.php';
//}
//spl_autoload_register('monautoload_stagiaire');



//variable du formulaire de connexion
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdp = htmlspecialchars($_POST['mdp']);


require('../models/AgentsManager.php');
$AgentManager = new AgentsManager();
//affecter des variables avec les getters des attributs
$data = $AgentManager->getAgents($pseudo);


require('../class/agents.php');
$Agent = new Agents();
$mot_de_passe_a = $Agent->get_mot_de_passe_a();
$pseudo_a = $Agent->get_pseudo_a();


//comparaison pass du formulaire de connexion
//$mdpcorrect = password_verify($_POST['mdp'], $Agent_mdp);

//dirige vers la page suivant la connexion ou renvoie à l'index pour mauvais mot de passe/pseudo
//if ($mdp == '$2y$10$X7sGTNP7QxM5lh9z8v8HEujqcV9St9up59cYnGEspFvqk4xRp8ulu') {
if (password_verify($mdp, $data['mot_de_passe_a'])){
    session_start();
    $_SESSION['id_agents'] = $data['id_agents'];
    $_SESSION['pseudo'] = $pseudo;
    $_SESSION['niveau_accreditation_a'] = $data['niveau_accreditation_a'];
    set_time_limit(30);
    echo 'Vous êtes connecté ';
    header('Location:../views/form_recherche.php');

    //header('Location:../marche.php');
} else {
    /**
     * verification connexion
     */
    echo 'Mauvais pseudo et/ou mot de passe';
    //header('Location:../index.php');
}

?>


<?php require('../views/template/base.php'); ?>