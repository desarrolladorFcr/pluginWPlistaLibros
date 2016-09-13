<?php

include_once plugin_dir_path(__FILE__) . 'DbManejo.php';

class LibroAutorPers extends DbManejo {

    function __construct() {

        global $wpdb;
        $this->tabla = $wpdb->base_prefix . 'libros_autores';
    }

    function crearRelacion($idAutor, $idTitulo) {

        global $wpdb;
        $wpdb->insert(
                $this->tabla, [
            'id_libro' => $idTitulo,
            'id_autor' => $idAutor
                ]
        );
    }

    function eliminarReleacion($idAutor, $idTitulo) {

        global $wpdb;
        $wpdb->delete($this->tabla, ['id_libro' => $idTitulo,
            'id_autor' => $idAutor]);
    }

    function listarTodoRegistro() {

        global $wpdb;
        return $wpdb->get_results("select * from " . $this->tabla . " inner join " . $wpdb->base_prefix . 'autores '
                        . 'on ' . $wpdb->base_prefix . 'autores.id_autor=' . $this->tabla . '.id_autor' .
                        ' inner join ' . $wpdb->base_prefix . 'libros on ' . $wpdb->base_prefix . 'libros' . '.id_libro ' .
                        "=" . $this->tabla . ".id_libro", OBJECT);
    }

}
