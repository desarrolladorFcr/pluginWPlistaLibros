<?php

include_once ABSPATH . 'wp-admin/includes/upgrade.php';

class DbManejo {

    protected $tabla;
    protected $id;
    protected $campo;

    public function listarCampos() {

        global $wpdb;
        $listaCampo = $wpdb->get_results(
                "select * from " . $this->tabla, OBJECT
        );
        return $listaCampo;
    }

    public function eliminar($idRegistro) {

        global $wpdb;

        $wpdb->delete(
                $this->tabla, [$this->id => $idRegistro]
        );
    }

    public function crear($nombre) {

        global $wpdb;
        $wpdb->insert(
                $this->tabla, [
            $this->campo => $nombre
                ]
        );
        return $wpdb->insert_id;
    }

}
