<?php 

include '../partials/header.php'; 
session_start();

?>

<div class="wrapper">
    <h1>Profil de <?= $_SESSION['user']['name'] ?></h1>
    <h2>Votre adresse mail : <?= $_SESSION['user']['email'] ?></h2>

    <img id='avatar' class='profile-avatar' src="../uploads/avatar/myh.jpg" alt="">
</div>

<?php include '../partials/footer.php' ?>
