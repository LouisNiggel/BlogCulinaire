<?php
    session_start();
    if(isset($_SESSION["user"])): ?>
        <h1>Profil de <?= $_SESSION["user"]["email"] ?></h1>
        <p>Rôle : <?= $_SESSION["user"]["roles"] ?></p>
        <a href="deconnexion.php">Déconnexion</a>
    <?php endif;
?>
