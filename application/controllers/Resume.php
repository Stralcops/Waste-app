<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

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
 		$this->load->model('resume_model');
 		$this->load->library('session');
 	  $data['log_utilisateur'] = $this->session->userdata('log_utilisateur');
 	}

  public function insert(){
    $data_insert = array (
      "nom_resume" => $_POST['nom_resume'],
      "text_resume" => $_POST['text_resume'],
    );

    $this->db->insert("t_resume", $data_insert);
    echo $this->db->insert_id();
  }


}
