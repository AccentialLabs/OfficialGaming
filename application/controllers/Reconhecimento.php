<?php

//PODEMOS UTILIZAR ESSA TELA COMO EXEMPLO POIS AQUI ESTA EXECUTANDO DUAS TABELAS

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Reconhecimento extends CI_Controller {
    //put your code here
    
    /*acrescentamos o construct como primero passo*/
     public function __construct() {
        parent::__construct();
        $this->load->model('reconhecimento_model');
        $this->load->model('tiporeconhecimento_model');
        $this->load->model('filtrareconhecimento_model');
         $this->load->model('acoestable_model');
         
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function cadastrarConquista(){
        
   /*tela padrão cabeçalho e rodapé*/
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /*tela padrão cabeçalho e rodapé*/
    
         $data['tiporeconhecimento'] = $this->tiporeconhecimento_model->get_tiporeconhecimento();
         $data['acoestable'] = $this->acoestable_model->get_acoestable();
         
         $this->load->view('templates/gaming_default'); 
         $this->load->view('reconhecimento/cadastrarConquista',$data);
    }  
   
     public function reconhecimentoConquista(){
         
         /*tela padrão cabeçalho e rodapé*/
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /*tela padrão cabeçalho e rodapé*/
         
     //nesse codigo só precisei colocar a (model do reconhecimento) para mostrar a tabela ma tela.
        $data['reconhecimento'] = $this->reconhecimento_model->get_reconhecimento();
         
        $this->load->view('templates/gaming_default');
        $this->load->view('reconhecimento/reconhecimentoConquista',$data);
    } 

     public function createConquista() {
        $this->tiporeconhecimento_model->insert_tiporeconhecimento();
        echo "sucesso";
    }
   
     public function createFiltrareconhecimmento() { 
        $this->filtrareconhecimento_model->insert_filtrareconhecimento();
        echo "sucesso"; //codigo apenas para mostrar na tela Reconhecimento/conquista a partede opções de filtrar
    }
    
      /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */                      //muda status da tela cadastrar conquista.
    public function mudaStatusCadastrarconquista() {
     
        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('acoestable', $data)) {            
            echo "sucesso";
        } else {
            echo "error";
        }
    } //FIM, muda status da tela cadastrar conquista.
    
     /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusReconhecimento() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('reconhecimento', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function deleteReconhecimento() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('reconhecimento', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }
}  