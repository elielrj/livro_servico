<?php
    class Hierarquia extends CI_Model{

        private $postoOuGraduacao;
        private $sigla;

        public function __construct(String $postoOuGraduacao,String $sigla)
        {
            $this->postoOuGraduacao = $postoOuGraduacao;
            $this->sigla = $sigla;
        }


        public function __get($key){
            return $this->{$key};
        }

        public function __set($key,$value){
            $this->{$key} = $value;
        }

    }
?>