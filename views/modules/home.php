<?php

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$habitacionesCarrusel = $habitacionesCtrl->getAll();

include('views/partials/home.view.php');
