<?php
class inmueblesCtrl extends CrudCtrl
{
    public function insertImg($campos, $datos)
    {
        $datos2['nombre'] = $datos['nombre'];

        $datos2['localizacion'] = $datos['localizacion'];


        $Funciones = new Funciones();

        $datos2['imagen'] = $Funciones->uploadImage('../views/images/');

        // var_dump($datos2, $campos);
        return CrudMdl::insert($this->tabla, $campos, $datos2);
    }
}
