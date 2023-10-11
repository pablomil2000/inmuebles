<?php

$localizationCtrl = new LocalizacionCtrl('localizacion');
$localizaciones = $localizationCtrl->getAll();

include('views/partials/busqueda.view.php');
