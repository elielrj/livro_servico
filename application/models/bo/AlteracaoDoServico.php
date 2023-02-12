<?php
    class AlteracaoDoServico extends CI_Model{
        private $evento;
        private $descricao;
        private $status;
        private $pendenciaResolvida;

        public function __construct(Evento $evento, String $descricao,bool $status, bool $pendenciaResolvida)
        {
            $this->evento = $evento;
            $this->descricao = $descricao;
            $this->status = $status;
            $this->pendenciaResolvida = $pendenciaResolvida;
        }

        public function __get($key)
        {
            return $this->{$key};
        }

        public function __set($key, $value)
        {
            $this->{$key} = $value;
        }

    }
?>