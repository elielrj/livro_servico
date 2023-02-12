<?php
    class CaveiraModel extends CI_Model{

        public $id;
        public $a;
        public $b;
        public $c;

        public function SelecionaTodos(){

           $retorno = $this->db->get('caveira',100);

           return $retorno->result();
        }
    }



?>