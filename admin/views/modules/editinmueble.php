<?php

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('localizaciones');
}
$id = $_GET['id'];

$habitacionCtrl = new habitacionCtrl('habitaciones');
$inmueblesCtrl = new inmueblesCtrl('inmuebles');

$habitacion = $habitacionCtrl->getById(array('id' => $id));
$inmuebles = $inmueblesCtrl->getAll();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $habitacionCtrl->updateImg($habitacion, array('nombre', 'inmueble_id', 'precio', 'imagen', 'text_intro', 'text'), $_POST);
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Habitacion actualizada', 'text' => ''));
}

$habitaciones = $habitacionCtrl->getById(array('id' => $id));



include('views/partials/edithabitaciones.view.php');
