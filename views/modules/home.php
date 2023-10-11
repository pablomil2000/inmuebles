<?php

$habitacionesCtrl = new habitacionCtrl('habitaciones');
$inmuebleCtrl = new InmuebleCtrl('inmuebles');
$localizationCtrl = new LocalizacionCtrl('localizacion');
$galeriaCtrl = new galeriaCtrl('galeria');

$habitacionesCarrusel = $habitacionesCtrl->getAll();
$haitacionesDestacadas = $habitacionesCtrl->rawSql('', 'ORDER BY rand()');
// var_dump($habitacionesCarrusel);

include('views/partials/home.view.php');
