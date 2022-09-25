<?php include_once "header-log.php" ?>

<?php

    $database = new Database();
    $campeones = $database->query("SELECT * FROM Campeon");

?>

<script>
    function alertaEliminarCampeon(){
        confirm("Eliminar este campeon?");
    }
</script>

<main class="container">

    <?php if (isset($_GET["msg"])) : ?>

        <div class="alert alert-dismissible alert-warning mt-3 text-center">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?php echo $_GET["msg"]; ?>
        </div>

    <?php endif; ?>

    <h1 class="text-center text-primary mt-3">LOLDEX</h1>

    <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Buscá tu campeón...">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>


    <a href="agregar-champ.php" class="btn btn-success mb-3 float-end">Añadir Campeón</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col" class="text-center">Img</th>
            <th scope="col" class="text-center">Nombre</th>
            <th scope="col" class="text-center">Rol</th>
            <th scope="col" class="text-center">Clase</th>
            <th scope="col" class="text-center">Número</th>
            <th scope="col" class="text-center">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($campeones as $campeon) : ?>
            <tr>
                <td class="text-center">
                    <img class="iconosIndex" src="../Images/<?php echo $campeon["imagen"]; ?>">
                </td>
                <td class="text-center"><?php echo $campeon["nombre"]; ?></td>
                <td class="text-center"><?php echo $campeon["rol"]; ?></td>
                <td class="text-center"><?php echo $campeon["tipo"]; ?></td>
                <td class="text-center"><?php echo $campeon["numero"]; ?></td>
                <td class="d-flex justify-content-evenly">
                    <a href="editar-champ.php?id=<?php echo $campeon["id"]; ?>" class="btn btn-secondary">Modificar</a>
                    <a href="borrar-champ.php?id=<?php echo $campeon["id"]; ?>" onclick="alertaEliminarCampeon()" class="btn btn-warning">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</main>

</body>
</html>
