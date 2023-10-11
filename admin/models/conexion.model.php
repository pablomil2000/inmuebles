<?php

class Conexion
{
    static public function conectar()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "inmuebles";

        $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conexion->exec("set names utf8");

        return $conexion;
    }
}
