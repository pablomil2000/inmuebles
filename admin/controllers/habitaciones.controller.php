<?php
class habitacionCtrl extends CrudCtrl
{
    public function insertImg($campos, $datos)
    {
        $datos2['nombre'] = $datos['nombre'];
        $datos2['inmueble_id'] = $datos['inmueble_id'];
        $datos2['precio'] = $datos['precio'];

        $Funciones = new Funciones();

        $datos2['imagen'] = $Funciones->uploadImage();
        // var_dump($datos2, $campos);

        return CrudMdl::insert($this->tabla, $campos, $datos2);
    }
}
