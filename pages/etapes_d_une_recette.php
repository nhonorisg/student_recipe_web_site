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
        <link rel="stylesheet" type="text/css" href="../styles/feuille_style1.css"/>
        <title>Etapes</title>
    </head>
    <body>
        <?php
            require("../connect.php");
            $connexion = mysqli_connect(SERVEUR, NOM, PASSE);
            $encodage = mysqli_set_charset($connexion, "utf8");
            $nom = $_GET['nom'];
            $etapes = "SELECT * FROM RECETTES JOIN ETAPES USING(NomRecette) where NomRecette = '$nom'";
            $ingredient = "SELECT NomIngredient, Quantite FROM COMPOSITIONS WHERE NomRecette = '$nom'";
            $recette = "SELECT * FROM RECETTES  where NomRecette = '$nom'";
            
            if (!$connexion) {
                echo("Desolé, connexion à ".SERVEUR." impossible\n");
                exit;
            }
            if (!mysqli_select_db($connexion,BASE2)) {
                echo("Désolé, accès à la BASE2 ". BASE2 ." impossible\n");
                exit;
            }

            $res_recettes = mysqli_query($connexion, $recette);
            if ($res_recettes){  
                $img = "../images/";
                while ($res = mysqli_fetch_object($res_recettes)) {
                    echo("
                    <div id = 'data_recette'> 
                        <img src=".$img."".$res -> images." id = 'image'/>
                        <div class = 'donnees_recettes'>
                            <table>
                                <tr><th colspan = '2' class = 'titres'>".$res -> NomRecette."</th> </tr>
                                <tr><td class = 'titres'><b>Difficulté: </b></td><td>".$res -> Difficulte." </td></tr>
                                <tr><td class = 'titres'><b>Coût:</b></td><td>".$res -> Cout."</td></tr>");
                                $var1 = strtotime($res -> Temps_Preparation);
                                $var2 = strtotime($res -> Temps_Cuisson);
                                echo("<tr><td class = 'titres'><b>Temps de préparation:</b></td><td>".date('i',$var1)." minutes</td></tr>
                                <tr><td class = 'titres'><b>Temps de cuisson:</b></td><td>".date('i',$var2)." minutes</td></tr>");
                                echo("<tr><td colspan = '2' class = 'titres'><b>Publiée le </b>".$res -> date_publication."</td></tr>
                            </table>
                        </div>
                    </div>");
                }
            }

            $res_ingredient = mysqli_query($connexion, $ingredient);
            if ($res_ingredient){
                echo("<div id ='preparation'>
                        <table class='ingredients'>
                            <thead>
                                <tr><th class = 'titres'>Ingredients:</th></tr>
                            </thead>");
                while ($res = mysqli_fetch_object($res_ingredient)) {
                    echo("<tr>");
                    echo("<td>".$res -> NomIngredient."</td> <td>".$res -> Quantite." </td>");
                    echo("</tr>");
                }
                echo("</table>");
            }

            $res_etapes = mysqli_query($connexion,$etapes);
            if ($res_etapes){
                echo("<ul class = 'etapes'>
                <li class = 'titres'><b>Etapes:</b></li></br>");
                while ($res = mysqli_fetch_object($res_etapes)) {
                    echo("<li>");
                    echo("".$res -> Etape." <br />");
                    echo("</li>");
                }
                echo("</ul>
                </div>");
            }
            if (!$res_ingredient || !$res_etapes){
                echo("<b> Erreur dans l'exécution de la requête. </b> <br/>");
                echo("<b>Messsage de mySQL: </b>").mysqli_error($connexion);
            }
        ?>
    </body>
</html>