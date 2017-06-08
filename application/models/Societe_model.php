<?php
  class Societe_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function get_societes($slug = FALSE){
      if($slug === FALSE){
        $query = $this->db->get('societe');
        return $query->result_array();
      }

      $query = $this->db->get_where('societes', array('slug' => $slug));
      return $query->row_array();
    }
  }
