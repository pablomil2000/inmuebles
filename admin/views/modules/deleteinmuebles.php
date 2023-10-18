<?php

$id = explode("/", $_GET["url"])[1];

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$habitacionesCtrl = new habitacionCtrl('habitaciones');
$galeryCtrl = new galeriaCtrl('galeria');
$funciones =  new  Funciones();

$habitaciones = $habitacionesCtrl->getById(array('inmueble_id' => $id));
$inmueble = $inmueblesCtrl->getById(array('id' => $id));

foreach ($habitaciones as $key => $habitacion) {
    $galeria = $galeryCtrl->getById(array('habitacion_id' => $habitacion['id']));
    foreach ($galeria as $key => $image) {
        $funciones->deleteImage($galeryCtrl->route . $image['name']);
        $galeryCtrl->delete($image['id']);
    }


    Funciones::deleteFolder($galeryCtrl->route . $habitacion['id']);
    $habitacionesCtrl->delete($habitacion['id']);
}

$inmueblesCtrl->delete($id);
if ($inmueble[0]['imagen'] != 'default.png') {
    Funciones::deleteImage('../views/images/inmuebles/' . $inmueble[0]['imagen']);
}
Funciones::JsRedirect(DOMAIN . 'inmuebles');
