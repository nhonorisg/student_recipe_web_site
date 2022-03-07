<?php
    session_start(); // ON LANCE LA SESSION
    require("header.php");

    if (isset ($_SESSION['authenticated'] ) && ($_SESSION['authenticated'])) { //si l'utilisateur n'est pas connecté :
            // on redirige vers la page de connexion
            header("Location: connexion.php");
    }
    else{ // on récupère les informations envoyées par le formulaire
        $nomrec = $_POST['nomrec']; 
        $difficulte = $_POST['choix_diff']; 
        $cout = $_POST['choix_cout'];
        $T_prepa = $_POST['T_prep'];
        $T_cuiss = $_POST['T_cui'];
        $login = $_SESSION["m_login"]; 
        date_default_timezone_set('Europe/Paris');
        $date_pub = date("d-m-Y");

        // on s'assure que l'utilisateur a bien fourni le nom de la recette 
        if ( (strlen($nomrec)==0))  { 
                // on redirige vers la page du formulaire
            header("Location: ajout_recette.html");
            exit();
        }
        else {// on se connecte à la B.D.
            require("../connect.php");
            $connexion = mysqli_connect(SERVEUR,NOM,PASSE);
            if (!$connexion || !mysqli_select_db($connexion,BASE2)) {
                echo "Erreur de connexion à la base de données";
            }
            else {
                $requete = "INSERT INTO RECETTES (NomRecette, Difficulte ,Cout ,Temps_Preparation, Temps_Cuisson, date_publication, Login) 
                VALUES ('$nomrec', '$difficulte', '$cout', '$T_prepa', '$T_cuiss', '$date_pub', '$login')";
                $res =  mysqli_query($connexion,$requete);
                $resultat =  mysqli_query($connexion,$requete);
                if ($resultat){
                    echo "<a href  = '../index.php'></a>
                    <p>votre requette a été bien insérée</p> ";
                }else{
                    echo ("Problème lors de l'insertion\n").mysqli_error($connexion);
                } 
            }
        }
    }
?>