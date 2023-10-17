<?php

$comentariosCtrl = new contactoCtrl('contacto');

$comentarios = $comentariosCtrl->rawSql('', ' ORDER BY Abierto DESC', '');


include('views/partials/comentarios.view.php');
