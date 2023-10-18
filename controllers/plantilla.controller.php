<?php

class PlantillaCtr
{
    static public function load()
    {
        require_once('views/template.view.php');
    }

    static public function whiteList(...$validas)
    {

        if (isset($_GET['url'])) {
            $url = explode("/", $_GET["url"]);
        } else {
            $url[] = 'home';
        }

        if (in_array($url[0], $validas)) {
            $redirect = $url[0];
        } else {
            $redirect = 404;
        }
        // var_dump($url);

        require_once('views/modules/' . $redirect . '.php');
        return $url;
    }
}
