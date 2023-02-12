<?php
    class NivelDeAcessoDAO extends CI_Model implements ICrud{


    public function create($object){

    }
    public function update($object){

    }
    public function retrive($id){
        
    }
    public function retriveAll(){
        
        $retorno =$this->db->get('nivelDeAcesso',100);

       $niveisDeAcesso = [];

        foreach($retorno->result() as $value){
           $nivelDeAcesso = new NivelDeAcesso($value->descricao);
           $niveisDeAcesso = $nivelDeAcesso;
        }
        return $niveisDeAcesso;

    }

    public function delete($object){

    }


    }
?>