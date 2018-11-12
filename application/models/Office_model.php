<?php
class Office_model extends CI_Model {

  function get(){

    $this->db->select('*');
    $q = $this->db->get('tbl_office');

    $data = [];
    if($q->num_rows() > 0) {
      foreach ($q->result() as $row) {
      $data[] = $row;
      }
    return $data;
    }

    else {
      return $data;
    }

  }

}