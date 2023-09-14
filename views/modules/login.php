<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // var_dump($_POST);

    $User = new UserCtrl("usuarios");
    $User->login('nombre', 'password');
}

include('views/partials/login.view.php');
