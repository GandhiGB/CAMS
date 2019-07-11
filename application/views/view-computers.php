
					<div class="page-content">		

						<div class="row">
							<div class="col-xs-12 ">
								<!-- PAGE CONTENT BEGINS -->


								<h4></h4>

								<div class="form-group">
								    <div class="input-group">
								    	<span class="input-group-addon">Search</span>
								    	<input type="text" name="search_text" id="search_text" placeholder="Search by Student Details" class="form-control" />
								    </div>
								  </div>

								<div class="table-responsive">
      								<table class="table table-bordered">
        								<thead>
											<tr>
												<th style="width:100px;">#</th>
												<th>Name</th>
												<th>Status</th>
												<th style="width:125px;">Action</th>
											</tr>
										</thead>
										<tbody id="result">
											
											<?php 

												foreach ($computers as $key => $value) {
													echo '<tr>';
														echo '<td>'.($key+1).'</td>';
														echo '<td>'.ucwords($value->name).'</td>';
														echo '<td>'.ucwords($value->status).'</td>';
														echo '<td>
																	<button class="view-req btn btn-success" .modal-sm" data-toggle="modal" data-target="#modal-view-req" data-toggle="tooltip" title="View requirements submitted" id='.$value->id.'><i class="ace-icon fa fa-eye"></i></button>
																	<button class="view-req btn btn-primary" .modal-sm" data-toggle="modal" data-target="#modal-student-update" data-toggle="tooltip" title="Update student" id='.$value->id.'><i class="ace-icon fa fa-edit"></i></button>

																</td>';
													echo '<tr>';																						
													}
												?>
										
											</tbody>
										</table>
									</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				

			