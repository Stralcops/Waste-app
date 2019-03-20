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

    $this->db->where('combat_mob_id', $id_select_mob);
    $query = $this->db->get('t_mob_combat');
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
    $this->load->view('combat/modal/modal_attaque', $data);
  }
  public function modal_degats()
  {
    $id_select_user = $_POST['id_mob'];
    $id_select_mob = $_POST['id_pj'];

    $this->db->where('user_id', $id_select_user);
    $query = $this->db->get('t_pj');
    $data['user_select']= $query->row_array();
    //
    $this->db->where('combat_mob_id', $id_select_mob);
    $query = $this->db->get('t_mob_combat');
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
    $this->load->view('combat/modal/modal_degats', $data);
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
  public function modal_add_combat()
  {
    $this->load->view('combat/modal/modal_add_combat');
  }

  public function degats_mob()
  {
    $nb_degats = $_POST['degats'];
    $id_mob = $_POST['mob_id'];
    $this->db->where('combat_mob_id', $id_mob);
    $query = $this->db->get('t_mob_combat');
    $query_mob = $query->row_array();
    $new_chp_mob = $query_mob['chp_mob'] - $nb_degats;
    $data_update = array(
      "chp_mob" => $new_chp_mob,
    );

    $this->db->where('combat_mob_id', $id_mob);
    $this->db->update('t_mob_combat', $data_update);

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
      $this->db->where('combat_mob_id', $info_mob->mob_id);
      $this->db->update('t_mob_combat', $data_update);
    }
  }
  public function attaque_cac()
  {
    $arme_id = $_POST['arme_id'];
    $type_attaque = $_POST['type_attaque'];
    $type_de = $_POST['type_de'];
    $result_de = $_POST['result_de'];
    $id_mob = $_POST['id_mob'];
    $id_pj = $_POST['id_pj'];


    $this->db->where('combat_mob_id', $id_mob);
    $query = $this->db->get('t_mob_combat');
    $query_mob = $query->row_array();
    $def_mob=  $query_mob['def_mob'];


    $this->db->where('pj_id', $id_pj);
    $query = $this->db->get('t_pj');
    $query_pj = $query->row_array();


    $this->db->where('arme_id', $arme_id);
    $query = $this->db->get('t_arme');
    $query_arme = $query->row_array();

    $cap_off = $query_pj['pui_user'] + $query_pj['melee_user'] + $query_arme['bonusdeg_arme'] +$result_de ;

    $resultat=  $def_mob - $cap_off;
    if($resultat >  0 && $resultat <=  10)
    {
      echo "0";
    }
    else if($resultat < 0 && $resultat> -9)
    {
      echo "1";
    }
    else if($resultat < 0 && $resultat < -10)
    {
      echo "2";
    }
  }
  public function result_attaque()
  {
    $id_mob = $_POST['id_mob'];
    $degats = $_POST['de_degats'];

    $this->db->where('combat_mob_id', $id_mob);
    $query = $this->db->get('t_mob_combat');
    $query_mob = $query->row_array();
    $chp_mob = $query_mob['chp_mob'];
    $chp_mob = $chp_mob - $degats;

    $data = array(
      'chp_mob' => $chp_mob,
    );

    $this->db->where('combat_mob_id', $id_mob);
    $this->db->update('t_mob_combat', $data);

    echo $query_mob['nom_mob']." à pris ".$degats." ! Il a maitenant ".$chp_mob." PV";
  }
  public function add_mob()
  {
    $select_mob = $_POST['select_mob'];
    $combat_id = $_POST['combat_id'];
    $data_update = array(
      "combat_id" => $combat_id
    );
    $this->db->where('mob_id' , $select_mob);
    $query = $this->db->get('t_mob');
    $this->db->insert('t_mob_combat',$query->row_array());
    $mob_combat_id = $this->db->insert_id();
    echo $this->db->insert_id();
    $this->db->where('combat_mob_id', $mob_combat_id);
    $this->db->update("t_mob_combat", $data_update);


    // $this->db->where('mob_id', $mob);
    // $query = $this->db->get('t_mob');
    // $query_mob = $query->row_array();
    //   $result = json_encode($query_mob);
    //   echo $result;
  }
  public function liste_mob_combat()
  {
    $data['combat_id'] = $_POST['combat_id'];
    $this->load->view('combat/liste_mob_combat', $data);
  }
  public function add_combat()
  {
    $data_insert = array(
      "nom_combat" => $_POST['nom_combat'],
      "lieu_combat" => $_POST['nom_combat'],
    );
    $this->db->insert('t_combat',$data_insert);



    // $this->db->where('mob_id', $mob);
    // $query = $this->db->get('t_mob');
    // $query_mob = $query->row_array();
    //   $result = json_encode($query_mob);
    //   echo $result;
  }

}
