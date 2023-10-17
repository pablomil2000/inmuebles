<!-- Header start -->
<?php include('views/modules/cabecera.php'); ?>
<!-- Header end -->

<!-- Site wrapper -->
<?php
// var_dump($_SESSION);
Funciones::isLogin('admin', '../login');


include('views/modules/menu.php');

//<!-- Content start -->
PlantillaCtr::whiteList(array('logout'), true, array('admin', 'usuarios', 'localizaciones', 'inmuebles', 'habitaciones', 'editLocation', 'edithabitaciones', 'editinmuebles', 'deletehabitaciones', 'destacar', 'deleteimage', 'deleteinmuebles', 'deleteLocation', 'comentarios', 'comentario'));

?>
<!-- Content end -->

<!-- footer start -->
<?php

include('views/modules/footer.php');

?>

<!-- footer end -->