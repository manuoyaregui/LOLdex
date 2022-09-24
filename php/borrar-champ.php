<?php

    include_once "Database.php";

    $database = new Database();
    $conn = $database->conectar();

    if (isset($_GET["id"])) {
        $idCampeon = $_GET["id"];

//        $database->execute("DELETE FROM Campeon WHERE id = " . $idCampeon);
        $stmt = $conn->prepare("DELETE FROM Campeon WHERE id = ?");
        $stmt->bind_param("i", $idCampeon);
        $resultado = $stmt->execute();

        if (isset($resultado)) {
            $mensaje = "Se elimino al campeon con id " . $idCampeon;
        }

        header("Location: index-log.php?msg=" . $mensaje);

    }