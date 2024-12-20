<?php

class Conexion
{
    static public function conectar()
    {

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'inmuebles';

        $conexion = new PDO("mysql:host=$servername port=17048; dbname=$dbname", $username, $password);

        return $conexion->exec("set names utf8");
    }
}
