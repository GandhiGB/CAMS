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

		$date = date('mdYhis', time());

		$data = array(
				'id'  => $date,	
                'po_number'  => $this->input->post('po_number'),
                'serial_number'  => $this->input->post('serial_number'),
                'category'  => $this->input->post('category'),
                'brand'  => $this->input->post('brand'),
                'model'  => $this->input->post('model'),
                'description'  => $this->input->post('description'),
                'date_acquired'  => $this->input->post('date_acquired'),
                'cost'  => $this->input->post('cost'),
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
						<td style ="vertical-align:middle;text-align:center;">
							<button class="btn-success" data-toggle="modal" data-target="#modal-edit-assit" data-toggle="tooltip" title="Update this asset" id='.$row->id.'>
								<i class="ace-icon fa fa-edit"></i>
							</button>
						</td>
                  	</tr>';
	      		}
	    	}

	    	else {
	    		$output .= '<tr>
	              <td class="center" colspan="9">No Data Found</td>
	              </tr>';
	    	}
  		}

  		else {

   	 		$output .= '<tr>
              <td class="center" colspan="9">No Data Found</td>
              </tr>';
  		}

  		echo $output;
	}

}