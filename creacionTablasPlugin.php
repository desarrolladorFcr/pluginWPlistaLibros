<?php

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

function creacionTablas() {

    global $wpdb;
    
    $charset_collate = $wpdb->get_charset_collate();
    $nombre_tabla = $wpdb->base_prefix . 'autores';
    
    if ($wpdb->get_var("show tables like '$nombre_tabla'") != $nombre_tabla) {
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        $sql = "CREATE TABLE " . $nombre_tabla . "(id_autor int(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, "
                . "nom_autor varchar(200))$charset_collate;";
        dbDelta($sql);
    }
    
    $nombre_tabla = $wpdb->base_prefix . 'libros';
    
    if ($wpdb->get_var("show tables like '$nombre_tabla'") != $nombre_tabla) {
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        $sql = "CREATE TABLE " . $nombre_tabla . "(id_libro int(9) NOT NULL AUTO_INCREMENT PRIMARY KEY, "
                . "nom_titulo varchar(200))$charset_collate;";
        dbDelta($sql);
    }
    
    $nombre_tabla = $wpdb->base_prefix . 'libros_autores';
    $rellibros = $wpdb->base_prefix . 'libros';
    $relautores = $wpdb->base_prefix . 'autores';

    if ($wpdb->get_var("show tables like '$nombre_tabla'") != $nombre_tabla) {
        require_once (ABSPATH . 'wp-admin/includes/upgrade.php');
        $sql = "CREATE TABLE " . $nombre_tabla . "("
                . "id_libro int(9), "
                . "id_autor int(9), "
                . "FOREIGN KEY (id_libro) REFERENCES " . $rellibros . "(id_libro), "
                . "FOREIGN KEY (id_autor) REFERENCES " . $relautores . "(id_autor))$charset_collate;";
        dbDelta($sql);
    }
}
