<?php

    include_once "Database.php";

    $database = new Database();
    $conn = $database->conectar();

    if (isset($_GET["id"])) {
        $idCampeon = $_GET["id"];

        /* Recuperamos el nombre de la imagen para despues eliminarla de la carpeta */
        $campeon = $conn->query("SELECT imagen FROM Campeon WHERE id = " . $idCampeon);
        $imagenABorrar = $campeon->fetch_assoc()["imagen"];

        $stmt = $conn->prepare("DELETE FROM Campeon WHERE id = ?");
        $stmt->bind_param("i", $idCampeon);
        $resultado = $stmt->execute();

        if (isset($resultado)) {
            /* Eliminamos la imagen anterior */
            unlink("../Images/" . $imagenABorrar);
            $mensaje = "Se elimino al campeon con id " . $idCampeon;
        }

        header("Location: index-log.php?msg=" . $mensaje);

    }