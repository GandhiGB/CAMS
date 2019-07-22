<?php
class Asset_model extends CI_Model {

  function get(){

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

  function add($data){
    $result = $this->db->insert('tbl_assets', $data);
    return $result;
  }

  function fetch_data($search_value){

    $this->db->select("*");
    $this->db->from("tbl_assets");

    if($search_value != '') {

      $this->db->like('id', $search_value, 'after');
      $this->db->or_like('po_number', $search_value, 'after');
      $this->db->or_like('serial_number', $search_value, 'after');
      $this->db->or_like('model', $search_value, 'after');
      $this->db->or_like('category', $search_value, 'after');
      $this->db->or_like('brand', $search_value, 'after');
      $this->db->or_like('description', $search_value, 'after');
      $this->db->or_like('date_acquired', $search_value, 'after');
    }

    $this->db->order_by('category', 'ASC');
    return $this->db->get();
  }

  function update($data){
    $this->db->where('id', $data['id']);
    $result = $this->db->update('tbl_assets', $data);
    return $result;
  }

}