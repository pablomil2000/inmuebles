<?php
$galeriaCtrl = new galeriaCtrl('galeria');

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('localizaciones');
}
$id = $_GET['id'];

$image = $galeriaCtrl->getById(array('id' => $id));

$galeriaCtrl->delete($id);
Funciones::deleteImage("../views/images/habitacion/" . $image[0]['habitacion_id'] . "/" . $image[0]['name']);
// var_dump($image);


Funciones::JsRedirect("index.php?ruta=edithabitaciones&id=" . $image[0]['habitacion_id']);
