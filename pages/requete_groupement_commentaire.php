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
        <title>Commentaires et Favoris</title>
    </head>
    <body>
        <?php
            require("../connect.php");
            $connexion=mysqli_connect(SERVEUR, NOM, PASSE);
            mysqli_set_charset($connexion, "utf8");
            mysqli_select_db($connexion, BASE2);

            $requete = "SELECT RECETTES.NomRecette, Difficulte, cout, Commentaire 
                FROM RECETTES JOIN COMMENTAIRES
                ON RECETTES.NomRecette = COMMENTAIRES.NomRecette
                GROUP BY NomRecette";
            
            $resultat = mysqli_query($connexion, $requete);
            if (!$connexion){
                echo("Desolé, connexion à ".SERVEUR." impossible\n");
                exit;
            }

            if (!mysqli_select_db($connexion, BASE2)){
                echo("Désolé, accès à la base".BASE2."impossible \n");
                exit;
            }

            // Affichage des comentaire par recette
            if ($resultat){
                print "<h2>Commentaire par recette</h2>";
                echo "<table border = 'solid'";
                while ($res = mysqli_fetch_object($resultat)) {
                    echo("<tr>
                            <td>".$res ->NomRecette."</td>
                            <td>".$res ->Difficulte."</td>
                            <td>".$res ->cout."</td>
                            <td>".$res ->Commentaire."</td>
                        </tr>");
                }
                echo "</table>";
            } else{  
                echo("<b> Erreur dans l'exécution de la requête. </b> <br/>");
                echo("<b>Messsage de mySQL: </b>").mysqli_error($connexion);
            }
            require("footer.php");
        ?>
    </body>
</html>
