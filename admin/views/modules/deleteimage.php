<?php
$galeriaCtrl = new galeriaCtrl('galeria');

$id = explode("/", $_GET["url"])[1];

$image = $galeriaCtrl->getById(array('id' => $id));

$galeriaCtrl->delete($id);
Funciones::deleteImage("../views/images/habitacion/" . $image[0]['habitacion_id'] . "/" . $image[0]['name']);
// var_dump($image);


Funciones::JsRedirect(RutaCtrl::url() . "edithabitaciones/" . $image[0]['habitacion_id']);
