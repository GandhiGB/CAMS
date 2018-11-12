

			

					<div class="page-content">		

						<div class="row">
							<div class="col-xs-12 ">
								<!-- PAGE CONTENT BEGINS -->

								<?php 

									if (!empty($offices)) {
									
										foreach ($offices as $key => $value) {
											
											echo '<div class="col-lg-3 col-md-3 col-sm-3">
													<div class="panel panel-default">
														<div class="panel-heading">
															<strong>' .ucfirst($value->department). '</strong>
														</div>
										
														<ul class="list-group">
															<li class="list-group-item clearfix">
																<p>
																	
																	<a href="#">'.strtoupper($value->name) .'</a>

																</p>

																<div>
																	<div class="col-lg-6 btn-group">
																	<a href="'.site_url().'students/view/'. $value->id .'" class="btn btn-success">View</a>
																</div>
															</li>
														</ul>
													</div>
												  </div>';

										}

									}

									else {
										echo '<div class="well well-default">
												<h4>Notice!</h4>
												<p>Please add offices first.</p>

											  </div>';
									}

								?>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				

			