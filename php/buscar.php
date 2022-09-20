<?php include_once "header.php" ?>
<?php include_once "Database.php" ?>
<main class="container">

    <div class="form-en-busqueda">
        <form action="buscar.php" class="d-flex" method="POST">
            <input class="form-control me-sm-2" type="text" name="busqueda" placeholder="Buscá tu campeón...">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>


    <h1> Campeones encontrados:</h1>


    <article class="contenedor-busqueda">
    <div class="row">
        <?php

            $busqueda = $_POST["busqueda"];
            $database = new Database();
            $consulta = "select * from campeon where tipo = '". $busqueda."'";
            $resultadosBusqueda =$database->query($consulta);
            foreach($resultadosBusqueda as  $resultado){
                echo "<div class='col-md-auto'>
                        <img class='imagen-busqueda' src='../Images/ilustracionesSquare/Champion_icon_". $resultado['nombre'] .".png' alt=".$resultado['nombre'].">
                        <div class='nombre-campeon'>
                          <h2>".$resultado['nombre']."</h2>
                        </div>
            </div>";
            }
        ?>
    </article>

</main>
</body>
</html>
