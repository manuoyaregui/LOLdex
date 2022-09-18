<?php include_once "header.php" ?>


<main class="container">
    <h1 class="text-center text-primary mt-3">LOLDEX</h1>

    <form action="buscar.php" class="d-flex">
        <input class="form-control me-sm-2" type="text" placeholder="Buscá tu campeón...">
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
        <tr>
            <td><img src="../images/AhriSquare.webp" alt="foto-ahri"></td>
            <td>Ahri</td>
            <td>Mid</td>
            <td>Mago</td>
            <td>001</td>
        </tr>
        <tr>
            <td><img src="../images/CaitlynSquare.webp" alt="foto-caitlyn"></td>
            <td>Caitlyn</td>
            <td>Adc</td>
            <td>Tirador</td>
            <td>002</td>
        </tr>
        <tr>
            <td><img src="../images/OlafSquare.webp" alt="foto-caitlyn"></td>
            <td>Olaf</td>
            <td>Top</td>
            <td>Luchador</td>
            <td>003</td>
        </tr>
    </table>

</main>

</body>
</html>
