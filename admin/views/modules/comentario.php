<?php

$id = explode("/", $_GET["url"])[1];

$comentarioCtrl = new contactoCtrl('contacto');

$comentarioCtrl->update(array('Abierto' => '1'), $id);

$comentario = $comentarioCtrl->getById(array('id' => $id));

if (empty($comentario)) {
    Funciones::JsRedirect(DOMAIN . '404');
}


include('views/partials/comentario.view.php');
