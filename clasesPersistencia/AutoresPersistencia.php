<?php

include_once plugin_dir_path(__FILE__).'DbManejo.php';

class AutoresPersistencia extends DbManejo{
    
    public function __construct() {
        
        global $wpdb;
        $this->campo = 'nom_autor';
        $this->id = 'id_autor';
        $this->tabla = $wpdb->base_prefix .'autores';
    }
}
