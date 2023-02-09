<?php
function mostrarError($error, $campo)
{
    $alert = '';
    if (isset($error[$campo]) && !empty($error[$campo]) && !empty($campo)) {

        $alert = "<div class='alert error-alert'> $error[$campo] </div>";
    }
    return $alert;
}

function clearErrors()
{
    $_SESSION["register_errors"] = null;
    unset($_SESSION['register_errors']);
    $_SESSION["register_success"] = null;
    unset($_SESSION["register_success"]);
}

function dd($str)
{
    var_dump($str);
    die();
}
