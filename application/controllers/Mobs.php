<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobs extends CI_Controller {
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


  public function index(){
    $this->load->view("templates/header");
    $this->load->view("mobs/index.php");
    $this->load->view("templates/footer");
  }
}
