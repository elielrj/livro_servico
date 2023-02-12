<?php
    class Marcador {

        private $valor;
        private $data;

        public function __construct(float $valor,DateTime $data)
        {
            $this->valor = $valor;
            $this->data = $data;
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
