<?php
class Device_assignment_model extends CI_Model
 
{
/* we will use the function getUsers */
  function get_device_count($office_id)
  {
 
    $this->db->where('office_id', $office_id);
   $this->db->like('device_id', 'co', 'after');
    $this->db->select('id');
    $q = $this->db->get('tbl_device_assignments');

    $rowcount = $q->num_rows();

    return $rowcount;

  }

  
}