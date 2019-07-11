<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Computer extends CI_Controller{

	public function index(){

		if (isset($this->session->userdata['cams'])) {

			$this->load->model('computer_model');
			
			$data['computers'] = $this->computer_model->get();

			$this->load->view('view-header',$data);
			$this->load->view('view-computers');	
			$this->load->view('view-footer');

		} 

		else {

			redirect('login', 'refresh');

		}


	}

	public function add(){

		$this->load->model('computer_model');

		$date = date('mdYhis', time());

		$data = array(
				'id'  => 'co'.$date, 
                'name'  => $this->input->post('name'), 
                'status'=> 1,
                
            );


		$this->computer_model->add($data);

		echo $result;
	}

}