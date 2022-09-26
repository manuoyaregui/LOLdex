<?php include_once "header.php"; ?>

<style>
    <?php include_once "../css/verCampeonStyles.css"; ?>
</style>


<?php
    if( ! empty($_GET) ){
        $nombre = $_GET['nombre'];

        $consulta =
            "select distinct *
            from campeon
            where nombre like" . "'".$nombre."'";

        $resultado = $db->query($consulta);
        $campeonObj = $resultado[0];
    }
?>


<main class="container">
    <a href="buscar.php" class="btnVerOtrosCampeones mt-3 btn btn-primary opacity-75 position-absolute">Ver otros campeones</a>
    <div class="row d-flex justify-content-center mt-3 col-lg-12">
        <img class="champImg col-lg-7" src="../Images/IlustracionCompleta/<?php echo $campeonObj["imagen_completa"]; ?>">
        <div class="container col-lg-5">
            <div class="d-flex  align-items-center">
                <img src="../Images/iconosDeRoles/<?php echo $campeonObj['tipo'] ?>.webp"
                class="rolImg">
                <h1 class="champNombre text-primary"><?php echo $campeonObj['nombre'] ?></h1>
            </div>

            <h3>Historia</h3>
            <p class="champLore"><?php echo $campeonObj['descripcion'] ?></p>

            <h3>Líneas Principales</h3>
            <div class="badge bg-primary"><?php echo $campeonObj['rol'] ?></div>

        </div>
    </div>
</main>


