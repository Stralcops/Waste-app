<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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
 		$this->load->library('session');
 	  $data['log_utilisateur'] = $this->session->userdata('log_utilisateur');
 	}
           public function view($page = 'home', $erreur=0)
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
             $this->load->view('templates/header', $page, $data);
             $this->load->view('pages/'.$page, $data);
             $this->load->view('templates/footer', $data);
           }

         	public function form_connexion(){
           			$data = array(
           			'mail_user' => $this->input->post('mail_user'),
           			'mdp_user' => $this->input->post('mdp_user')
           			);
           			$result = $this->login_database->login($data);

           			if ($result == TRUE) {
           				$mail_user = $this->input->post('mail_user');
           				$mdp_user = $this->input->post('mdp_user');
           				$this->db->where('mail_user', $mail_user);
           				$this->db->where('mdp_user', $mdp_user);
           				$query = $this->db->get('t_user');
           				$result_login = $query->row_array();

           				$result = $this->login_database->read_user_information($mail_user);
           				if ($result != false) {
           					$session_data = array(
           						'mail_user' => $result[0]->mail_user,
           						'mdp_user' => $result[0]->mdp_user,
           						'prenom_user' => $result_login["prenom_user"],
           						'nom_user' => $result_login["nom_user"],
           						'user_id' => $result_login["user_id"],
           						'connect' => "true",
           						'statut_user' => $result_login["statut_user"],
           					);
           					$this->session->set_userdata('log_utilisateur', $session_data);
           					$data['log_utilisateur'] = $this->session->userdata('log_utilisateur');
           					redirect(base_url());
           				}
           		} else {
               	redirect(base_url("connexion/1"));
           		}
           	}
           	public function deconnexion() {
           			$this->session->sess_destroy();
           			redirect(base_url());
           	}
           }
