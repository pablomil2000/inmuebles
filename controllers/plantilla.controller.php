<?php

class PlantillaCtr
{
    static public function load()
    {
        require_once('views/template.view.php');
    }

    static public function whiteList(...$validas)
    {

        $ruta = 'home';


        if (isset($_GET['ruta'])) {
            $ruta = Validar::vlt_String($_GET['ruta']);

            if (!in_array($ruta, $validas)) {
                $ruta = '404';
            }
        }

        require_once('views/modules/' . $ruta . '.php');
        return $ruta;
    }
}
