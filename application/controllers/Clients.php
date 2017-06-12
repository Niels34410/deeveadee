<?php
  class Clients extends CI_Controller{
    public function register(){
      $data['title'] = 'Créer un compte';

      $this->form_validation->set_rules('nom', 'Nom', 'required');
      $this->form_validation->set_rules('prenom', 'Prénom', 'required');
      $this->form_validation->set_rules('adresse', 'Adresse', 'required');
      $this->form_validation->set_rules('code_postal', 'Code postal', 'required');
      $this->form_validation->set_rules('ville', 'Ville', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
      $this->form_validation->set_rules('pseudo', 'Pseudo', 'required|callback_check_pseudo_exists');
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

        //Get pseudo
        $pseudo = $this->input->post('pseudo');
        //Get et encryption du mot de passe
        $password = md5($this->input->post('password'));

        //Connexion utilisateur
        $user_id = $this->client_model->login($pseudo, $password);

        if($user_id){
          //Créer session
          $client_data = array(
            'id' => $id,
            'pseudo' => $pseudo,
            'logged_in' => true
          );

          $this->session->set_userdata($user_data);

          //Message
          $this->session->set_flashdata('user_registered', 'Vous n avez pas saisi le pseudo');

          redirect('societes');
        } else {
          //Message
          $this->session->set_flashdata('login_failed', 'Login est invalide');

          redirect('clients/connexion');
        }


      }
    }

    //Connexion utilisateur
    public function connexion(){
      $data['title'] = 'Se connecter';

      $this->form_validation->set_rules('pseudo', 'Pseudo', 'required');
      $this->form_validation->set_rules('password', 'Mot de passe', 'required');

      if($this->form_validation->run() === FALSE){
        $this->load->view('templates/header');
        $this->load->view('clients/connexion', $data);
        $this->load->view('templates/footer');
      } else {

        //Ecrire un message
        $this->session->set_flashdata('user_loggedin', 'Vous n avez pas saisi le pseudo');

        redirect('societes');
      }
    }

    //Déconnexion utilisateur
    public function deconnexion(){
      //Désactivation données utilisateur
      $this->session->unset_userdata('logged_in');
      $this->session->unset_userdata('user_id');
      $this->session->unset_userdata('pseudo');

      //Message
      $this->session->set_flashdata('client_loggedout', 'Vous êtes maintenant déconnecté');

      redirect('clients/connexion');
    }

    //Si le pseudo existe
    function check_pseudo_exists($username){
      $this->form_validation->set_message('check_pseudo_exists', 'Ce pseudo existe déjà. Veuillez en choisir un autre.');
      if($this->client_model->check_pseudo_exists($pseudo)){
        return true;
      }else{
        return false;
      }
    }

    //Si l'adresse e-mail existe
    function check_email_exists($email){
      $this->form_validation->set_message('check_email_exists', 'Cet e-mail existe déjà. Veuillez en choisir un autre.');
      if($this->client_model->check_email_exists($email)){
        return true;
      }else{
        return false;
      }
    }
  }
