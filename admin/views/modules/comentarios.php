<?php

$comentariosCtrl = new contactoCtrl('contacto');

$comentarios = $comentariosCtrl->rawSql('', ' ORDER BY Abierto ASC', '');


include('views/partials/comentarios.view.php');
