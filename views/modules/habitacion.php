<?php

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');

$habitacion = $habitacionesCtrl->getById(array('id' => $_GET['slug']));
$inmueble = $inmuebleCtrl->getById(array('id' => $habitacion[0]['inmueble_id']));
$zona = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));

// var_dump($habitacion);

include('views/partials/habitacion.view.php');
