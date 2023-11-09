<?php
$galeriaCtrl = new galeriaCtrl('galeria');

$id = explode("/", $_GET["url"])[1];

$image = $galeriaCtrl->getById(array('id' => $id));
$galeriaCtrl->update2(array('destacada' => '0'), "habitacion_id = " . $image[0]['habitacion_id']);
$galeriaCtrl->update(array('destacada' => '1'), $id);

// var_dump($image);


Funciones::JsRedirect(RutaCtrl::url() . "edithabitaciones/" . $image[0]['habitacion_id']);
