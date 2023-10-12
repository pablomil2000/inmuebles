<?php

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$galeriaCtrl = new galeriaCtrl('galeria');

$slug = $_GET['slug'];

$habitacion = $habitacionesCtrl->getById(array('id' => $slug));
$inmueble = $inmuebleCtrl->getById(array('id' => $habitacion[0]['inmueble_id']));
$zona = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));
$galery = $galeriaCtrl->getById(array('habitacion_id' => $slug, 'destacada' => 0));

// var_dump($habitacion);
var_dump($galery);

include('views/partials/habitacion.view.php');
