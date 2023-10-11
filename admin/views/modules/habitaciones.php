<?php

$habitacionCtrl = new habitacionCtrl('habitaciones');
$inmueblesCtrl = new inmueblesCtrl('inmuebles');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $habitacionCtrl->insertImg(array('nombre', 'inmueble_id', 'precio', 'imagen', 'text_intro', 'text'), $_POST);
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Habitacion creada', 'text' => ''));
}

$inmuebles = $inmueblesCtrl->getAll();
$habitaciones = $habitacionCtrl->getAll();


include('views/partials/habitaciones.view.php');
