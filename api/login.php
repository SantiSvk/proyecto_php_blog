<?php
include("./includes/db.php");

if (isset($_POST)) {

    # ---- POST INFO ---- #
    $email = isset($_POST["email"]) ? $_POST["email"] : null;
    $password = isset($_POST["password"]) ? $_POST["password"] : null;

    #-----Imaginate hacer sql bien ----#
    $sql_query = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($db_connection, $sql_query);
    $result = mysqli_fetch_assoc($query);

    if (mysqli_num_rows($query) == 1) {
        $verify = password_verify($password, $result["password"]);
        if ($verify) {
            $_SESSION['user'] = $result;
        } else {
            $_SESSION['login_error'] = "Login incorrecto";
        }
    } else {
        $_SESSION['login_error'] = "Login incorrecto";
    }
    header("Location: index.php");
}
