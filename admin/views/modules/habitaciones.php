<?php

$inmueblesCtrl = new inmueblesCtrl('inmuebles');
$localizacionesCtrl = new localizacionesCtrl('localizacion');
$localizaciones = $localizacionesCtrl->getAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inmueblesCtrl->insertInmueble(array('nombre', 'localizacion_id', 'imagen'), $_POST);
    // $inmueblesCtrl->insert(array('nombre', 'password'), array($_POST['nombre'], $_POST['password']));
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Usuario imueble', 'text' => ''));
}


$inmuebles = $inmueblesCtrl->getAll();


include('views/partials/inmuebles.view.php');
