<?php
Class resume_model extends CI_Model {

  public function get_pnj(){
    $query = $this->db->get('t_pnj');
  return  $query->result_array();
  }
  public function get_pnj_id($id){
    $this->db->where('id_pnj', $id);
    $query = $this->db->get('t_pnj');
    return  $query->row_array();
  }

}

?>
