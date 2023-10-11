<?php

Funciones::isLogin('admin');
$id = $_SESSION['admin'];

$userCtrl = new UserCtrl('usuarios');
$user = $userCtrl->getById(array('id' => $id));


include('views/partials/menu.view.php');
