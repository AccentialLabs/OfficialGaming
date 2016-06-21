<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Funcionario extends CI_Controller {
    /* acrescentamos o construct como primero passo */

    public function __construct() {
        parent::__construct();
        //essas duas lishas são da model que contém as tabelas.
        //$this->load->model('realizacoes_model');
        $this->load->model('equipestab_model');
        $this->load->model('email_model');

        $this->load->model('funcionario_model');
        $this->load->model('realizacoestab_model');

        $this->load->model('importarfuncionarios_model'); //código para mostrar a tela importar/funcionarios
        //essa linha seguinte faz parte do codigo.
        $this->load->helper('url_helper');
    }

    public function cadastrarFuncionario() {

        /* tela padrão cabeçalho e rodapé */
        $this->load->library('session');

        if (!empty($this->session->flashdata('editJogador'))) {

            $data['funcParaEdit'] = $this->funcionario_model->get_funcionario($this->session->flashdata('editJogador'));
        }

        $data['empresa'] = $this->session->userdata('empresaLogada');
        /* tela padrão cabeçalho e rodapé */

        $data['funcionario'] = $this->funcionario_model->get_funcionario(); //codigo da tela
        $data['realizacoestab'] = $this->realizacoestab_model->get_realizacoestab(); //codigo para a tabela

        $this->load->view('templates/gaming_default'); //(gaming_default) tela padrão cabeçãlho e rodapé
        $this->load->view('funcionario/cadastrarFuncionario', $data);
    }

    public function importarFuncionario() {
        /* tel padrão cabeçalho e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /* tela padrão cabeçalho e rodapé */

        $data['importarfuncionarios'] = $this->importarfuncionarios_model->get_importarfuncionarios();

        $this->load->view('templates/gaming_default'); //(gaming_default) tela padrão cabeçalho rodapé
        $this->load->view('funcionario/importarFuncionario');
    }

    public function enviarEmailConvite() {
        /* tela padrão,cabeçãlhoe e rodapé */
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /* tela padrão cabeçãlho e rodapé */

        $data['equipestab'] = $this->equipestab_model->get_equipestab();   //faz parte da tabela
        $data['email'] = $this->email_model->get_email();         //faz parte da tela

        $this->load->view('templates/gaming_default'); //(gaming_default) tela padrão cabeçãlho e rodapé
        $this->load->view('funcionario/enviarEmailConvite', $data);

        //fazer a data de gravação do emails
        //como fazer a data de gravação (do email) na controller do php
    }

    public function createFuncionario() {
        $this->funcionario_model->insert_funcionario();
        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('Jogadores/index', 'refresh');
    }
    
    public function editaFunctionario(){
        
    }

    public function createFuncionario2() {
        $this->email_model->insert_email();
        echo "sucesso email ";
    }

    public function createImportarfuncionarios() { //esse codigo mostrara a tela (Importar funcionarios).
        $this->importarfuncionarios_model->insert_importarfuncionarios();
        echo "sucesso";
    }

}
