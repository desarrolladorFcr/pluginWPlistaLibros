<?php

require_once plugin_dir_path(__FILE__). '../clasesPersistencia/LibroAutorPers.php';
require_once plugin_dir_path(__FILE__). 'ElaborarTablasClase.php';

$libroAutPersistencia = new LibroAutorPers();
$elaborarTablasClases = new ElaborarTablasClase();

$objLibros = $libroAutPersistencia->listarTodoRegistro();
$elaborarTablasClases->tablaInicio($objLibros);