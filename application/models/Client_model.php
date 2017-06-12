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

      //Insertion d'un utilisateur
      return $this->db->insert('clients', $data);
    }

    // Connexion utilisateur
    public function connexion($pseudo, $password){
      //Validation
      $this->db->where('pseudo', $pseudo);
      $this->db->where('password', $password);

      $result = $this->db->get('clients');

      if($result->num_rows() == 1){
        return $result->row->(0)->id;
      } else {
        return false;
      }
    }

    //Si l'utilisateur existe
    public function check_pseudo_exists($pseudo){
      $query = $this->db->get_where('clients', array('pseudo' => $pseudo));
      if(empty($query->row_array())){
        return true;
      }else{
        return false;
      }
    }
  }
