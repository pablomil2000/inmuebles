<?php

$id = explode("/", $_GET["url"])[1];

$habitacionCtrl = new habitacionCtrl('habitaciones');
$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$galeriaCtrl = new galeriaCtrl('galeria');
$Funciones = new Funciones();




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datos['nombre'] = $_POST['nombre'];
    $datos['text_intro'] = $_POST['text_intro'];
    $datos['text'] = $_POST['text'];
    $datos['precio'] = $_POST['precio'];

    $datos['doble'] = Validar::vlt_checkBox('doble');
    $datos['banio'] = Validar::vlt_checkBox('banio');
    $datos['terraza'] = Validar::vlt_checkBox('terraza');
    $datos['calefaccion'] = Validar::vlt_checkBox('calefaccion');
    $datos['piscina'] = Validar::vlt_checkBox('piscina');

    $datos['disponible'] = Validar::vlt_checkBox('disponible');
    $datos['piso'] = Validar::vlt_Int('piso');
    $datos['mixto'] = Validar::vlt_checkBox('mixto');

    $datos['inmueble_id'] = $_POST['inmueble_id'];

    $habitacionCtrl->update(
        array(
            'nombre' => $datos['nombre'],
            'text_intro' => $datos['text_intro'],
            'text' => $datos['text'],
            'precio' => $datos['precio'],
            'disponible' => $datos['disponible'],
            'inmueble_id' => $datos['inmueble_id'],
            'doble' => $datos['doble'],
            'banio' => $datos['banio'],
            'terraza' => $datos['terraza'],
            'calefaccion' => $datos['calefaccion'],
            'piscina' => $datos['piscina'],
            'piso' => $datos['piso'],
            'mixto' => $datos['mixto'],
        ),
        $id
    );
    if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
        if (!is_dir("../views/images/habitacion/$id")) {
            mkdir("../views/images/habitacion/$id");
        }
        $datos2['name'] = $Funciones->uploadImage("../views/images/habitacion/$id/");
        $datos2['habitacion_id'] = $id;
        $galeriaCtrl->insert(array('name', 'habitacion_id'), $datos2);
    }

    Funciones::sweetAlert2(array(
        'icon' => 'success',
        'title' => 'Habitacion actualizada',
        'text' => ''
    ));
}


$habitacion = $habitacionCtrl->getById(array('id' => $id));
$inmuebles = $inmueblesCtrl->getAll();
$galerias = $galeriaCtrl->getById(array('habitacion_id' => $id));


$habitacion = $habitacionCtrl->getById(array('id' => $id));

if (empty($habitacion)) {
    Funciones::JsRedirect(RutaCtrl::url() . '404');
}

include('views/partials/edithabitaciones.view.php');
