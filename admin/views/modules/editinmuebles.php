<?php

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('localizaciones');
}
$id = $_GET['id'];

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$localizacionesCtrl = new localizacionesCtrl('localizacion');

$inmuebles = $inmueblesCtrl->getById(array('id' => $id));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inmueblesCtrl->updateImg($inmuebles, array('nombre', 'imagen', 'localizacion_id'), $_POST);
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Habitacion actualizada', 'text' => ''));
}


$inmuebles = $inmueblesCtrl->getById(array('id' => $id));
$localizaciones = $localizacionesCtrl->getAll();


include('views/partials/editinmueble.view.php');
