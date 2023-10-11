<?php
$galeriaCtrl = new galeriaCtrl('galeria');



if (!isset($_GET['id'])) {
    Funciones::JsRedirect('localizaciones');
}
$id = $_GET['id'];

$image = $galeriaCtrl->getById(array('id' => $id));
$galeriaCtrl->update2(array('destacada' => 'false'), "habitacion_id = " . $image[0]['habitacion_id']);
$galeriaCtrl->update(array('destacada' => '1'), $id);

var_dump($image);


Funciones::JsRedirect("index.php?ruta=edithabitaciones&id=" . $image[0]['habitacion_id']);
