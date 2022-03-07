<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/feuille_style1.css"/>
        <title>Favoris</title>
    </head>
    <body>
        <?php
            require("header.php");
            require("../connect.php");
            $connexion = mysqli_connect(SERVEUR, NOM, PASSE);
            $encodage = mysqli_set_charset($connexion, "utf8");
            $login = $_SESSION["m_login"];
            $requete = "SELECT * FROM RECETTES JOIN FAVORIS USING(NomRecette) WHERE FAVORIS.Login = '$login'";
            
            if (!$connexion) {
                echo("Desolé, connexion à ".SERVEUR." impossible\n");
                exit;
            }
            if (!mysqli_select_db($connexion,BASE2)) {
                echo("Désolé, accès à la BASE2 ". BASE2 ." impossible\n");
                exit;
            }
            $resultat = mysqli_query($connexion,$requete);
            if ($resultat){
                echo("<h2>Mes favoris</h2>");
                print("<ul id='cptRec'>");
                while ($res = mysqli_fetch_object($resultat)) {
                    echo'<article>';
                    echo("<li>");
                    echo("<a 
                        href='etapes_d_une_recette.php?nom=$res->NomRecette'>"
                    );
                    $img = "../images/";
                    echo("<img src=".$img."".$res -> images." /><br />" .$res -> NomRecette.
                    "</a>");
                    echo("</li>");
                    echo'</article>';
                }
                echo"</ul>";
            }else{
                echo("<b> Erreur dans l'exécution de la requête. </b> <br/>");
                echo("<b>Messsage de mySQL: </b>").mysqli_error($connexion);
            }
        require("footer.php")
        ?>
    </body>
</html>