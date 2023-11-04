<?php

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$localizacionesCtrl = new localizacionesCtrl('localizacion');
$localizaciones = $localizacionesCtrl->getAll();

$caractCtrl = new caractCtrl('caracteristicas');
$caractPropiedadCtrl = new caractpropiedadCtrl('caracteristicas_inmueble');
$caracts = $caractCtrl->getById(array('piso' => 1));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $inmueblesCtrl->insertImg(array('nombre', 'precio', 'text', 'localizacion_id', 'imagen'), $_POST);
    foreach ($caracts as $key => $caract) {
        $caractPropiedadCtrl->insert(array('caracteristica_id', 'inmuble_id'), array($caract['id'], $id));
    }
}


$inmuebles = $inmueblesCtrl->getAll();



include('views/partials/inmuebles.view.php');
