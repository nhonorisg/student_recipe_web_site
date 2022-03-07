<?php
       // Démarrage ou restauration de la session
        session_start();
     // On le vide le hachage des variables de sessions
        $_SESSION = array();
       // On détruit la session
        session_destroy();
    // Destruction du hachage de session
        unset($_SESSION);
?>
<html>
    <body>
        <p> Déconnecté.. </p> 
        <?php header("Location: ../index.php");?>   
    </body>
</html>