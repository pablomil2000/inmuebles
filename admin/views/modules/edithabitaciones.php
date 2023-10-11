<?php

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('localizaciones');
}
$id = $_GET['id'];

$habitacionCtrl = new habitacionCtrl('habitaciones');
$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$galeriaCtrl = new galeriaCtrl('galeria');
$Funciones = new Funciones();




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $datos['nombre'] = $_POST['nombre'];
    $datos['text_intro'] = $_POST['text_intro'];
    $datos['text'] = $_POST['text'];
    $datos['precio'] = $_POST['precio'];
    if (isset($_POST['disponible'])) {
        $datos['disponible'] = 1;
    } else {
        $datos['disponible'] = 0;
    }
    $datos['inmueble_id'] = $_POST['inmueble_id'];


    $habitacionCtrl->update(array('nombre' => $datos['nombre'], 'text_intro' => $datos['text_intro'], 'text' => $datos['text'], 'precio' => $datos['precio'], 'disponible' => $datos['disponible'], 'inmueble_id' => $datos['inmueble_id']), $id);
    if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
        if (!is_dir("../views/images/habitacion/$id")) {
            mkdir("../views/images/habitacion/$id");
        }
        $datos2['name'] = $Funciones->uploadImage("../views/images/habitacion/$id/");
        $datos2['habitacion_id'] = $id;
        $galeriaCtrl->insert(array('name', 'habitacion_id'), $datos2);
    }

    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Habitacion actualizada', 'text' => ''));
}


$habitacion = $habitacionCtrl->getById(array('id' => $id));
$inmuebles = $inmueblesCtrl->getAll();
$galerias = $galeriaCtrl->getById(array('habitacion_id' => $id));


$habitacion = $habitacionCtrl->getById(array('id' => $id));



include('views/partials/edithabitaciones.view.php');
