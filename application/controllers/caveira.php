<?php
    class Caveira extends CI_Controller{

        
        public function index(){
            echo "Bem vindo ao controller Caveira";

            $this->load->view('index');
        }



    }
?>