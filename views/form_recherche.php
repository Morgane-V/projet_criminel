<?php
    require('template/base.php'); 
    session_start();

    echo 'Vous êtes connecté et votre id est le '.$_SESSION['id_agents'].'<br/>';
    echo ' et votre accréditation est de rang '.$_SESSION['niveau_accreditation_a'];
    $title = 'recherche criminel';
?>

<?php ob_start(); ?>
    <!--formulaire de recherche-->
        <div class="connexion">
            <form method="POST" action="../controllers/recherche_ctrl.php">
            <h1 class="h3 mb-3 font-weight-normal">Rechercher un criminel</h1>
                <div class="form-group">
                    <input type="text" id="inputNom" class="text-center" name="nom" placeholder="Nom">
                </div> 
                <div class="form-group">
                    <input type="text" id="inputPrenom" class="text-center" name="prenom" placeholder="Prénom">
                </div>
                <button type="submit" class="btn btn-dark">Rechercher</button>
            </form>
        </div>



