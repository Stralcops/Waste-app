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
      $data['mob'] = $this->mob_model->get_mob();
    $data['log_utilisateur'] = $this->session->userdata('log_utilisateur');
    $this->load->view("templates/header", $data);
    $this->load->view("mobs/index.php", $data);
    $this->load->view("templates/footer", $data);
  }
  public function form($type="update", $id){
    $data['log_utilisateur'] = $this->session->userdata('log_utilisateur');


    $data['type'] = $type;
    $data['mob_update'] =   $this->pnj_model->get_mob_id($id);

    $this->load->view("templates/header",$data);
    $this->load->view("mob/form",$data);
    $this->load->view("templates/footer",$data);
  }
  public function update($id){
    $data_update = array(
      "nom_mob" => $_POST['nom_mob'],
      "attaque_mob" => $_POST['attaque_mob'],
    );
    $this->db->where("mob_id", $id);
    if($this->db->update('t_mob', $data_update))
    {
      redirect(base_url('mob'));
    }
  }
}
