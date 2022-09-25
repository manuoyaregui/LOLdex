<?php include_once "header.php" ?>

<?php

    $database = new Database();
    $consulta = "select * from campeon where 1";
    $resultadosBusqueda =$database->query($consulta);

?>

<main class="container">
    <h1 class="text-center text-primary mt-3 a">LOLDEX</h1>

    <form action="buscar.php" class="d-flex" method="POST">
        <input class="form-control me-sm-2" type="text" name="busqueda" placeholder="Buscá tu campeón...">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Img</th>
            <th scope="col">Nombre</th>
            <th scope="col">Rol</th>
            <th scope="col">Clase</th>
            <th scope="col">Número</th>
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
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
</main>

</body>
</html>
