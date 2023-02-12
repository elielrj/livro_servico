<?php
    class Livro extends CI_Model{

        private $escritor;
        private $ultimoAcesso;
        private $guarnicaoDeServico;
        private $hidrometro;
        private $relogioEnergia;
        private $alteracoesDoServico;

        public function __construct(
            Usuario $escritor,
            DateTime $ultimoAcesso, 
            GuarnicaoDeServico $guarnicaoDeServico,
            Hidrometro $hidrometro,
            RelogioEnergia $relogioEnergia,
            $alteracoesDoServico
        )
        {
            $this->escritor = $escritor;
            $this->ultimoAcesso = $ultimoAcesso;
            $this->guarnicaoDeServico = $guarnicaoDeServico;
            $this->hidrometro = $hidrometro;
            $this->relogioEnergia = $relogioEnergia;
            $this->alteracoesDoServico = $alteracoesDoServico;

        }
    }

?>