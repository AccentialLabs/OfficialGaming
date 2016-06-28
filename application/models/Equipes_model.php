<?php
include("/../entities/EquipesEntity.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Acoes_model
 *
 * @author Raphael Pizzo
 */




class Equipes_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }

    public function get_equipes($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('equipes');
            return $query->result_array();
        }

        $query = $this->db->get_where('equipes', array('id' => $slug));
        
        
        $equipesEntity = new EquipesEntity();
        
        return $query->row_array();
    }

    public function insert_equipes(){  
        $this->load->helper('url');
        
        $equipesEntity = new EquipesEntity();
        $equipesEntity->setCargo_id($this->input->post('cargo_id'));
        $equipesEntity->setDepartamento_id($this->input->post('departamento_id'));
        $equipesEntity->setUnidade_id($this->input->post('unidade_id'));
        $equipesEntity->setCidade_id($this->input->post('cidade_id'));
        $equipesEntity->setEstado_id($this->input->post('estado_id'));
        $equipesEntity->setPais_id($this->input->post('pais_id'));
        $equipesEntity->setAleatorio($this->input->post('aleatorio'));
        $equipesEntity->setEquipeqtd($this->input->post('equipeqtd'));
        $equipesEntity->setEquipeprefixo($this->input->post('equipeprefixo'));
        $equipesEntity->setManual($this->input->post('manual'));
        $equipesEntity->setEquipenome($this->input->post('equipenome'));
        $equipesEntity->setTemaequipe($this->input->post('temaequipe'));
        $equipesEntity->setCadastro($this->input->post('cadastro'));
           
        $slug = url_title($this->input->post('title'), 'dash', TRUE);

           $data = array(
            'cargo_id' => $this->input->post('cargo_id'),
            'departamento_id' => $this->input->post('departamento_id'),
            'unidade_id' => $this->input->post('unidade_id'),
            'cidade_id' => $this->input->post('cidade_id'),
            'estado_id' => $this->input->post('estado_id'),
            'pais_id' => $this->input->post('pais_id'),
            'aleatorio' => $this->input->post('aleatorio'),
            'equipeqtd' => $this->input->post('equipeqtd'),
            'equipeprefixo' => $this->input->post('equipeprefixo'),
            'manual' => $this->input->post('manual'),
            'equipenome' => $this->input->post('equipenome'),
            'temaequipe' => $this->input->post('temaequipe'),
            'cadastro' => $this->input->post('cadastro')
               
        );
           
         return $this->db->insert('equipes', $data);
    }
    //put your code here
}