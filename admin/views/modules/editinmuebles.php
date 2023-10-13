<?php

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('localizaciones');
}
$id = $_GET['id'];

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$localizacionesCtrl = new localizacionesCtrl('localizacion');
$habitacionCtrl = new habitacionCtrl('habitaciones');
$galeryCtrl = new galeriaCtrl('galeria');

$inmuebles = $inmueblesCtrl->getById(array('id' => $id));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inmueblesCtrl->updateImg($inmuebles, array('nombre', 'imagen', 'localizacion_id'), $_POST);
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Inmueble actualizada', 'text' => '', 'redirect' => 'inmuebles'));
}


$inmuebles = $inmueblesCtrl->getById(array('id' => $id));
$localizaciones = $localizacionesCtrl->getAll();

$habitaciones = $habitacionCtrl->getById(
    array(
        'inmueble_id' => $id,
    )
);

include('views/partials/editinmueble.view.php');
