<?php
/*
 * Plugin Name: Libro y autor
 * Author: FELIPE CIFUENTES RIVERA
 */

include_once 'addMenu.php';
include_once 'creacionTablasPlugin.php';
include_once 'CodigosCortos.php';
include_once 'FuncionPeticiones.php';
include_once 'controladores/ClienteController.php';

addMenu1();
creacionTablas();
codigosLibrosAutor();

$peticiones = new FuncionPeticiones();

$peticiones->request_post(['crearLibro']);

function crearLibro(){
    
    $urlRedirect = $_REQUEST['redireccion'];
    $clienteControlador = new ClienteController();
    $clienteControlador->ingresoLibro();
    wp_redirect($urlRedirect);
}

