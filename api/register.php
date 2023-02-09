<?php
include("./includes/db.php");
include("./includes/helpers.php");

if (isset($_POST)) {

    $username = isset($_POST['username'])  ?  trim(mysqli_real_escape_string($db_connection, $_POST['username'])) : null;
    $password = isset($_POST['password'])  ?  mysqli_real_escape_string($db_connection, $_POST['password'])       : null;
    $email    = isset($_POST['email'])     ?  trim(mysqli_real_escape_string($db_connection, $_POST['email']))    : null;

    $errors = array();

    $usernameRegex = "/[a-zA-Z0-9_-]{3,15}$/";
    $emailRegex = "/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/";
    $passwordRegex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";


    if (!preg_match($usernameRegex, $username)) {
        $errors["username"] = "Username no válido";
    }

    if (!preg_match($emailRegex, $email)) {
        $errors["email"] = "Email no válido";
    }

    if (!preg_match($passwordRegex, $password)) {
        $errors["password"] = "Contraseña no válida";
    }

    if (count($errors) == 0) {
        #insertar user db
        try {
            $secPassword = password_hash(
                $password,
                PASSWORD_BCRYPT,
                ["cost" => 10]
            );
            $sql_query = "INSERT INTO users VALUES(NULL, '$username', '$email', '$secPassword', 'date()' )";
            $save = mysqli_query($db_connection, $sql_query);
            $_SESSION["register_success"] = "Usuario creado satisfactoriamente!";
        } catch (Exception $e) {

            $_SESSION["register_errors"]["insert"] = "<br> Fallo al coso del coso!! <br>";
        }
    } else {
        $_SESSION["register_errors"] = $errors;
    }
    header("Location: index.php");
}
