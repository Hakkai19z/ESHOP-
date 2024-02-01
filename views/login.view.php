<?php include "../partials/header.php"; ?>

<div class="wrapper">

    <h1>Login</h1>

    <form action="signup-form" method="POST">
        <input type="email" name="email" placeholder="Votre email ...">
        <input type="text" name="password" placeholder="Votre mot de passe ...">
        <input type="submit" name="submit" value="Se Connectez" >
        <input type="submit" name="submit" value="Crée un compte" href="./views/signup.view.php">

    </form>

</div>

<?php include "../partials/footer.php"; ?>