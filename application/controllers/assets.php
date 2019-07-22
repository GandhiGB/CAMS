<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assets extends CI_Controller{

	public function index(){

		if (isset($this->session->userdata['cams'])) {

			$this->load->model('asset_model');
			
			$data['assets'] = $this->asset_model->get();

			$this->load->view('view-header');
			$this->load->view('view-assets',$data);	
			$this->load->view('view-footer');

		} 

		else {

			redirect('login', 'refresh');

		}


	}

	public function add(){

		$this->load->model('asset_model');

		$data = array(
			
                'po_number'  => strtoupper($this->input->post('po_number')),
                'serial_number'  => strtoupper($this->input->post('serial_number')),
                'category'  => strtoupper($this->input->post('category')),
                'brand'  => strtoupper($this->input->post('brand')),
                'model'  => strtoupper($this->input->post('model')),
                'description'  => strtoupper($this->input->post('description')),
                'date_acquired'  => strtoupper($this->input->post('date_acquired')),
                'cost'  => strtoupper($this->input->post('cost')),
            );

		$result = $this->asset_model->add($data);

		echo $result;
	}


	function search(){

	  	$output = '';
	 	$query = '';
  
  		$this->load->model('asset_model');

  		if($this->input->post('query')){

    	$query = $this->input->post('query');

    	$data = $this->asset_model->fetch_data($query);

	    	if($data->num_rows() > 0) {
	      		foreach($data->result() as $key => $row) {
	        		$output .= '
					<tr>
						<td style ="vertical-align:middle;text-align:center;">'.($key+1).'</td>
						<td style ="vertical-align:middle;text-align:center;">'.strtoupper($row->id).'</td>
						<td style ="vertical-align:middle;text-align:center;">'.strtoupper($row->po_number).'</td>
						<td style ="vertical-align:middle;text-align:center;">'.strtoupper($row->serial_number).'</td>
						<td style ="vertical-align:middle;">'.strtoupper($row->category).'</td>
						<td style ="vertical-align:middle;">'.strtoupper($row->brand).'</td>
						<td style ="vertical-align:middle;">'.strtoupper($row->model).'</td>
						<td style ="vertical-align:middle;">'.strtoupper($row->description).'</td>
						<td style ="vertical-align:middle;">'.strtoupper($row->date_acquired).'</td>
						<td style ="vertical-align:middle;">'.strtoupper($row->cost).'</td>
						<td style ="width:auto;vertical-align:middle;text-align:center;">
																	
																	<button class="btn-info" id="edit-asset" 
																	device-id="'.strtoupper($row->id).'" 
																	po-number="'.strtoupper($row->po_number).'" 
																	device-type="'.$row->category.'" 
																	serial-number="'.$row->serial_number.'" 
																	brand="'.$row->brand.'"
																	model="'.$row->model.'" 
																	description="'.$row->description.'"
																	date-acquired="'.$row->date_acquired.'" 
																	cost="'.$row->cost.'"   

																	data-toggle="modal" data-target="#modal-edit-asset" data-toggle="tooltip" title="Update this asset" id='.$row->id.'><i class="ace-icon fa fa-edit"></i></button>


																</td>
                  	</tr>';
	      		}
	    	}

	    	else {
	    		$output .= '<tr>
	              <td class="center" colspan="11">No Data Found</td>
	              </tr>';
	    	}
  		}

  		else {

   	 		$output .= '<tr>
              <td class="center" colspan="11">No Data Found</td>
              </tr>';
  		}

  		echo $output;
	}


	function update(){

		$this->load->model('asset_model');
		

		$data = array(
				'id'  => strtoupper($this->input->post('id')),
                'po_number'  => strtoupper($this->input->post('po_number')),
                'serial_number'  => strtoupper($this->input->post('serial_number')),
                'category'  => strtoupper($this->input->post('category')),
                'brand'  => strtoupper($this->input->post('brand')),
                'model'  => strtoupper($this->input->post('model')),
                'description'  => strtoupper($this->input->post('description')),
                'date_acquired'  => strtoupper($this->input->post('date_acquired')),
                'cost'  => strtoupper($this->input->post('cost')),
            );

		$result = $this->asset_model->update($data);

		echo $result;

	}


}