<?php
  class Client_model extends CI_Model{
    public function inscription($enc_password){
      $data = array(
        'nom' => $this->input->post('nom'),
        'prenom' => $this->input->post('prenom'),
        'adresse' => $this->input->post('adresse'),
        'code_postal' => $this->input->post('code_postal'),
        'ville' => $this->input->post('ville'),
        'email' => $this->input->post('email'),
        'pseudo' => $this->input->post('pseudo'),
        'password' => $enc_password,
        'password2' => $enc_password
      );

      return $this->db->insert('clients', $data);
    }
  }
