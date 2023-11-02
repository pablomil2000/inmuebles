<?php

$id = explode("/", $_GET["url"])[1];

$comentarioCtrl = new contactoCtrl('newclient');

$comentarioCtrl->update(array('Abierto' => '1'), $id);

$comentario = $comentarioCtrl->getById(array('id' => $id));

if (empty($comentario)) {
    Funciones::JsRedirect(RutaCtrl::url() . '404');
}


include('views/partials/nuevo-cliente.view.php');
