<!-- Hero Section Begin -->
<?php
include('modules/header.php');
include('modules/head.php');
?>
<!-- Header End -->

<?php
//Controlador de navegacion
PlantillaCtr::whiteList('home', 'inmuebles', 'login', 'inmueble', 'habitaciones', 'habitacion', 'contacto', 'hazte-cliente');
?>

<!-- Footer Section Begin -->
<?php
include('modules/footer.php');
?>
<!-- Footer End -->