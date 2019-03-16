<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Combats extends CI_Controller {

  public function modal_attaque()
  {
    $id_select_user = $_POST['id_select_user'];
    $id_select_mob = $_POST['id_select_mob'];

    $this->db->where('user_id', $id_select_user);
    $query = $this->db->get('t_pj');
    $data['user_select']= $query->row_array();

    $this->db->where('mob_id', $id_select_mob);
    $query = $this->db->get('t_mob');
    $data['mob_select']= $query->row_array();

    $query = $this->db->get('t_attaque');
    $data['attaques'] = $query->result();

  $data['arme_user'] = [];


    $this->db->where('user_id', $id_select_user);
    $query = $this->db->get('t_arme_user');
    $query_arme_user = $query->result();

    foreach ($query_arme_user as $info_arme_user) {
      $this->db->where('arme_id', $info_arme_user->arme_id);
      $query = $this->db->get('t_arme');

       array_push($data['arme_user'], $query->row_array()) ;

    }
    $this->load->view('modal/modal_attaque', $data);
  }

  function calcul_cap_off()
  {
    $id_attaque = $_POST['id_attaque'];
    $id_arme = $_POST['id_arme'];
    $de_result = $_POST['de_result'];
    $user_id = $_POST['user_id'];

    $this->db->where('user_id', $user_id);
    $query = $this->db->get('t_pj');
    $query_pj = $query->row_array();

    $puissance = $query_pj['pui_user'];
    $comp_arme = $query_pj['melee_user'];

    $this->db->where('arme_id', $id_arme);
    $query = $this->db->get('t_arme');
    $query_arme = $query->row_array();
    $bonus = $query_arme['bonusdeg_arme'];

     $resultat =  $puissance + $comp_arme + $bonus + $de_result;

      echo $resultat ;
  }
    public function modal_add_degats()
  {

    $id_arme = $_POST['id_arme'];
    $id_mob = $_POST['id_mob'];

    $this->db->where('arme_id', $id_arme);
    $query = $this->db->get('t_arme');
    $data['arme'] = $query->row_array();

    $data['mob_id'] = $id_mob;

    $this->load->view('modal/modal_add_degats', $data);
  }
  public function degats_mob()
  {
    $nb_degats = $_POST['degats'];
    $id_mob = $_POST['mob_id'];
    $this->db->where('mob_id', $id_mob);
    $query = $this->db->get('t_mob');
    $query_mob = $query->row_array();
    $new_chp_mob = $query_mob['chp_mob'] - $nb_degats;
    $data_update = array(
      "chp_mob" => $new_chp_mob,
    );

    $this->db->where('mob_id', $id_mob);
    $this->db->update('t_mob', $data_update);

    echo $query_mob['nom_mob']. " prend ".$nb_degats." dégâts";

  }
  public function heal_all_mob()
  {
    $query = $this->db->get('t_mob');
    $query_mob = $query->result();
    foreach ($query_mob as $info_mob) {
      $data_update = array(
        "chp_mob" => $info_mob->hp_mob
      );
      $this->db->where('mob_id', $info_mob->mob_id);
      $this->db->update('t_mob', $data_update);
    }
  }

}
