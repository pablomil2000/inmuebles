<?php

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('localizaciones');
}

$id = $_GET['id'];

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$localizacionCtrl = new localizacionesCtrl('Localizacion');

$inmublesAfect = $inmueblesCtrl->getById(array('localizacion_id' => $id));

foreach ($inmublesAfect as $key => $inmueble) {
    // var_dump($inmueble);
    $inmueblesCtrl->update(array('localizacion_id' => 0), $inmueble['id']);
}

if ($localizacionCtrl->delete($id)) {
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Localizacion eliminada', 'text' => '', 'redirect' => 'localizaciones'));
} else {
    Funciones::sweetAlert2(array('icon' => 'error', 'title' => 'No se pudo eliminar', 'text' => 'ponte en contacto con el desarrollado para comprobar el error code: ' . Funciones::dateFormat(date("F j, Y, g:i a"), "dmyhis"), 'redirect' => 'localizaciones'));
}
