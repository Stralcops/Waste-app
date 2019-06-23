<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pnj extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
 		$this->load->model('pnj_model');
 		$this->load->library('session');
 	  $data['log_utilisateur'] = $this->session->userdata('log_utilisateur');
 	}
  public function index(){
    $data['log_utilisateur'] = $this->session->userdata('log_utilisateur');

    $data['pnj'] = $this->pnj_model->get_pnj();

    $this->load->view("templates/header", $data);
    $this->load->view("pnj/index.php", $data);
    $this->load->view("templates/footer", $data);
  }
  public function form($type="update", $id){
    $data['log_utilisateur'] = $this->session->userdata('log_utilisateur');


    $data['type'] = $type;
    $data['pnj_update'] =   $this->pnj_model->get_pnj_id($id);

    $this->load->view("templates/header",$data);
    $this->load->view("pnj/form",$data);
    $this->load->view("templates/footer",$data);
  }
  public function pnj_generate(){
    $name_type = $_POST['name_type'];
    // $token = "1241:6dad3c0009479338a74673efb18e84cad52eb90f";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://names.drycodes.com/10?nameOptions='. $name_type);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_USERPWD, $token);
    // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $output = curl_exec($ch);
    curl_close($ch);
    $values = json_decode($output, true);
    $nom_garçon = array();
    foreach ($values as $key) {
     $key = str_replace("_", " ",$key);
      array_push($nom_garçon, $key);
    }
    $data["nom_garçon_liste"] = $nom_garçon;
    $this->load->view('pnj/pnj_generate',$data);
  }
  public function update($id){
    $data_update = array(
      "nom_pnj" => $_POST['nom_pnj'],
      "desc_pnj" => $_POST['desc_pnj'],
    );
    $this->db->where("id_pnj", $id);
    if($this->db->update('t_pnj', $data_update))
    {
      redirect(base_url('pnj'));
    }
  }
  public function insert(){
    $data_insert = array (
      "nom_pnj" => $_POST['data_name'],

    );

    $this->db->insert("t_pnj", $data_insert);
    echo $this->db->insert_id();
  }
  public function insert_new_pnj(){
    $data_insert = array (
      "nom_pnj" => $_POST['nom_pnj'],
      "desc_pnj" => $_POST['desc_pnj'],
      "page_pnj" => $_POST['page_pnj'],
      "livre_pnj" => $_POST['livre_pnj'],

    );

    $this->db->insert("t_pnj", $data_insert);
    echo $this->db->insert_id();
  }


}
