<?php
$galeriaCtrl = new galeriaCtrl('galeria_inmuebles');

$id = explode("/", $_GET["url"])[1];

$image = $galeriaCtrl->getById(array('id' => $id));
$galeriaCtrl->update2(array('destacada' => '0'), "inmueble_id = " . $image[0]['inmueble_id']);
$galeriaCtrl->update(array('destacada' => '1'), $id);

// var_dump($image);


Funciones::JsRedirect(RutaCtrl::url() . "editinmuebles/" . $image[0]['inmueble_id']);
