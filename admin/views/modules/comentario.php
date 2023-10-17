<?php

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('localizaciones');
}
$id = $_GET['id'];

$comentarioCtrl = new contactoCtrl('contacto');

$comentario = $comentarioCtrl->getById(array('id' => $id));



include('views/partials/comentario.view.php');
