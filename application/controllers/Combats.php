<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Combats extends CI_Controller {

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
// $id_user = 27;
           public function update_pj()
           {
             $data = array(
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
               "bonus_degats_user" => $this->input->post('bonus_degats'),
             );
             $id_user = $this->input->post('id_user');
             $this->db->select("*");
             $this->db->where("user_id", $id_user);
             $this->db->update('t_pj', $data);
             // $this->db->delete("t_pj");

           }

}
