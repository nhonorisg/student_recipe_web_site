<?php 
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
    <title>Resultat de la recherche</title>
    <link rel="stylesheet" type="text/css" href="../styles/feuille_style1.css"/>
</head>
<body>
    <?php
        require("header.php");
        $nomRec = $_GET["recette"];

        require("../connect.php");
        $connexion=mysqli_connect(SERVEUR, NOM, PASSE);
        mysqli_set_charset($connexion, "utf8");
        mysqli_select_db($connexion, BASE2);

        $requete = "SELECT * FROM `RECETTES` Where NomRecette like '%$nomRec%'";

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
            print "<h2>Résultat de la recherche $nomRec</h2>";
            print("<ul id='cptRec'>");
            while ($res = mysqli_fetch_object($resultat)) {
                echo("<article>");
                echo("<li>");
                echo("<a 
                        href='etapes_d_une_recette.php?nom=$res->NomRecette'>"
                    );
                    $img = "../images/";
                    echo("<img src=".$img."".$res -> images." /><br />" .$res -> NomRecette.
                    "</a>");
                echo("</li>");
                echo("</article>");
            }
            echo("</ul>");
        } else if (!$resultat){
            echo "la recette".$nomRec."n'est pas encore enregistré";
            exit;
        } else{  
            echo("<b> Erreur dans l'exécution de la requête. </b> <br/>");
            echo("<b>Messsage de mySQL: </b>").mysqli_error($connexion);
        }
        require("footer.php");
    ?>
</body>
</html>
