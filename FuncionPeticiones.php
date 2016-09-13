<?php

class FuncionPeticiones {
    /*
     * Funcion para agregar el gancho que hace 
     * maneja una petición post. $nombres_funcion = array con los nombres
     * de las funcionas que lo manejan
     */

    function request_post($nombres_funcion) {

        foreach ($nombres_funcion as $nom_funcion) {

            add_action('admin_post_' . $nom_funcion, $nom_funcion);
            add_action('admin_post_nopriv_'. $nom_funcion, $nom_funcion );
        }
    }
    
    

    /*
     * funcion para el gancho de petición 
     * ajax con privilegios $nombres_funciones = array, nombre de funciones
     */

    function request_ajax($nombres_funciones) {

        foreach ($nombres_funciones as $nombre) {

            add_action('wp_ajax_' . $nombre, 'ajax_' . $nombre);
        }
    }

    /*
     * funcion para el gancho de petición 
     * ajax sin privilegios $nombres_funciones = array, nombre de funciones
     */

    function request_ajax_nopriv($nom_funciones) {

        foreach ($nom_funciones as $nom) {

            add_action('wp_ajax_nopriv_' . $nom, 'ajax_' . $nom);
        }
    }

}
