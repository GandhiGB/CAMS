<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {

		if (isset($this->session->userdata['cams'])) {


			//$this->load->model('office_model');
			
			//$data['offices'] = $this->office_model->get();

			$this->load->view('view-header',$data);
			$this->load->view('view-home');
			$this->load->view('view-footer');

		} 

		else {

			redirect('login', 'refresh');

		}
	
	}

}
