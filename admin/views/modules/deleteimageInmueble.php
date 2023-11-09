<?php
$galeriaCtrl = new galeriaCtrl('galeria_inmuebles');

$id = explode("/", $_GET["url"])[1];

$image = $galeriaCtrl->getById(array('id' => $id));

$galeriaCtrl->delete($id);
Funciones::deleteImage("../views/images/inmuebles/" . $image[0]['inmueble_id'] . "/" . $image[0]['name']);
// var_dump($image);

die();
Funciones::JsRedirect(RutaCtrl::url() . "editinmuebles/" . $image[0]['inmueble_id']);
