<!-- Hero Section Begin -->
<?php
include('modules/header.php');
include('modules/head.php');
?>
<!-- Header End -->

<?php
//Controlador de navegacion
$ruta = 'home';

// require_once('views/modules/' . $ruta . '.php');

PlantillaCtr::whiteList('home', 'inmuebles', 'login', 'inmueble', 'habitaciones', 'habitacion', 'contacto');
?>

<!-- Footer Section Begin -->
<?php
include('modules/footer.php');
?>
<!-- Footer End -->