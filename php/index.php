<?php include_once "header.php" ?>

<?php

    $database = new Database();
    $consulta = "select * from campeon where 1";
    $resultadosBusqueda = $database->query($consulta);

//    echo "<pre>";
//    print_r($resultadosBusqueda);
//    echo "</pre>";
    echo '<script>
            function alertaEliminarCampeon(id) {
                let confirmacion = confirm("Eliminar campeon?");
                if (confirmacion) {
                    window.location.href = "borrar-champ.php?id=" + id
                }
            }
        </script>';

?>

<main class="container">
    <h1 class="text-center text-primary mt-3 a">LOLDEX</h1>

    <form action="buscar.php" class="d-flex" method="POST">
        <input class="form-control me-sm-2" type="text" name="busqueda" placeholder="Buscá tu campeón...">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <?php if (isset($_SESSION["logueado"])) : ?>

        <a href="agregar-champ.php" class="btn btn-success mb-3 float-end">Añadir Campeón</a>

    <?php endif; ?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Img</th>
            <th scope="col">Nombre</th>
            <th scope="col">Rol</th>
            <th scope="col">Clase</th>
            <th scope="col">Número</th>

            <?php if (isset($_SESSION["logueado"])) : ?>

                <th scope="col" class="text-center">Acciones</th>

            <?php endif; ?>

        </tr>
        </thead>

        <tbody>
        <?php foreach ($resultadosBusqueda as $resultado) : ?>

            <tr>
                <td>
                    <a href="verCampeon.php?nombre=<?php echo $resultado["nombre"]; ?>">
                        <img class="iconosIndex" src="../Images/<?php echo $resultado["imagen"] ?>" alt="foto-de-<?php echo $resultado["nombre"] ?>">
                    </a>
                </td>
                <td>
                    <a class="hipervinculoCampeon" href="verCampeon.php?nombre=<?php echo $resultado["nombre"]; ?>">
                        <?php echo $resultado["nombre"]; ?>
                    </a>
                </td>
                <td>
                    <a class="hipervinculoCampeon" href="buscar.php?busquedaGet=<?php echo $resultado["rol"]; ?>">
                        <?php echo $resultado["rol"]; ?>
                    </a>
                </td>
                <td>
                    <a href="buscar.php?busquedaGet=<?php echo $resultado["tipo"]; ?>">
                        <img class="iconosIndex" src="../Images/iconosDeRoles/<?php echo $resultado["tipo"]; ?>.webp" alt="icono-de-<?php echo $resultado["tipo"] ?>">
                    </a>
                </td>
                <td>
                    <a class="hipervinculoCampeon" href="verCampeon.php?nombre=<?php echo $resultado["nombre"]; ?>">
                        <?php echo $resultado["numero"]; ?>
                    </a>
                </td>
                <?php if (isset($_SESSION["logueado"])) : ?>

                    <td class="d-flex justify-content-evenly">
                        <a href="editar-champ.php?id=<?php echo $resultado["id"]; ?>" class="btn btn-secondary">Modificar</a>
                        <?php  ?>
                        <button id="btn-borrar" onclick="alertaEliminarCampeon(<?php echo $resultado["id"]; ?>)" class="btn btn-warning">Eliminar</button>
                    </td>

                <?php endif; ?>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
</main>

</body>
</html>
