<?php



class ElaborarTablasClase {
    
    function tablaInicio($objetoLibros){
        
        return include_once plugin_dir_path(__FILE__).'tablaLibros.php';
    }
    
    function tablaAdministrador(){
        
    }
}
