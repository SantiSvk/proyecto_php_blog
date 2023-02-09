<?php require("includes/db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Cocina</title>
</head>


<body>

    <!-- HEADER -->

    <header id="header">
        <div id="logo">
            <a href="index.php">
                Blog de Cocina
            </a>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="index.php"> Categoría 1 </a></li>
                <li><a href="index.php"> Categoría 2 </a></li>
                <li><a href="index.php"> Categoría 3 </a></li>
                <li><a href="index.php"> Categoría 4 </a></li>
                <li><a href="index.php"> Categoría 5 </a></li>
                <li><a href="index.php"> Sobre Mí </a></li>
                <li><a href="index.php"> Contacto </a></li>
                <?php if (isset($_SESSION['user'])) : ?>
                    <li class="welcome">
                        <h3>Hola <?= $_SESSION['user']['username'] ?></h3>
                    </li>
                <?php endif; ?>


            </ul>

        </nav>

        <div class="clearfix"></div>
    </header>