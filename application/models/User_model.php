<?php 
class User_model extends CI_Model {

	function login($username, $password) {
    	
	   $this -> db -> select('id, firstname, middlename, lastname');
	   $this -> db -> from('tbl_users');
	   $this->db->where("username like binary",$username);
	   $this->db->where("password like binary",$password);
	   $this -> db -> limit(1);
	 
	   $query = $this -> db -> get();
	 
	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	}
} 