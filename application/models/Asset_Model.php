<?php
class Asset_model extends CI_Model {

  function get_asset($where){


    $this->db->where($where);
    $this->db->select('*');
    $q = $this->db->get('tbl_assets');

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