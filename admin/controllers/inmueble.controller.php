<?php
class inmueblesCtrl extends CrudCtrl
{
    public function insertImg($campos, $datos)
    {
        $datos2['nombre'] = $datos['nombre'];

        $datos2['localizacion'] = $datos['localizacion'];


        $Funciones = new Funciones();

        $datos2['imagen'] = $Funciones->uploadImage('../views/images/inmuebles/');

        // var_dump($datos2, $campos);
        return CrudMdl::insert($this->tabla, $campos, $datos2);
    }

    public function updateImg($originals, $campos, $datos)
    {
        $datos2['nombre'] = $datos['nombre'];
        $datos2['localizacion_id'] = $datos['localizacion_id'];

        // var_dump($datos, $datos2);

        $Funciones = new Funciones();


        if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
            if ($originals[0]['imagen'] != 'default.png') {
                $Funciones->deleteImage("../views/images/inmuebles/" . $originals[0]['imagen']);
            }
            $datos2['imagen'] = $Funciones->uploadImage("../views/images/inmuebles/");
        }

        return CrudMdl::update($this->tabla, $datos2, $originals[0]['id']);
    }
}
