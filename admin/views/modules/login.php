<?php
// var_dump($_POST);
if (isset($_SESSION['admin'])) {
    header('location:inicio');
}
// var_dump($_GET);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = new UserCtrl('usuarios');
    $alert = $login->login();
}


include('views/partials/login.view.php');
