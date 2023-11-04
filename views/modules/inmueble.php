<?php

if (!isset(explode("/", $_GET["url"])[1])) {
    // Funciones::JsRedirect(DOMAIN . 'home');
}
$id = explode("/", $_GET["url"])[1];

$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$galeryCtrl = new galeriaCtrl('galeria');

$inmueble = $inmuebleCtrl->getById(array('id' => $id));
$zona = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));

if (empty($inmueble)) {
    Funciones::JsRedirect(RutaCtrl::url() . '404');
}

// var_dump($habitaciones);

include('views/partials/inmueble.view.php');
