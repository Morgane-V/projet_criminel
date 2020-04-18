<?php require('views/template/base.php'); 
$title = 'Accueil';
?>

<!DOCTYPE html>
<html lang="fr">



</head>
<body>
    
    <!--formulaire de connexion-->
    <div class="connexion">
        <form method="POST" action="controllers/co_ctrl.php">
        <h1 class="h3 mb-3 font-weight-normal">Connectez vous</h1>
            <div class="form-group">
                <input type="pseudo" id="inputPseudo" class="text-center" name="pseudo" placeholder="Pseudo" required autofocus>
            </div> 
            <div class="form-group">
                <input type="password" id="inputPassword" class="text-center" name="mdp" placeholder="Mot de passe" required>
            </div>
            <button type="submit" class="btn btn-dark">Se connecter</button>
        </form>
    </div>

</body>
</html>


