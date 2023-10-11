<?php

class galeriaCtrl extends CrudCtrl
{

    public function getDest($id)
    {
        $result = $this->rawSql('WHERE habitacion_id LIKE ' . $id, 'Order By destacada', 'limit 1');

        if (isset($result[0]['name'])) {
            return ("../views/images/habitacion/$id/" . $result[0]['name']);
        }

        return ("../views/images/default.png");
    }
}
