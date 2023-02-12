<?php

    class Funcao extends CI_Model{

        private $descricao;
        private $status;
        private $nivelDeAcesso;

        public function __construct(String $descricao,bool $status, NivelDeAcesso $nivelDeAcesso)
        {
            $this->descricao = $descricao;
            $this->status = $status;
            $this->nivelDeAcesso = $nivelDeAcesso;
        }

        public function __get($key){
            return $this->{$key};
        }

        public function __set($key, $value){
            $this->{$key} = $value;
        }


        
    }


?>