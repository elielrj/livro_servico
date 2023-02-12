<?php



    class Caveira extends CI_Controller{

        
        public function index(){

            $this->load->model('CaveiraModel');
            
            $tabela = $this->get_instance()->CaveiraModel->SelecionaTodos();

            var_dump($tabela);

            $this->load->view('index');
        }



    }
?>