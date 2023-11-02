<?php

$comentariosCtrl = new contactoCtrl('newclient');

if (isset(explode("/", $_GET["url"])[2])) {
    $id = explode("/", $_GET["url"])[1];
    $act = explode("/", $_GET["url"])[2];

    if ($act == "delete") {
        $comentariosCtrl->update(
            array(
                "visible" => 0
            ),
            $id
        );
    }
}


$comentarios = $comentariosCtrl->rawSql(' WHERE visible LIKE 1 ', ' ORDER BY Abierto ASC', '');


include('views/partials/nuevos-clientes.view.php');
