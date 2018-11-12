<?php
class Folder_model extends CI_Model {

  function get_folder($where){


    $this->db->where($where);
    $this->db->select('*');
    $q = $this->db->get('tbl_folders');

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

  function get_other_folder($where)
  {

    $this->db->where($where);
    $this->db->select("tbl_assets.serial_number, tbl_assets.control_number, tbl_assets.category, tbl_assets.description, tbl_assets.brand");
    $this->db->from('tbl_folders');
    $this->db->join('tbl_assets', 'tbl_assets.id = tbl_folders.id');
    $q = $this->db->get();
 
 
    /* after we've made the queries from the database, we will store them inside a variable called $data, and return the variable to the controller */
    $data = [];
    if($q->num_rows() > 0)
    {
      foreach ($q->result() as $row)
      {
        $data[] = $row;
      }
      return $data;
    }

    else {
      return $data;
    }

  }

}