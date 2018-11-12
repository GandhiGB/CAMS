<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller{

	function index() {

		unset($_SESSION["cams"]);
		//$this->session->unset_userdata('spc_cams');
		redirect('login', 'refresh');	
		  		
	}	
}