<?php
  class Dvd_model extends CI_Model{
    public function __construct(){
      $this->load->database();
    }

    public function get_dvd(){

      $this->db->join('societe', 'dvd.societeD=societe.numS');

      $this->db->join('acteur', 'dvd.acteur=acteur.numA');
      $query=$this->db->get('dvd');
      return $query->result_array();
    }
  }
