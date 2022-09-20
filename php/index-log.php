<?php include_once "header-log.php" ?>


<main class="container">
    <h1 class="text-center text-primary mt-3">LOLDEX</h1>

    <form class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Buscá tu campeón...">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>

    <a href="agregarCampeon.php">
    <button  type="button" class="btn btn-success mb-3 float-end">Añadir Campeón</button>
    </a>

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
        <tr>
            <td class="text-center"><img src="../images/AhriSquare.webp" alt="foto-ahri"></td>
            <td class="text-center">Ahri</td>
            <td class="text-center">Mid</td>
            <td class="text-center">Mago</td>
            <td class="text-center">001</td>
            <td class="d-flex justify-content-evenly">
                <button type="button" class="btn btn-secondary">Modificar</button>

                <button type="button" class="btn btn-warning">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td class="text-center"><img src="../images/CaitlynSquare.webp" alt="foto-caitlyn"></td>
            <td class="text-center">Caitlyn</td>
            <td class="text-center">Adc</td>
            <td class="text-center">Tirador</td>
            <td class="text-center">002</td>
            <td class="d-flex justify-content-evenly">
                <button type="button" class="btn btn-secondary">Modificar</button>

                <button type="button" class="btn btn-warning">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td class="text-center"><img src="../images/OlafSquare.webp" alt="foto-caitlyn"></td>
            <td class="text-center">Olaf</td>
            <td class="text-center">Top</td>
            <td class="text-center">Luchador</td>
            <td class="text-center">003</td>
            <td class="d-flex justify-content-evenly">
                <button type="button" class="btn btn-secondary">Modificar</button>

                <button type="button" class="btn btn-warning">Eliminar</button>
            </td>
        </tr>
    </table>

</main>

</body>
</html>
