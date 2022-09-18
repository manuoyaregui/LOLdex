<?php include_once "header.php" ?>
<main class="container">

    <div class="form-en-busqueda">
        <form action="buscar.php" class="d-flex">
            <input class="form-control me-sm-2" type="text" placeholder="Buscá tu campeón...">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>


    <h1> Campeones encontrados:</h1>

    <article class="contenedor-busqueda">
    <div class="row">
        <div class="col-md-auto">
            <img class="imagen-busqueda" src="../Images/IlustracionCompleta/Ahri.jpg" alt="Ahri">
            <div class="nombre-campeon">
                <h1>Ahri</h1>
            </div>
        </div>
        <div class="col-md-auto"> <img class="imagen-busqueda" src="../Images/IlustracionCompleta/Caitlyn.jpg" alt="Olaf">
            <div class="nombre-campeon">
                <h1>Caitlyn</h1>
            </div>
        </div>
        <div class="col-md-auto">
            <img class="imagen-busqueda" src="../Images/IlustracionCompleta/Olaf.jpg" alt="Olaf">
            <div class="nombre-campeon">
                <h1>Olaf</h1>
            </div>
        </div>

    </div>

    </article>

</main>
</body>
</html>