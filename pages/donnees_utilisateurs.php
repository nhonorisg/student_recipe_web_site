<?php
    session_start();
    require("header.php");
?>
<!DOCTYPE html>
<?php session_start(); ?>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/feuille_style1.css" />
        <title>Mes Données</title>
    </head>
    <body>
        <h2>Mes données personnelles</h2>
        <?php
            require("../connect.php");
            $connexion = mysqli_connect(SERVEUR, NOM, PASSE);
            $encodage = mysqli_set_charset($connexion, "utf8");
            $login = $_SESSION["m_login"];
            $requete = "SELECT * FROM INDIVIDUS WHERE login ='$login'";
            
            if (!$connexion) {
                echo("Desolé, connexion à ".SERVEUR." impossible\n");
                exit;
            }
            if (!mysqli_select_db($connexion,BASE2)) {
                echo("Désolé, accès à la BASE2 ". BASE2 ." impossible\n");
                exit;
            }
            $resultat = mysqli_query($connexion, $requete);
            if ($resultat){
                while ($res = mysqli_fetch_object($resultat)) {
                    echo("<p class='user'> Nom: ".$res -> NomInd."</p>");
                    echo("<p class='user'> Prenom: ".$res -> prenomInd."</p>");
                    echo("<p class='user'> Login: ".$res -> Login."</p>");
                }
            }else{
                echo("<b> Erreur dans l'exécution de la requête. </b> <br/>");
                echo("<b>Messsage de mySQL: </b>").mysqli_error($connexion);
            }
            require("footer.php");
        ?>
    </body>
</html>