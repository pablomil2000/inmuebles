<?php
class habitacionCtrl extends CrudCtrl
{
    public function insertImg($campos, $datos)
    {
        $datos2['nombre'] = $datos['nombre'];
        $datos2['inmueble_id'] = $datos['inmueble_id'];
        $datos2['precio'] = $datos['precio'];


        $Funciones = new Funciones();

        $datos2['imagen'] = $Funciones->uploadImage("../views/images/habitacion/");
        $datos2['text_intro'] = $datos['text_intro'];
        $datos2['text'] = $datos['text'];

        //var_dump($datos2, $campos);

        return CrudMdl::insert($this->tabla, $campos, $datos2);
    }

    public function updateImg($originals, $campos, $datos)
    {
        $datos2['nombre'] = $datos['nombre'];
        $datos2['text_intro'] = $datos['text_intro'];
        $datos2['text'] = $datos['text'];
        $datos2['precio'] = $datos['precio'];
        $datos2['disponible'] = $datos['disponible'];
        $datos2['inmueble_id'] = $datos['inmueble_id'];
        // var_dump($datos, $datos2);

        $Funciones = new Funciones();


        if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
            if ($originals[0]['imagen'] != 'default.png') {
                $Funciones->deleteImage("../views/images/habitacion/" . $originals[0]['imagen']);
            }
            $datos2['imagen'] = $Funciones->uploadImage("../views/images/habitacion/");
        }

        return CrudMdl::update($this->tabla, $datos2, $originals[0]['id']);
    }
}
