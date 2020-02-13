<?php
class Formularioo_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    public function insertar_sala($titulo,$area)
    {
        $datos=array(
            'titulo'=>$titulo,
            'texto'=> $area
        );

        $this->db->insert('test1', $datos);
    }

}