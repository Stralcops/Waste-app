<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends CI_Controller {
  public function __construct(){
    parent::__construct();

    // Load form helper library
    $this->load->helper(array('form', 'url'));
    // Load form validation library
    // Load session library
    //	$this->load->library('session');
    // Load database
    $this->load->model('login_database');
    $this->load->model('general_model');
    $this->load->model('mob_model');
    $this->load->library('session');
    $data['log_utilisateur'] = $this->session->userdata('log_utilisateur');
  }


  public function index($erreur=0)
  {

    // trnsl.1.1.20190618T130850Z.42e4c7ab9e43d05a.804acd6d9c832a790d0fe3b0794bd0ad708da771

    $this->db->where("pj_id !=", 27);
    $query = $this->db->get('t_pj');
    $data['pj'] = $query->result();
    $data['resume'] = $this->general_model->get_table('t_resume', "DESC");
    $query = $this->db->get('t_mob');
    $data['mob'] = $query->result();
    $data['combat_id'] = 1;
    $data['log_utilisateur'] = $this->session->userdata('log_utilisateur');
    $data['erreur_identifiants'] = $erreur;
    $this->load->view('templates/header', $data);
    $this->load->view('connexion/connexion', $data);
    $this->load->view('templates/footer', $data);
  }
}
