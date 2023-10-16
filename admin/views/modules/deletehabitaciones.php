<?php

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('habitaciones');
}

$id = $_GET['id'];

$habitacionCtrl = new habitacionCtrl('habitaciones');
$galeryCtrl = new galeriaCtrl('galeria');
$habitacion = $habitacionCtrl->getById(array('id' => $id));


if ($habitacionCtrl->delete($id)) {
    $galeria = $galeryCtrl->getById(array('habitacion_id' => $habitacion[0]['id']));

    foreach ($galeria as $key => $image) {
        Funciones::deleteImage($galeryCtrl->route . "/" . $habitacion[0]['id'] . "/" . $image['name']);
        $galeryCtrl->delete($image['id']);
    }
    Funciones::deleteFolder($galeryCtrl->route . "/" . $habitacion[0]['id']);
}

Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Habitacion eliminada', 'text' => '', 'redirect' => 'habitaciones'));
