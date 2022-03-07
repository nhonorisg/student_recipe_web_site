<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="styles/header_style.css"/>
        <title>casserolon</title>
    </head>
    <header>
        <?php 
            if ( isset ($_SESSION['authenticated'] ) && ($_SESSION['authenticated']) ){
                echo('<ul class ="logo">
                        <li> <a href="index.php" >CASSEROLON</a></li>
                    </ul>
                    <ul>
                        <li><a href="pages/ajout_recette.php">Proposer une recette</a></li>
                    </ul>
                    <ul class = "menu_user">
                        <li><a href="pages/donnees_utilisateurs.php">Mes Données</a></li></br>
                        <li><a href="pages/favoris.php">Mes recettes favoris</a></li></br>
                        <li><a href="pages/deconnect.php">Me déconnecter</a></li></br>
                    </ul>
                    <form action="pages/recherche_simple.php" method="GET">
                        <input id="search_bar" type="text" name="recette" placeholder="Rechercher une recette">
                        <input id="rechercher" type="submit" value="🔍" />
                        <input id="annuler" type="reset" value="Annuler" />
                    </form>
                    <a id="advanced_search" href="pages/formulaire_recherche.php">Recherche avancée</a>'
                );
            } else{
                echo('<ul class ="logo">
                        <li> <a href="index.php" >CASSERELON</a></li>
                    </ul>
                    <ul>
                        <li><a href="pages/connexion.php">Se Connecter</a></li>
                        <li><a href="pages/ajout_recette.php">Proposer une recette</a></li>
                    </ul>
                    <form action="pages/recherche_simple.php" method="GET">
                        <input id="search_bar" type="text" name="recette" placeholder="Rechercher une recette">
                        <input id="rechercher" type="submit" value="🔍" />
                        <input id="annuler" type="reset" value="Annuler" />
                    </form>
                    <a id="advanced_search" href="pages/formulaire_recherche.php">Recherche avancée</a>'
                );
            }
        ?>
    </header>
</html>