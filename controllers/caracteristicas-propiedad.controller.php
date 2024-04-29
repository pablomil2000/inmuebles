<?php

class caractpropiedadCtrl extends CrudCtrl
{

    public function have($caracteristica, $inmueble)
    {

        $res = $this->getById(array('inmuble_id' => $inmueble, 'caracteristica_id' => $caracteristica));
        return $res;
    }
}
