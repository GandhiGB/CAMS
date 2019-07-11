<?php
class Office_model extends CI_Model {

  function get(){

    $this->db->select('*');
    $this->db->order_by('department', 'ASC');
    $q = $this->db->get('tbl_offices');

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

  function add($data){

    $result = $this->db->insert('tbl_offices', $data);

    return $result;
  }

}