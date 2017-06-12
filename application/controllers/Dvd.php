<?php
  class Dvd extends CI_Controller{
    public function index(){
      $data['title'] = 'Liste des DVD';

      $data['dvds'] = $this->dvd_model->get_dvd();

      $this->load->view('templates/header');
      $this->load->view('dvd/index', $data);
      $this->load->view('templates/footer');
    }
  }
