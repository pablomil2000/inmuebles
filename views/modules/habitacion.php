<?php

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$habitacion = $habitacionesCtrl->getById(array('id' => $_GET['slug']));

var_dump($habitacion);

include('views/partials/habitacion.view.php');
