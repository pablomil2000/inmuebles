<?php

const DOMAIN = "http://syndication-harvard-homework-auckland.trycloudflare.com/inmuebles/";

// session_cache_limiter('public');    //Evitar error de "Documento expirado" para formulario enviado
session_start();

//? Clases

//? controllers

require_once('controllers/ruta.controller.php');        //*Core
require_once('controllers/funciones.controller.php');   //*Core
require_once('controllers/plantilla.controller.php');   //*Core
require_once('controllers/crud.controller.php');        //*Core
require_once('controllers/pagination.controller.php');  //*Core
require_once('controllers/carrito.controller.php');     //*Core
require_once('controllers/validar.controller.php');     //*Core

require('controllers/lang.controller.php');             //*Multi Lang

require_once('controllers/user.controller.php');
require_once('controllers/habitaciones.controller.php');
require_once('controllers/Inmueble.controller.php');
require_once('controllers/Localizacion.controller.php');
require_once('controllers/galeria.controller.php');
require_once('controllers/contacto.controller.php');

//? Modelos
require_once('models/conexion.model.php');              //*Core
require_once('models/crud.model.php');                  //*Core



PlantillaCtr::load();
