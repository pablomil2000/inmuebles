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
$habitaciones = $habitacionesCtrl->rawSql(' WHERE inmueble_id LIKE ' . $id, 'ORDER By disponible DESC', '');

// var_dump($habitaciones);

include('views/partials/inmueble.view.php');
