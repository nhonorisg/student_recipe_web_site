<?php
    require("header.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            require("../connect.php");
            require("password.php");
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $login = $_POST["login"];
            $pass = $_POST["pwd"];
            $cleMdP = password_hash($pass,PASSWORD_BCRYPT);
            $requete="INSERT INTO INDIVIDUS (NomInd, prenomInd, Login ,pass) 
            VALUES ('$nom', '$prenom', '$login', '$cleMdP')";
            $connexion = mysqli_connect(SERVEUR, NOM, PASSE);
            if(!$connexion || !mysqli_select_db($connexion,BASE2)){
                echo "connexion impossible!";
            }else {
                $resultat =  mysqli_query($connexion,$requete);
                if ($resultat){
                    echo "<p>Votre compte a été bien crée</p> ";
                    echo"<a href = 'connexion.php'>Se Connecter</a>";
                }else{
                    echo ("Problème lors de l'insertion\n").mysqli_error($connexion);
                } 
            }
            require("footer.php");
        ?>
    </body>
</html>
    
