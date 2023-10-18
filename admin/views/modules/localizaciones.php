<?php
$LocalizacionCtrl = new localizacionesCtrl('localizacion');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $LocalizacionCtrl->insert(array('nombre'), array($_POST['nombre']));
    Funciones::sweetAlert2(array('icon' => 'success', 'title' => 'Localizacion creada', 'text' => ''));
}

$Localizaciones = $LocalizacionCtrl->getAll();

include('views/partials/localizaciones.view.php');
