<?php
session_start();
$_SESSION["logueado"]=false;
session_destroy();
header("Location: index.php");
exit();
