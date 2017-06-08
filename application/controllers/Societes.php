<?php
  class Societes extends CI_Controller{
    public function index(){
      $data['title'] = 'Sociétés';

      $data['societes'] = $this->societe_model->get_societes();

      $this->load->view('templates/header');
      $this->load->view('societes/index', $data);
      $this->load->view('templates/footer');
    }
  }
