<?php
session_start();


$sv = "localhost";
$un = "php_connection";
$pw = "eustaquiomanosdetijera";
#esto iría al .env
$db_name = "blog_cocina";

$db_connection = mysqli_connect(
    $sv,
    $un,
    $pw,
    $db_name
);

if (mysqli_errno($db_connection)) {
    echo mysqli_errno($db_connection);
} else {
    echo "db connected";
}

mysqli_query($db_connection, "SET NAMES 'utf8'");
