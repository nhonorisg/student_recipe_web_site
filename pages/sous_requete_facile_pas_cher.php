<?php
    session_start();
    require("header.php");
    if (isset($_SESSION['authenticated']) && ($_SESSION['authenticated'])){
        require("action.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les sous requêtes</title>
    </head>
    <body>
        <?php
            require("../connect.php");
            $connexion=mysqli_connect(SERVEUR, NOM, PASSE);
            mysqli_set_charset($connexion, "utf8");
            mysqli_select_db($connexion, BASE2);

            $requete = "SELECT * from RECETTES JOIN ETAPES USING(NomRecette) 
                WHERE RECETTES.Cout IN ('Bon marché', 'Très bon marché')
                AND NomRecette IN (SELECT  NomRecette 
                    FROM (SELECT NomRecette , COUNT(ETAPES.Etape) as nbetapes 
                    FROM ETAPES GROUP BY NomRecette
                    HAVING nbetapes <= 4) as recettes_faciles)";

            $resultat = mysqli_query($connexion, $requete);
            if (!$connexion){
                echo("Desolé, connexion à ".SERVEUR." impossible\n");
                exit;
            }

            if (!mysqli_select_db($connexion, BASE2)){
                echo("Désolé, accès à la base".BASE2."impossible \n");
                exit;
            }

            if ($resultat){
                print "<h2>Recettes pas cher et facile à préparer</h2>";
                echo "<table border = 'solid'";
                while ($res = mysqli_fetch_object($resultat)) {
                    echo("<tr>
                            <td>".$res ->NomRecette."</td>
                            <td>".$res ->Difficulte."</td>
                            <td>".$res ->Cout."</td>
                            <td>".$res ->Temps_Preparation."</td>
                            <td>".$res ->Temps_Cuisson."</td>
                            <td>".$res ->date_publication."</td>
                            <td>".$res ->Etape."</td>
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