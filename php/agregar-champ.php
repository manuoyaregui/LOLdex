<?php include_once "header-log.php" ?>

<?php

    if (isset($_POST["agregarCampeon"])) {
        /* Para los select se debe usar isset en lugar de empty */
        if (isset($_POST["rol"]) && isset($_POST["clase"])) {

            /* Usamos la funcion str_replace para reemplazar espacios por - (guines) */
            $imagen = str_replace(" ", "-", $_FILES["imagen"]["name"]);
            $numero = $_POST["numero"];
            $nombre = $_POST["nombre"];
            $rol = $_POST["rol"];
            $clase = $_POST["clase"];
            $historia = $_POST["historia"];

            /* Habria que agregar despues una funcion para poder usar el prepare, bind_param y execute */
            $database = new Database();
            $conn = $database->conectar();

            if (!empty($imagen) && !empty($numero) && !empty($nombre) && !empty($historia)) {

                $stmt = $conn->prepare("INSERT INTO Campeon (imagen, numero, nombre, tipo, descripcion, rol)
                                                VALUES (?, ?, ?, ?, ?, ?)");

                $stmt->bind_param("sissss", $imagen, $numero, $nombre, $clase, $historia, $rol);
                $resultado = $stmt->execute();

                if ($resultado) {
                    /* Guardamos la imagen del campeon en la carpeta Images */
                    move_uploaded_file($_FILES["imagen"]["tmp_name"], "../Images/" . $imagen);
                    $mensaje = "Se agrego al campeon <strong>" . $nombre . "</strong> con exito";
                }

                $conn->close();
            }

        }

    }

?>

<main class="container-lg w-50">

    <?php if (isset($resultado) && ($resultado == 1)) : ?>

        <div class="alert alert-dismissible alert-success mt-3 text-center">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?php echo $mensaje; ?>
            <a href="index-log.php">Volver a la lista</a>
        </div>

    <?php endif; ?>

    <h1 class="text-center text-primary mb-3">Agregar campeon</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <input class="form-control my-2" type="file" name="imagen" id="formFile" >
        </div>

        <div class="form-group">
            <fieldset>
                <input class="form-control" name="numero" id="numeroCamepon" type="text" placeholder="Número">
            </fieldset>
        </div>

        <div class="form-group my-2">
            <fieldset>
                <input class="form-control" name="nombre" id="nombreCampeon" type="text" placeholder="Nombre">
            </fieldset>
        </div>

        <div class="form-group my-2">
            <select class="form-select" name="rol" id="exampleSelect1">
                <option disabled selected>Seleccionar Rol</option>
                <option value="Top">Top</option>
                <option value="Jungla">Jungla</option>
                <option value="Mid">Mid</option>
                <option value="ADC">Adc</option>
                <option value="Support">Support</option>
            </select>
        </div>

        <div class="form-group my-2">
            <select class="form-select" name="clase" id="exampleSelect1">
                <option disabled selected>Seleccionar Clase</option>
                <option value="Tanque">Tanque</option>
                <option value="Luchador">Luchador</option>
                <option value="Mago">Mago</option>
                <option value="Asesino">Asesino</option>
                <option value="Tirador">Tirador</option>
                <option value="Soporte">Soporte</option>
            </select>
        </div>

        <div class="form-group">
<!--            <label for="exampleTextarea" class="form-label my-2">Historia</label>-->
            <textarea class="form-control" name="historia" id="exampleTextarea" rows="3" placeholder="Historia del campeon"></textarea>
        </div>


        <input type="submit" name="agregarCampeon" class="btn btn-success mt-3 align-items-center" value="Guardar">

    </form>
</main>