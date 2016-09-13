<?php

include_once plugin_dir_path(__FILE__) . '../clasesPersistencia/AutoresPersistencia.php';
include_once plugin_dir_path(__FILE__) . '../clasesPersistencia/LibroAutorPers.php';
include_once plugin_dir_path(__FILE__) . '../clasesPersistencia/LibrosPersistencia.php';

class ClienteController {

    function ingresoLibro() {

        $librosPers = new LibrosPersistencia();
        $autoresPers = new AutoresPersistencia();
        $autoresLibroPer = new LibroAutorPers();

        $titulo = $_REQUEST['nomLibro'];
        $autor = $_REQUEST['nomAutor'];
         
//        Se crean el autor y el libro
        $idLibro = $librosPers->crear($titulo);
        $idAutor = $autoresPers->crear($autor);

//        Se crea la relación
        $autoresLibroPer->crearRelacion($idAutor, $idLibro);
    }

}
