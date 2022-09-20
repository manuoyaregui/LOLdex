<?php include_once "header-log.php" ?>

<main class="container-lg">

    <h1 class="text-center text-primary mt-3">LOLDEX</h1>
    <form action="index-log.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">
            <input class="form-control my-2" type="file" id="formFile" >
        </div>
        <div class="form-group ">
            <fieldset>
                <input class="form-control " id="numeroCamepon" type="text" placeholder="Número" >
            </fieldset>
        </div>
        <div class="form-group my-2">
            <fieldset>
                <input class="form-control" id="nombreCampeon" type="text" placeholder="Nombre" >
            </fieldset>
        </div>

        <div class="form-group">
            <label for="exampleSelect1" class="form-label ">Seleccionar Rol</label>
            <select class="form-select" id="exampleSelect1">
                <option>Top</option>
                <option>Jungla</option>
                <option>Mid</option>
                <option>Adc</option>
                <option>Support</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleSelect1" class="form-label ">Seleccionar Clase</label>
            <select class="form-select" id="exampleSelect1">
                <option>Tanque</option>
                <option>Luchador</option>
                <option>Mago</option>
                <option>Asesino</option>
                <option>Tirador</option>
                <option>Soporte</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Historia</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
        </div>


        <button class="btn btn-success mt-3 align-items-center">Guardar</button>
    </form>
</main>