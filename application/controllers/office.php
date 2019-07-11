<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Office extends CI_Controller{

	public function index(){

		if (isset($this->session->userdata['cams'])) {

			$this->load->model('office_model');
			
			$data['offices'] = $this->office_model->get();

			if (!empty($data['offices'])) {

				$this->load->model('device_assignment_model');
                
                $data["computer_count"] = [];

                foreach ($data  as $value) {

                    foreach ($value as $key => $x) {

                        $data["device_count"][$key] = $this->device_assignment_model->get_device_count($x->id);

                    }

                }

            }

			$this->load->view('view-header',$data);
			$this->load->view('view-home');	
			$this->load->view('view-footer');

		} 

		else {

			redirect('login', 'refresh');

		}

	}


	public function add(){

		$this->load->model('office_model');

		$data = array(
                'name'  => $this->input->post('name'), 
                'description'  => $this->input->post('description'), 
                'department' => $this->input->post('department'), 
            );


		$result = $this->office_model->add($data);

		echo $result;
	}

}