<?php

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('localizaciones');
}
$id = $_GET['id'];

$comentarioCtrl = new contactoCtrl('contacto');

$comentarioCtrl->update(array('Abierto' => '1'), $id);

$comentario = $comentarioCtrl->getById(array('id' => $id));



include('views/partials/comentario.view.php');
