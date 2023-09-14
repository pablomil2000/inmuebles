<!-- Hero Section Begin -->
<?php
include('modules/header.php');
// include('modules/head.php');
?>
<!-- Header End -->

<?php
//Controlador de navegacion
$ruta = 'home';


if (isset($_GET['ruta'])) {
    $ruta = Validar::vlt_String($_GET['ruta']);

    if ($ruta != 'home') {
        $ruta = '404';
    }
}

// require_once('views/modules/' . $ruta . '.php');

PlantillaCtr::whiteList('home', 'inmuebles', 'login');
?>

<!-- Footer Section Begin -->
<?php
include('modules/footer.php');
?>
<!-- Footer End -->