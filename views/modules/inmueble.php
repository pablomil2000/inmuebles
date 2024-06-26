<?php

if (!isset(explode("/", $_GET["url"])[1])) {
    // Funciones::JsRedirect(DOMAIN . 'home');
}
$id = explode("/", $_GET["url"])[1];

$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$galeryCtrl = new galeria_inmueblesCtrl('galeria_inmuebles');
$galery = $galeryCtrl->getById(array('inmueble_id' => $id));
$caractPropiedadCtrl = new caractpropiedadCtrl('caracteristicas_inmueble');

$inmueble = $inmuebleCtrl->getById(array('id' => $id));
$zona = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));
$caracts = $caractPropiedadCtrl->getById(array('inmuble_id' => $inmueble[0]['id']));

if (empty($inmueble)) {
    Funciones::JsRedirect(RutaCtrl::url() . '404');
}

// var_dump($habitaciones);

include('views/partials/inmueble.view.php');
