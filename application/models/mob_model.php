<?php
Class mob_model extends CI_Model {

  public function get_mob(){
    $query = $this->db->get('t_mob');
  return  $query->result_array();
  }
  public function get_mob_id($id){
    $this->db->where('mob_id', $id);
    $query = $this->db->get('t_mob');
    return  $query->row_array();
  }
}

?>
