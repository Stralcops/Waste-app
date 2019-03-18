<?php
Class Login_Database extends CI_Model {

  // Insert registration data in database
  public function registration_insert($data) {

    // Query to check whether username already exist or not
    $condition = "mail_user =" . "'" . $data['mail_user'] . "'";
    $this->db->select('*');
    $this->db->from('mail_user');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();
    if ($query->num_rows() == 0) {

    // Query to insert data in database
    $this->db->insert('mail_user', $data);
    if ($this->db->affected_rows() > 0) {
    return true;
    }
    } else {
    return false;
    }
  }

  // Read data using username and password
  public function login($data) {

    $condition = "mail_user =" . "'" . $data['mail_user'] . "' AND " . "mdp_user =" . "'" . $data['mdp_user'] . "'";
    $this->db->select('*');
    $this->db->from('t_user');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return true;
    } else {
      return false;
    }
  }

  // Read data from database to show data in admin page
  public function read_user_information($mail_user) {

    $condition = "mail_user =" . "'" . $mail_user. "'";
    $this->db->select('*');
    $this->db->from('t_user');
    $this->db->where($condition);
    $this->db->limit(1);
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return $query->result();
    } else {
      return false;
    }
  }

}

?>
