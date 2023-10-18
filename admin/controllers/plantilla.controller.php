<?php

class PlantillaCtr
{
    static public function load()
    {
        require_once('views/template.view.php');
    }

    static public function whiteList($validas1 = array(), $privadas = false, $validas2 = array())
    {
        $ruta = 'home';
        $validas2[] = 'home';

        if (isset($_GET['url'])) {
            $ruta = explode("/", $_GET["url"])[0];
            if (in_array($ruta, $validas1)) {
                $redirect = $ruta;
            } elseif ($privadas) {
                if (in_array($ruta, $validas2)) {
                    $redirect = $ruta;
                } else {
                    $redirect = 404;
                }
            } else {

                $redirect = 404;
            }
        } else {
            $redirect = 'home';
        }


        require_once('views/modules/' . $redirect . '.php');
        return $redirect;
    }
}
