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

        // var_dump($url);

        require_once('views/modules/' . $url[0] . '.php');
        return $url;
    }
}
