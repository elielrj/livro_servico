<?php
    class Usuario extends CI_Model{
        
        private $nome;
        private $status;
        private $dataDeCriacao;
        private $ultimoAcesso;
        private $hierarquia;
        private $funcao;
        private $guarnicoesDeServico;

        public function __construct(
            String $nome,
            bool $status,DateTime $dataDeCriacao,
            DateTime $ultimoAcesso,
            Hierarquia $hierarquia,
            Funcao $funcao,
            GuarnicaoDeServico $guarnicoesDeServico)
        {
            $this->nome = $nome;
            $this->status = $status;
            $this->dataDeCriacao = $dataDeCriacao;
            $this->ultimoAcesso = $ultimoAcesso;
            $this->hierarquia = $hierarquia;
            $this->funcao = $funcao;
            $this->guarnicoesDeServico = $guarnicoesDeServico;
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