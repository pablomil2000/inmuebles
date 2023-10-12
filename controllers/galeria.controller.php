<?php

class galeriaCtrl extends CrudCtrl
{

    private $route = 'views/images/habitacion/';

    public function getDest($id)
    {
        $result = $this->rawSql('WHERE habitacion_id LIKE ' . $id, 'Order By destacada DESC', 'limit 1');

        if (isset($result[0]['name'])) {
            return ($this->route . "$id/" . $result[0]['name']);
        }

        return ("views/images/default.png");
    }

    public function __get($name)
    {
        return $this->$name;
    }
}
