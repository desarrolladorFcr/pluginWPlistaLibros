<?php

function addMenu1(){
    
    add_action('admin_menu', 'funcion_admin');
}

function funcion_admin(){
    
    add_menu_page('Titulo_autor', 'Titulo_autor', 'read', 'Titulo_autor', 'area_plugin');
}

function area_plugin(){
    
    echo '123';
}