<?php

include_once plugin_dir_path(__FILE__).'DbManejo.php';

class LibrosPersistencia extends DbManejo{
    
    public function __construct() {
        
        global $wpdb;
        $this->campo = 'nom_titulo';
        $this->id = 'id_libro';
        $this->tabla = $wpdb->base_prefix . 'libros';
    }
}
