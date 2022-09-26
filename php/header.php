<?php
session_start();

include_once  'includes.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOLDex</title>

</head>
<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img class="nav-logo" src="../Images/LoL_icon.svg"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                </ul>


                    <?php

                    if (isset($_SESSION["logueado"])){
                        echo '<form action="destroy-session.php" class="mt-2">
                    <div class="form-group d-flex " >
                        <h4 class="mx-3">usuario ADMIN</h4>
                        <input class="btn btn-primary" type="submit" value="log out">
                    </div>
                </form>';
                    }else{
                        echo '
                <form action="validar-login.php" class="mt-2" method="POST">
                    <div class="form-group d-flex " >
                        <div class="form-group">
                            <input name="usuario" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario">
                        </div>
                        <div class="form-group mx-2">
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>
                        <input name="login" type="submit" class="btn btn-primary " value="Log in" >
                    </div>
                </form>';
                    }

                    ?>
            </div>
        </div>
    </nav>
</header>