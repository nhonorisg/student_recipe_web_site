<?php

    session_start(); // ON LANCE LA SESSION

    if (!(isset($_POST))) { //si les informations n'ont pas été envoyées du formulaire
            // on redirige vers la page de connexion
            header("Location: connexion.php");
            exit();
    }
    else{ // on récupère les informations envoyées par le formulaire
        $login = $_POST['login']; 
        $password = $_POST['pwd']; 
        // on s'assure que l'utilisateur a bien fourni un login et un mot de passe 
        if ( (strlen($login)==0) || (strlen($password)==0) )  { 
                // on redirige vers la page de connexion
            header("Location: connexion.php");
            exit();
        }
        else {// on se connecte à la B.D.
            require("../connect.php");
            $connexion = mysqli_connect(SERVEUR,NOM,PASSE);
            if (!$connexion || !mysqli_select_db($connexion,BASE2)) {
                echo "Erreur de connexion à la base de données";
            }
            else {
                // on interroge la table users avec les informations du formulaire 
                $requete = "SELECT pass, prenomInd FROM INDIVIDUS WHERE login='$login'";
                $res =  mysqli_query($connexion,$requete);
                if (mysqli_num_rows($res) == 0) {
                    // l'utilisateur n'est pas mémorisé dans la BASE, 
                    //on redirige vers la page de connexion
                    header("Location: creation_compte.php");
                    exit();
                } 
                else { // il y a un enregistrement ; on vérifie le mot de passe
                    require("password.php");
                    $user = mysqli_fetch_object ($res);
                    if (password_verify($password,$user->pass)){
                        //on inscrit des valeurs en variables de session
                        $_SESSION['authenticated'] = true;
                        $_SESSION["m_login"] = $login; 
                        $_SESSION["m_prenom"] = $user->prenomInd; 
                        header("Location: ../index.php");
                    }
                    else{
                        // le mot de passe n'est pas correct 
                        //on redirige vers la page de connexion
                        header("Location: connexion.php");
                        exit();
                    }
                }
            }
        }
    }
?>