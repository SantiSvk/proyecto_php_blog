<?php
include("./includes/db.php");

if (isset($_POST)) {

    $username = isset($_POST['username'])  ?  mysqli_real_escape_string($db_connection, $_POST['username']) : null;
    $password = isset($_POST['password'])  ?  mysqli_real_escape_string($db_connection, $_POST['password']) : null;
    $email    = isset($_POST['email'])     ?  mysqli_real_escape_string($db_connection, $_POST['email'])    : null;

    $errors = array();

    $usernameRegex = "/[a-zA-Z0-9_-]{3,15}$/";
    $emailRegex = "/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/";
    $passwordRegex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";

    if (preg_match($usernameRegex, $username)) {
        echo "<br>Username válido<br>";
    } else {
        $errors["username"] = "Username no válido";
    }

    if (preg_match($emailRegex, $email)) {
        echo "<br>Email válido<br>";
    } else {
        $errors["email"] = "Email no válido";
    }

    if (preg_match($passwordRegex, $password)) {
        echo "<br>Contraseña válida<br>";
    } else {
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
            $sql_query = "INSERT INTO users VALUES(NULL, '$username', '$email', '$secPassword', NULL )";
            $save = mysqli_query($db_connection, $sql_query);
        } catch (Exception $e) {
            $_SESSION["register_errors"]["insert"] = "<br> Fallo al coso del coso!! <br>";
            echo "<br>" . $_SESSION["register_errors"]["insert"] . "<br>";
        }
    } else {
        $_SESSION["register_errors"] = $errors;
        header("Location: index.php");
    }
}


var_dump($username);
echo "<br>";
var_dump($secPassword);
echo "<br>";
var_dump($email);
echo "<br>";
var_dump($errors);
