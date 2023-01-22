<?php require_once("helpers.php"); ?>

<!-- SIDE BAR -->
<aside id="sidebar">
    <div id="login" class="block-aside">
        <h3>Identificate</h3>
        <form action="login.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input type="submit" name="submit" value="Entrar">
        </form>
    </div>
    <div id="register" class="block-aside">

        <h3>Regístrate</h3>

        <form action="register.php" method="POST">

            <label for="username">Username</label>
            <input type="text" name="username" required>
            <?php echo isset($_SESSION["register_errors"]["username"]) ? mostrarError($_SESSION["register_errors"], "username") : "" ?>

            <label for="email">Email</label>
            <input type="email" name="email" required>
            <?php echo isset($_SESSION["register_errors"]["email"])    ? mostrarError($_SESSION["register_errors"], "email")    : "" ?>

            <label for="password">Contraseña</label>
            <input type="password" name="password" required>
            <?php echo isset($_SESSION["register_errors"]["password"]) ? mostrarError($_SESSION["register_errors"], "password") : "" ?>

            <input type="submit" name="submit" value="Entrar">

            <?php clearErrors() ?>
        </form>
    </div>
</aside>
<div id="container">