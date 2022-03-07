<?php 
    require("header.php");
    if (isset($_SESSION['authenticated']) && ($_SESSION['authenticated'])){
        require("action.php");
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/feuille_style2.css" />
        <title>Création compte</title>
    </head>
    <body>
        <h1 id='titre_avance'>Création de votre compte</h1>
        <form id="form_conn" method="POST" action="insertion_utilisateurs.php">
            <label class="position" for = "nom">Votre nom</label>
            <input class="position" type="text" name="nom" id = "nom"/>
            <label class="position" for = "prenom">Votre Prenom</label>
            <input class="position" type="text" name="prenom" id = "prenom"/>
            <label class="position" for = "login">Votre pseudo</label>
            <input class="position" type="text" name="login" id = "login"/>
            <label class="position" for = "pwd">Votre mot de passe</label>
            <input class="position" type="password" name="pwd" id = "pwd"/>
            <input class="position" id="Creer" type="submit" value="Créer un compte"/>
        </form>
    </body>
    <?php
        require("footer.php");
    ?>
</html>