<?php include_once "header.php" ?>


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

        <?php
        $database = new Database();
        $consulta = "select * from campeon where 1";
        $resultadosBusqueda =$database->query($consulta);
        foreach ($resultadosBusqueda as  $resultado){
            echo"<tr>
                    <td> <a href='verCampeon.php?nombre=".$resultado['nombre']."'><img class='iconosIndex' src='../Images/ilustracionesSquare/Champion_icon_".$resultado['nombre'].".png' alt='foto-de".$resultado['nombre']."'></a></td>
                    <td> <a class='hipervinculoCampeon' href='verCampeon.php?nombre=".$resultado['nombre']."'>".$resultado['nombre']."</a></td>
                    <td><a class='hipervinculoCampeon' href='buscar.php?busquedaGet=".$resultado['rol']."'>".$resultado['rol']." </a></td>
                    <td><a href='buscar.php?busquedaGet=".$resultado['tipo']."'><img class='iconosIndex' src='../Images/iconosDeRoles/".$resultado['tipo'].".webp' alt='foto-de".$resultado['tipo']."'</a></td>
                    <td> <a class='hipervinculoCampeon' href='verCampeon.php?nombre=".$resultado['nombre']."'>".$resultado['numero']."</td>
                </tr>";
         }
         ?>
        </tbody>
    </table>
</main>

</body>
</html>
