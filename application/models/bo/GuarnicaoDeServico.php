<?php
    class GuarnicaoDeServico extends CI_Model{

        private $data;
        private $usuario;

        public function __construct(DateTime $data, $usuario)

        {
            $this->data = $data;
            $this->usuario = $usuario;
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