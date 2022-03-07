<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Casserolon</title>
        <link rel="stylesheet" type="text/css" href="../styles/feuille_style2.css" />
    </head>
    <body>
        <?php require("header.php")?>
        <h1 id='titre_avance'>Faire une recherche avancé</h1>
        <form id="form_conn" action="requetes_mono.php" method="POST">
            <label class="position" for="NomRecette">Nom de la recette:</label>
            <input class="position" type="text" name="NomRecette" placeholder="recherche">
            Temps Cuisson:
            <select class="position" name="temps_cuisson">
                <option value="" ->*</option>
                <option value="plus10" ->plus de 10 min</option>
                <option value="moins10" ->moins de 10 min</option>
            </select>
            Temps de préparation:
            <select class="position" name="temps_preparation">
                <option value="" ->*</option>
                <option value="plus10" ->plus de 10 min</option>
                <option value="moins10" ->moins de 10 min</option>
            </select>
            <input class="position" type="submit" name="btAction" value="Rechercher" />
            <input class="position" type="reset" name="btAnnuler" value="Annuler" /> 
        </form>
        <a href="requetes_mono.php"></a>
    </body>
    <?php
        require("footer.php");
    ?>
</html>