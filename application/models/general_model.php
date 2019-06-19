<?php
Class General_model extends CI_Model {

public function get_table($table){
  $query = $this->db->get($table);
  return $query->result_array();
}

}

?>
