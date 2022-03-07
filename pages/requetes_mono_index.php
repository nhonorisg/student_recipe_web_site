<?php
    session_start();
    
?>
<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./styles/feuille_style1.css" />
    </head>
    <body>
        <?php
            require("connect.php");
            $connexion = mysqli_connect(SERVEUR, NOM, PASSE);
            $encodage = mysqli_set_charset($connexion, "utf8");
            $nomrec = $_POST["NomRecette"];
            $T_cuisson = $_POST["temps_cuisson"];
            $T_prepa = $_POST["temps_preparation"];
            $requete = "SELECT * FROM `RECETTES`";
            
            if (!$connexion) {
                echo("Desolé, connexion à ".SERVEUR." impossible\n");
                exit;
            }
            if (!mysqli_select_db($connexion,BASE2)) {
                echo("Désolé, accès à la BASE2 ". BASE2 ." impossible\n");
                exit;
            }
            
            echo("<h2>Recettes</h2>");
            echo "<ul id='cptRec'>";
            $resultat =  mysqli_query($connexion,$requete);
            if ($resultat){ 
                while ($res = mysqli_fetch_object($resultat)) {
                    echo'<article>';
                    echo("<li>");
                    echo("<a 
                        href='pages/etapes_d_une_recette.php?nom=$res->NomRecette'>"
                    );
                    $img = "images/";
                    echo("<img src=".$img."".$res -> images." /><br />" .$res -> NomRecette."</a>");
                    echo("</li>");
                    echo'</article>';
                }
                echo"</ul>";
            }else{ 
                    echo("<b> Erreur dans l'exécution de la requête. </b> <br/>");
                    echo("<b>Messsage de mySQL: </b>").mysqli_error($connexion);
            }
        ?>
    </body>
</html>