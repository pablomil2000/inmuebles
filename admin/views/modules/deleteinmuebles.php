<?php

$id = explode("/", $_GET["url"])[1];

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$habitacionesCtrl = new habitacionCtrl('habitaciones');
$galeryCtrl = new galeriaCtrl('galeria');
$funciones =  new  Funciones();


$inmueble = $inmueblesCtrl->getById(array('id' => $id));

$inmueblesCtrl->delete($id);
if ($inmueble[0]['imagen'] != 'default.png') {
    Funciones::deleteImage('../views/images/inmuebles/' . $inmueble[0]['imagen']);
}
Funciones::JsRedirect(RutaCtrl::url() . 'inmuebles');
