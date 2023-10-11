<?php

if (!isset($_GET['id'])) {
    Funciones::JsRedirect('habitaciones');
}

$id = $_GET['id'];

$habitacionCtrl = new habitacionCtrl('habitaciones');

$habitacion = $habitacionCtrl->getById(array('id' => $id));

if ($habitacionCtrl->delete($id)) {
    Funciones::deleteImage('../views/images/habitacion/' . $habitacion[0]['imagen']);
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Habitacion eliminada', 'text' => '', 'redirect' => 'habitaciones'));
}
