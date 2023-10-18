<?php

$id = explode("/", $_GET["url"])[1];
$LocalizacionCtrl = new localizacionesCtrl('localizacion');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $LocalizacionCtrl->update($_POST, $id);
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Cambios guardados', 'text' => '', 'redirect' => DOMAIN . 'localizaciones'));
}

$localizacion = $LocalizacionCtrl->getById(array('id' => $id));

include('views/partials/editLocation.view.php');
