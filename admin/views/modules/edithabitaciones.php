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
    // $habitacionCtrl->updateImg($habitacion, array('nombre', 'inmueble_id', 'precio', 'imagen', 'text_intro', 'text'), $_POST);
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
