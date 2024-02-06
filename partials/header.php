<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./views/style/style.css">
    <link rel="stylesheet" href="../views/style/style.css">
    <script src="./scripts/app.js" defer></script>

</head>

<body>

    <nav>

    <img src="./assets/icons/burger.png" class="burger-menu">

        <ul class="menu">
            <p class="close-menu">X</p>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="./views/contact.view.php">Contact</a></li>

            <?php if (isset($_SESSION['user']['logged']) && $_SESSION['user']['logged']): ?>
                <li><a href="./views/products.view.php">Produits</a></li>
                <li><a href="./views/profile.view.php">Profile</a></li>
                <li><a href="./views/logout.php">Logout</a></li>

            <?php else: ?>

                <li><a href="./views/login.view.php">Login</a></li>
                <li><a href="./views/signup.view.php">Signup</a></li>

            <?php endif ?>

        </ul>
    </nav>

    <div class="wrapper">