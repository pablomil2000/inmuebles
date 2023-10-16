<?php

class habitacionCtrl extends CrudCtrl
{

    public function getLimit($limit)
    {
        return $this->rawSql('', '', 'LIMIT ' . $limit);
    }
}
