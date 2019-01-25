<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personnages extends CI_Controller {

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

           public function index()
           {
             $this->load->view('templates/header');
             $this->load->view('pages/objets');
             $this->load->view('templates/footer');
           }
           public function feuillePerso()
           {

             $this->load->view('pages/feuille');

           }
           public function update_pj()
           {
             $data = array(

               "joueur_user" => $this->input->post('joueur_user'),
               "peuple_user" => $this->input->post('peuple_user'),
               "sexe_user" => $this->input->post('sexe_user'),
               "metier_user" => $this->input->post('metier_user'),
               "origine_user" => $this->input->post('origine_user'),
               "heritage_user" => $this->input->post('heritage_user'),
               "photo_pj" => $this->input->post('photo_pj'),
               "ba_user" => $this->input->post('ba_user'),
               "cba_user" => $this->input->post('cba_user'),
               "eclat_user" => $this->input->post('eclat_user'),
               "exp_user" => $this->input->post('exp_user'),
               "chp_user" => $this->input->post('chp_user'),
               "hp_user" => $this->input->post('hp_user'),
               "chpnl_user" => $this->input->post('chpnl_user'),
               "cpsy_user" => $this->input->post('cpsy_user'),
               "nom_user" => $this->input->post('nom_user'),
               "psy_user" => $this->input->post('psy_user'),



               "adr_user" => $this->input->post('adr_user'),
               "pui_user" => $this->input->post('pui_user'),
               "cla_user" => $this->input->post('cla_user'),
               "pre_user" => $this->input->post('pre_user'),
               "tre_user" => $this->input->post('tre_user'),
               "armesdis_user" => $this->input->post('armesdis_user'),
               "coer_user" => $this->input->post('coer_user'),
               "com_user" => $this->input->post('com_user'),
               "dis_user" => $this->input->post('dis_user'),
               "filou_user" => $this->input->post('filou_user'),
               "melee_user" => $this->input->post('melee_user'),
               "monte_user" => $this->input->post('monte_user'),
               "mouv_user" => $this->input->post('mouv_user'),
               "nage_user" => $this->input->post('nage_user'),
               "navig_user" => $this->input->post('navig_user'),
               "perc_user" => $this->input->post('perc_user'),
               "persu_user" => $this->input->post('persu_user'),
               "soin_user" => $this->input->post('soin_user'),
               "survie_user" => $this->input->post('survie_user'),
               "cap_user" => $this->input->post('cap_user'),


               "bonus_degats_user" => $this->input->post('bonus_degats'),
               "bonus_vitesse_user" => $this->input->post('bonus_vitesse'),

             );

             $id_user = $this->input->post('id_user');
             $this->db->select("*");
             $this->db->where("user_id", $id_user);
             $this->db->update('t_pj', $data);
             // $this->db->delete("t_pj");
           }


           public function ajoutArme()
           {
             $this->load->view('pages/ajoutArme');
           }


           public function update_position()
           {
             $data = array(
               "posX_user" => $this->input->post('posX_user'),
               "posY_user" => $this->input->post('posY_user'),
             );


             $id_user ="27";
             $this->db->select("*");
             $this->db->where("user_id", $id_user);
             $this->db->update('t_pj', $data);
             // $this->db->delete("t_pj");

           }
           public function contentArmes()
           {
             $data['id_user'] =  $_POST['id_user'];
             $this->load->view('pages/contentArmes', $data);
           }


}
