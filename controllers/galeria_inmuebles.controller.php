<?php

class galeria_inmueblesCtrl extends CrudCtrl
{
    private $route = DOMAIN . 'views/images/inmuebles/';


    public function getDest($id)
    {
        $result = $this->rawSql('WHERE inmueble_id LIKE ' . $id, 'Order By destacada DESC', 'limit 1');

        if (isset($result[0]['name'])) {
            return ($this->route . "$id/" . $result[0]['name']);
        }
        return (RutaCtrl::url() . "/views/images/default.png");
    }

    public function getImage($id, $name)
    {
        return ($this->route . "$id/" . $name);
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
