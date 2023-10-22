<?php

class RutaCtrl
{
    static public function url($param = '')
    {

        return "http://localhost/inmuebles/admin/" . $param;
    }

    static public function url2($param = '')
    {

        return "http://localhost/inmuebles/" . $param;
    }
}
