<?php include_once "header-log.php" ?>

<?php

    /* Recuperamos los datos iniciales del campeon a editar */
    if (isset($_GET["id"])) {
        $idCampeon = $_GET["id"];

        $database = new Database();
        $conn = $database->conectar();

        $stmt = $conn->query("SELECT * FROM Campeon WHERE id = " . $idCampeon);

        $campeon = $stmt->fetch_assoc();

    }

    if (isset($_POST["editarCampeon"])) {


        /*  */

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

    <h1 class="text-center text-primary mb-3">Editar campeon</h1>

    <form action="" method="POST" enctype="multipart/form-data">

<!--        <div class="form-group">-->
<!--            <input class="form-control my-2" type="file" id="formFile" >-->
<!--        </div>-->

        <div class="form-group">
            <fieldset>
                <input class="form-control" name="numero" id="numeroCamepon" type="text" placeholder="Número"
                       value="<?php echo $campeon["numero"]; ?>">
            </fieldset>
        </div>

        <div class="form-group my-2">
            <fieldset>
                <input class="form-control" name="nombre" id="nombreCampeon" type="text" placeholder="Nombre"
                       value="<?php echo $campeon["nombre"]; ?>">
            </fieldset>
        </div>

        <div class="form-group my-2">
            <select class="form-select" name="rol" id="exampleSelect1">
                <option disabled selected>Seleccionar Rol</option>
                <option value="Top" <?php if($campeon["rol"] == "Top") echo 'selected'; ?>>Top</option>
                <option value="Jungla" <?php if($campeon["rol"] == "Jungla") echo 'selected'; ?>>Jungla</option>
                <option value="Mid" <?php if($campeon["rol"] == "Mid") echo 'selected'; ?>>Mid</option>
                <option value="ADC" <?php if($campeon["rol"] == "ADC") echo 'selected'; ?>>Adc</option>
                <option value="Support" <?php if($campeon["rol"] == "Support") echo 'selected'; ?>>Support</option>
            </select>
        </div>

        <div class="form-group my-2">
            <select class="form-select" name="clase" id="exampleSelect1">
                <option disabled selected>Seleccionar Clase</option>
                <option value="Tanque" <?php if($campeon["tipo"] == "Tanque") echo 'selected'; ?>>Tanque</option>
                <option value="Luchador" <?php if($campeon["tipo"] == "Luchador") echo 'selected'; ?>>Luchador</option>
                <option value="Mago" <?php if($campeon["tipo"] == "Mago") echo 'selected'; ?>>Mago</option>
                <option value="Asesino" <?php if($campeon["tipo"] == "Asesino") echo 'selected'; ?>>Asesino</option>
                <option value="Tirador" <?php if($campeon["tipo"] == "Tirador") echo 'selected'; ?>>Tirador</option>
                <option value="Soporte" <?php if($campeon["tipo"] == "Soporte") echo 'selected'; ?>>Soporte</option>
            </select>
        </div>

        <div class="form-group">
<!--            <label for="exampleTextarea" class="form-label my-2">Historia</label>-->
            <textarea class="form-control" name="historia" id="exampleTextarea" rows="4" placeholder="Historia del campeon">
                <?php echo $campeon["descripcion"]; ?>
            </textarea>
        </div>


        <input type="submit" name="editarCampeon" class="btn btn-success mt-3 align-items-center" value="Guardar">

    </form>
</main>