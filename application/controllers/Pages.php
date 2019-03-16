<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

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

           public function view($page = 'home')
           {
             $this->db->where("user_id !=", 27);
             $query = $this->db->get('t_pj');
             $data['pj'] = $query->result();

             $query = $this->db->get('t_mob');
             $data['mob'] = $query->result();

             $this->load->view('templates/header', $page, $data);
             $this->load->view('pages/'.$page, $data);
             $this->load->view('templates/footer', $data);
           }

}
