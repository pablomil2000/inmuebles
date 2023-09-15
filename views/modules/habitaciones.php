<?php

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');

$habitacion = $habitacionesCtrl->getAll();

// $inmueble = $inmuebleCtrl->getById(array('id' => $habitacion[0]['inmueble_id']));
// $zona = $localizationCtrl->getById(array('id' => $inmueble[0]['localizacion_id']));
