<?php
class Formularioo_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function insertar_sala($titulo,$area,$foto1,$foto2)
    {
        $datos=array(
            'titulo'=>$titulo,
            'contenido'=> $area,
            'foto_1'=>$foto1,
            'foto2'=>$foto2
        );

        $this->db->insert('Salas', $datos);
    }

}