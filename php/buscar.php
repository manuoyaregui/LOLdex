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
            $database = new Database();
            $busqueda = "";
            $resultadosBusqueda = "";
            if(isset($_POST["busqueda"])) {
                $busqueda = $_POST["busqueda"];
                $consulta = "select * from campeon where nombre like '%" .$busqueda."%' or tipo like '".$busqueda."' or numero like '".$busqueda ."'";
                $resultadosBusqueda =$database->query($consulta);
            }

            if($resultadosBusqueda == null || $busqueda == null){
                $consulta = "select * from campeon where 1";
                $resultadosBusqueda =$database->query($consulta);
            }
            foreach($resultadosBusqueda as  $resultado){
                echo "<div class='col-md-auto'><a href='verCampeon.php?nombre=".$resultado['nombre']."'>
                        <img class='imagen-busqueda' src='../Images/ilustracionesSquare/Champion_icon_". $resultado['nombre'] .".png' alt=".$resultado['nombre'].">
                        <div class='nombre-campeon'>
                          <h2>".$resultado['nombre']."</h2></a>
                        </div>
            </div>";

            }
        ?>
    </article>

</main>
</body>
</html>
