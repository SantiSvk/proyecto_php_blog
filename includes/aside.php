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

        <?php if(isset($_SESSION["register_success"])):?>
            <div class="alert-success">
                <h3><?= $_SESSION["register_success"] ?></h3>
            </div>
        <?php endif;?>

        <form action="register.php" method="POST">

            <label for="username">Username</label>
            <input type="text" name="username" required
            style="
                <?php echo isset($_SESSION["register_errors"]["username"]) ? 
                "border-color: red; 
                border-radius: 3px" : 
                "" ?>"
                >

            <label for="email">Email</label>
            <input type="email" name="email" required
            style="
                <?php echo isset($_SESSION["register_errors"]["email"]) ? 
                "border-color: red; 
                border-radius: 3px" : 
                "" ?>"
                >

            <label for="password">Contraseña</label>
            <input type="password" name="password" required 
                style="
                <?php echo isset($_SESSION["register_errors"]["password"]) ? 
                "border-color: red; 
                border-radius: 3px" : 
                "" ?>"
                >

            <input type="submit" name="submit" value="Entrar">

            <?php clearErrors() ?>
        </form>
    </div>
</aside>
<div id="container">