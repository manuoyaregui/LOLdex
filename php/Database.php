<?php

class Database{

    private $conexion;

    public function __construct($host_param = null,$user_param = null,$pass_param = null,$db_param = null){
        $config = parse_ini_file("config.ini");

        //si el host_param es distinto a nulo, entonces usalo. Si es nulo, usa el de la config
        $host = $host_param ? : $config['host'];
        $user = $user_param ? : $config['user'];
        $pass = $pass_param ? : $config['pass'];
        $db = $db_param ? : $config['db'];

        $this->conexion = mysqli_connect(
            $config['host'],
            $config['user'],
            $config['pass'],
            $config['db']);
    }

    public function __destruct(){
        $this->conexion->close();
    }

    public function query($sql){
        $respuesta = $this->conexion->query($sql);
        return  $respuesta->fetch_all(MYSQLI_ASSOC);

    }

    public function execute($sql){
        $this->conexion->query($sql);
    }

}