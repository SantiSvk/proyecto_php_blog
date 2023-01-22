<?php
include("./includes/db.php");
include("./includes/helpers.php");

if (isset($_POST)) {

    $username = isset($_POST['username'])  ?  $_POST['username'] : null;
    $password = isset($_POST['password'])  ?  password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 10]) : null;
    $email    = isset($_POST['email'])     ?  $_POST['email']    : null;


    $errors = array();

    if (!empty($username) && !is_numeric($username) && strlen($username) > 3) {
        echo "Username válido";
    } else {
        $errors["username"] = "Username no válido";
    }

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email válido";
    } else {
        $errors["email"] = "Email no válido";
    }

    if (!empty($password) && !is_numeric($password) && strlen($password) > 8) {
        echo "Contraseña válida";
    } else {
        $errors["password"] = "Contraseña no válida";
    }

    if (count($errors) == 0) {
        #insertar user db
        $sql_query = "INSERT INTO users VALUES(NULL, '$username', '$email', '$password' )";

        try {
            $save = mysqli_query($db_connection, $sql_query);
        } catch (Exception $e) {
            echo "<br>";
            var_dump(mysqli_error($db_connection));
            $_SESSION["register_errors"]["insert"] = "Fallo al coso del coso!!";
            echo "<br>" . $_SESSION["register_errors"]["insert"] . "<br>";
        }

        if (!mysqli_errno($db_connection)) {
            echo "no error!";
        } else {
        }
        
    } else {
        $_SESSION["register_errors"] = $errors;
        header("Location: index.php");
    }
}
var_dump($username);
echo "<br>";
var_dump($password);
echo "<br>";
var_dump($email);
echo "<br>";
var_dump($errors);








// $compare_query = mysqli_query($db_connection, "
//     SELECT * FROM users u WHERE $username = u.username OR $email = u.email 
// ");

// var_dump($compare_query);
