<?php
  class Clients extends CI_Controller{
    public function register(){
      $data['title'] = 'Créer un compte';

      $this->form_validation->set_rules('nom', 'Nom', 'required');
      $this->form_validation->set_rules('prenom', 'Prénom', 'required');
      $this->form_validation->set_rules('adresse', 'Adresse', 'required');
      $this->form_validation->set_rules('code_postal', 'Code postal', 'required');
      $this->form_validation->set_rules('ville', 'Ville', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required');
      $this->form_validation->set_rules('pseudo', 'Pseudo', 'required');
      $this->form_validation->set_rules('password', 'Mot de passe', 'required');
      $this->form_validation->set_rules('password2', 'Confirmer le mot de passe', 'matches[password]');

      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('clients/inscription', $data);
        $this->load->view('templates/footer');
      } else {
        // Encryption de mot de passe
        $enc_password = md5($this->input->post('password'));

        $this->client_model->register($enc_password);

        //Message
        $this->session->set_flashdata('user_registered', 'Vous n avez pas saisi le pseudo');

        redirect('societes');
      }
    }
  }
