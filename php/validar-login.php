<?php
include_once "Database.php";
if (isset($_POST["login"])) {
    session_start();

    $conexion = new Database();

    $query = "select *
                from usuario where usuario = '" . $_POST["usuario"] . "' and password = '" . $_POST["password"] . "'";
    $stmt = $conexion->query($query);


    if ($stmt == null) {
        header("Location: index.php?errorLogin=true");
        exit();
    } else {
        $_SESSION["logueado"] = true;
        header("Location: index.php");
        exit();
    }
}
