<?php

if (!isset($_GET['slug'])) {
    Funciones::JsRedirect('home');
}

$id = $_GET['slug'];

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$galeryCtrl = new galeriaCtrl('galeria');

$inmueble = $inmuebleCtrl->getById(array('id' => $id));
$zona = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));
$habitaciones = $habitacionesCtrl->getById(array('inmueble_id' => $id));

// var_dump($habitaciones);

include('views/partials/inmueble.view.php');
