<?php

class Conexion
{
    static public function conectar()
    {
        $bdTypee = 'aiven';

        switch ($bdTypee) {
            case 'MySQL':
                $servername = "habbo-demo-inmuebles-martinlopezpablo-b53b.k.aivencloud.com";
                $username = "avnadmin";
                $password = "AVNS_3Bl_Vfwn9ZAZ6eMeVz8";
                $dbname = "defaultdb";

                $conexion = new PDO("mysql:host=$servername port=17048; dbname=$dbname", $username, $password);

                $conexion->exec("set names utf8");

                break;

            case 'SQLite':
                $servername = "libsql://kvl-bot-pablomil2000.turso.io";
                $id = "966872c0-6403-49d4-8876-4598d15de5a5";
                $conexion = new PDO("$servername", $id);
                break;

            case 'aiven':
                $host = "habbo-demo-inmuebles-martinlopezpablo-b53b.k.aivencloud.com";
                $port = "17048";
                $user = "avnadmin";
                $pass = "AVNS_3Bl_Vfwn9ZAZ6eMeVz8";

                // build the DSN including SSL settings
                $conn = "mysql:";
                $conn .= "host=" . $host;
                $conn .= ";port=" . $port;
                $conn .= ";dbname=defaultdb";
                $conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

                $conexion = new PDO($conn, $user, $pass);
                break;

            default:
                die('No se ha seleccionado un tipo de base de datos');
        }

        return $conexion;
    }
}


