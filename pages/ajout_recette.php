<?php 
    session_start();
    require("header.php");
    

    if (isset($_SESSION['authenticated']) && ($_SESSION['authenticated'])){
        echo('<!DOCTYPE html>
            <html lang="fr">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Proposer une recette</title>
                    <link rel="stylesheet" type="text/css" href="../styles/feuille_style2.css" />
                </head>
                <body>
                    <form id="form_conn" method="POST" action="insertion_recettes.php">
                        <label class="position" for = "nomrec">Nome de la recette</label>
                        <input class="position" type="text" name="nomrec" id = "nomrrec"/></br>
                        
                        <select class="position" name="difficulte" id="choix_diff">
                            <option value = "">Choisissez un niveau de difficulté</option>
                            <option value="très facile">Très Facile</option>
                            <option value = "facile">Facile</option>
                            <option value = "moyen">Moyen</option>
                            <option value = "difficile">Difficile</option>
                        </select>
                
                        <select class="position" name="cout" id="choix_cout">
                            <option value = "">Choisissez un cout</option>
                            <option value="très bon marché">Très bon marché</option>
                            <option value = "bon marché">Bon marché</option>
                            <option value = "moyen">Moyen</option>
                            <option value = "cher">Cher</option>
                        </select>
                        <label class="position" for = "T_prep">Temps de préparation</label>
                        <input class="position" type="time" step = "1" name="T_prep" id = "T_prep"/></br>
                
                        <label class="position" for = "T_cui">Temps de cuisson</label>
                        <input class="position" type="time"  step = "1" name="T_cui" id = "T_cui"/></br>

                        <label class="position" for = "num_etape">Temps de cuisson</label>
                        <input class="position" type="nombre" name="num_etape" id = "num_etape"/></br>

                        <label class="position" for = "etape">Temps de cuisson</label>
                        <input class="position" type="text" name="etape" id = "etape"/></br>
                        
                        <label class="position" for = "image">Choisir une image</label>
                        <input class="position" type="file" id="image" name="image" accept="image/png, image/jpeg">
                
                        <input class="position" id="Creer" type="submit" value="Ajouter"/>
                    </form>
                </body>');
            require("footer.php");
        echo("</html>");
        exit();
    }
    if (!(isset($_SESSION['authenticated'])) || !($_SESSION['authenticated'])){
        header("Location: connexion.php");
        exit();
    }
?>