<?php
    class NivelDeAcessoController extends CI_Controller{


        public function index(){

            $this->load->model('/dao/NivelDeAcessoDAO');

            $tabela = $this->get_instance()->NivelDeAcessoDAO->restriveAll();

            var_dump($tabela);

            $dados = array(
                'titulo' => 'Nível de Acesso',
                'tabela' =>  $tabela,
                'pagina' => 'nivelDeAceso/index.php'
            );

            $this->load->view('index');
        }
    }
?>