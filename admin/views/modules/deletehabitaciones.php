<?php

$id = explode("/", $_GET["url"])[1];

$habitacionCtrl = new habitacionCtrl('habitaciones');
$galeryCtrl = new galeriaCtrl('galeria');
$habitacion = $habitacionCtrl->getById(array('id' => $id));


if (empty($habitacionCtrl->getById(array('id' => $id)))) {
    Funciones::JsRedirect(RutaCtrl::url() . '404');
}

if ($habitacionCtrl->delete($id)) {
    // if (true) {
    $galeria = $galeryCtrl->getById(array('habitacion_id' => $habitacion[0]['id']));

    foreach ($galeria as $key => $image) {
        Funciones::deleteImage('../views/images/habitacion/' . $habitacion[0]['id'] . "/" . $image['name']);
        $galeryCtrl->delete($image['id']);
    }
    Funciones::deleteFolder('../views/images/habitacion/' . $habitacion[0]['id']);
}

Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Habitacion eliminada', 'text' => '', 'redirect' => RutaCtrl::url() . 'habitaciones'));
