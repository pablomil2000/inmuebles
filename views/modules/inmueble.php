<?php

if (!isset(explode("/", $_GET["url"])[1])) {
    // Funciones::JsRedirect(DOMAIN . 'home');
}
$id = explode("/", $_GET["url"])[1];

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$galeryCtrl = new galeriaCtrl('galeria');

$inmueble = $inmuebleCtrl->getById(array('id' => $id));
$zona = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));
$habitaciones = $habitacionesCtrl->rawSql(' WHERE inmueble_id LIKE ' . $id, 'ORDER By disponible DESC', '');

if (empty($inmueble)) {
    Funciones::JsRedirect(DOMAIN . '404');
}

// var_dump($habitaciones);

include('views/partials/inmueble.view.php');
