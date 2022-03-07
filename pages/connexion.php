<?php
    session_start();
    require("header.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire d’identification</title>
        <link rel="stylesheet" type="text/css" href="../styles/feuille_style2.css" />
    </head>
    <body>
        <?php 
            if ( isset ($_SESSION['authenticated'] ) && ($_SESSION['authenticated']) ) {
                echo("  <p>Vous êtes déjà connecté</p>
                        <a href  = '../index.php'>Accéder à mon compte</a>
                ");  
            }else{
                echo('
                    <form id="form_conn" action="login.php" method="POST">
                        <label class="position" for = "login">Login</label>
                        <input class="position" type="text" name="login" id = "login"/>
                        <label class="position" for = "pwd">Mot de passe</label>
                        <input class="position" type="password" name="pwd" id="pwd"/>
                        <input class="position" id="connecter" type="submit" value="Se connecter"/>
                        <p>OU</p>
                        <a id="creation" href="creation_compte.php">Créer votre compte</a>
                    </form>');
            }
        ?>   
    </body>
    <?php
        require("footer.php");
    ?>
</html>
