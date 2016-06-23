<?php
include("/../entities/MissoestabEntity.php");
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

class Missoestab_model extends CI_Model{
    //put your code here
    
    public function __construct() {
        $this->load->database();
    }
    
     public function get_missoestab($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('missoestab');
            return $query->result_array();
        }

        $query = $this->db->get_where('missoestab', array('id' => $slug));
        
        
        $missoestabEntity = new MissoestabEntity();  
        
        
        return $query->row_array();
    }
    
    public function insert_missoestab(){
        $this->load->helper('url');
        
        $missoestabEntity = new AcoestableEntity();
        $missoestabEntity->setTipomissoes($this->input->post('tipomissoes'));
        $missoestabEntity->setStatus($this->input->post('status'));
       
       

        $alug = url_title ($this->input->post ('title'), 'dash', TRUE);

        $data = array(
            'tipomissoes' => $this->input->post('tipomissoes'),
            'status' => $this->input->post('status'),
         

        );
        
     return $this->db->insert('missoestab', $data);
    }
    //put your code here
}