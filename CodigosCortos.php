<?php


function  codigosLibrosAutor(){
    
    add_shortcode('vistaIngreso', 'addLibroAutor');
}

function addLibroAutor(){
    
    ob_start();
    include_once plugin_dir_path(__FILE__).'vista/vistaShortCode.php';
    $corto = ob_get_clean();
    return $corto;
}