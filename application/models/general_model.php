<?php
Class General_model extends CI_Model {

public function get_table($table, $order = "DESC"){
  $section = substr($table, 2);

  if($table =="t_resume"){
    $this->db->order_by($section."_id", $order);

  }
  $query = $this->db->get($table);
  return $query->result_array();
}

}

?>
