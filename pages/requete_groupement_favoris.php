<?php
    require("header.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Commentaires et Favoris</title>
    </head>
    <body>
        <?php
            require("../connect.php");
            $connexion=mysqli_connect(SERVEUR, NOM, PASSE);
            mysqli_set_charset($connexion, "utf8");
            mysqli_select_db($connexion, BASE2);

            $requete = "SELECT FAVORIS.Login, count(DISTINCT(NomRecette))as nombre_de_favoris
                FROM RECETTES JOIN FAVORIS
                USING(NomRecette)
                GROUP BY FAVORIS.Login";
            
            $resultat = mysqli_query($connexion, $requete);
            if (!$connexion){
                echo("Desolé, connexion à ".SERVEUR." impossible\n");
                exit;
            }

            if (!mysqli_select_db($connexion, BASE2)){
                echo("Désolé, accès à la base".BASE2."impossible \n");
                exit;
            }

            // Affichage du nombre de favoris par individus
            if ($resultat){
                print "<h2>Mes favoris</h2>";
                while ($res = mysqli_fetch_object($resultat)) {
                    echo("".$res ->nombre_de_favoris."");
                }
            } else{  
                echo("<b> Erreur dans l'exécution de la requête. </b> <br/>");
                echo("<b>Messsage de mySQL: </b>").mysqli_error($connexion);
            }
            require("footer.php");
        ?>
    </body>
</html>
