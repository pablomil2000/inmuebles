<?php

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$galeriaCtrl = new galeriaCtrl('galeria');

$id = explode("/", $_GET["url"])[1];

$habitacion = $habitacionesCtrl->getById(array('id' => $id));
$zona = $localizationCtrl->getById(array('id' => $habitacion[0]['zona_id']));
$galery = $galeriaCtrl->getById(array('habitacion_id' => $id));

if (empty($habitacion)) {
    Funciones::JsRedirect(DOMAIN . '404');
}


include('views/partials/habitacion.view.php');
