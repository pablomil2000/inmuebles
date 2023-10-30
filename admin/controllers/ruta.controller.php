<?php

class RutaCtrl
{
    static public function url($param = '')
    {
        return DOMAIN . $param;
    }

    static public function url2($param = '')
    {
        return P_DOMAIN . $param;
    }
}
