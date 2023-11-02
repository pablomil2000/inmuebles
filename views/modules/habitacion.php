<?php

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$galeriaCtrl = new galeriaCtrl('galeria');

$id = explode("/", $_GET["url"])[1];

$habitacion = $habitacionesCtrl->getById(array('id' => $id));
$inmueble = $inmuebleCtrl->getById(array('id' => $habitacion[0]['inmueble_id']));
$zona = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));
$galery = $galeriaCtrl->getById(array('habitacion_id' => $id));

if (empty($habitacion)) {
    Funciones::JsRedirect(DOMAIN . '404');
}


include('views/partials/habitacion.view.php');
