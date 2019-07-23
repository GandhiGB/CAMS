					<!--Modal adding asset-->
					<div class="modal" id="modal-add-asset"  tabindex="-1" role="dialog" aria-hidden="true">
					    <div class="modal-dialog">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					          <h4 class="modal-title" id="upload-avatar-title">Add asset</h4>
					        </div>
					        <div class="modal-body">
					        	<div>
					        		<label>PO No.</label>  
			                        <input type="text" name="po_number" id="po_number" class="form-control" />  
			                        <br />  

			                        <label>Serial No.</label>  
			                        <input type="text" name="serial_number" id="serial_number" class="form-control" />  
			                        <br /> 

			                        <label>Device type</label>  
			                        <select class="form-control" id="device_type">
			                        	<option value="" disabled selected hidden>Select</option>
			                        	<option value="access point">Access point</option>
			                        	<option value="avr">AVR</option>
			                        	<option value="casing">Casing</option>
			                        	<option value="speaker">Computer speaker</option>
			                        	<option value="external drive">External drive</option>
			                        	<option value="hdd">HDD</option>
			                        	<option value="cable">HDMI cable</option>
			                        	<option value="keyboard">Keyboard</option>
			                        	<option value="lancard">Lan card</option>
			                        	<option value="laptop">Laptop</option>
			                        	<option value="motherboard">Mother board</option>
			                        	<option value="mouse">Mouse</option>
			                        	<option value="monitor">Monitor</option>
			                        	<option value="optical drive">Optical drive</option>
			                        	<option value="power suppy">Power suppy</option>   
			                        	<option value="printer">Printer</option>
			                        	<option value="processor">Processor</option>
			                        	<option value="ram">RAM</option>
			                        	<option value="router">Router</option>
			                        	<option value="switch">Switch</option>
			                        	<option value="ups">UPS</option>
			                        	<option value="usb">USB</option>
			                        	<option value="cable">VGA cable</option>
			                        	<option value="video card">Video card</option>
			                        </select>  
			                        <br />  

			                        

			                        <label>Brand</label>  
			                        <input type="text" name="brand" id="brand" class="form-control" />  
			                        <br />  

			                        <label>Model</label>  
			                        <input type="text" name="model" id="model" class="form-control" />  
			                        <br /> 

			                        <label>Description</label>  
			                        <input type="text" name="description" id="description" class="form-control" />  
			                        <br />

			                        <label>Date aquired</label>  
			                        <input type="date" name="date_acquired" id="date_acquired" class="form-control" />  
			                        <br />

			                        <label>Cost</label>  
			                        <input type="text" name="cost" id="cost" class="form-control" />  
			                        <br />
 
			                        <input class="btn btn-success" type="submit" id="add-asset" name="submit" value="Save" />  
					        	</div>
					          
					        </div>
					      </div><!-- /.modal-content -->
					    </div><!-- /.modal-dialog -->
					</div>

					<!--Modal edit asset-->
					<div class="modal" id="modal-edit-asset"  tabindex="-1" role="dialog" aria-hidden="true">
					    <div class="modal-dialog">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					          <h4 class="modal-title" id="upload-avatar-title">Edit asset</h4>
					        </div>
					        <div class="modal-body">
					        	<div>

					        		<label>Device ID.</label>  
			                        <input type="text" name="device_id" id="e_device_id" class="form-control" disabled="true" />  
			                        <br />  

					        		<label>PO No.</label>  
			                        <input type="text" name="po_number" id="e_po_number" class="form-control" />  
			                        <br />  

			                        <label>Device type</label>  
			                        <select class="form-control" id="e_device_type">
			                        	<option value="" disabled selected hidden>Select</option>
			                        	<option id="accesspoint" value="access point">Access point</option>
			                        	<option id="avr" value="avr">AVR</option>
			                        	<option id="casing" value="casing">Casing</option>
			                        	<option id="externaldrive" value="external drive">External drive</option>
			                        	<option id="hdd" value="hdd">HDD</option>
			                        	<option id="cable" value="cable">HDMI cable</option>
			                        	<option id="keyboard" value="keyboard">Keyboard</option>
			                        	<option id="lancard" value="lancard">Lan card</option>
			                        	<option id="laptop" value="laptop">Laptop</option>
			                        	<option id="motherboard" value="motherboard">Mother board</option>
			                        	<option id="mouse" value="mouse">Mouse</option>
			                        	<option id="monitor" value="monitor">Monitor</option>
			                        	<option id="opticaldrive" value="optical drive">Optical drive</option>
			                        	<option id="powersupply" value="power suppy">Power suppy</option>   
			                        	<option id="printer" value="printer">Printer</option>
			                        	<option id="processor" value="processor">Processor</option>
			                        	<option id="ram" value="ram">RAM</option>
			                        	<option id="router" value="router">Router</option>
			                        	<option id="speaker" value="speaker">Speaker</option>
			                        	<option id="switch" value="switch">Switch</option>
			                        	<option id="ups" value="ups">UPS</option>
			                        	<option id="usb" value="usb">USB</option>
			                        	<option id="cable" value="cable">VGA cable</option>
			                        	<option id="videocard" value="video card">Video card</option>
			                        </select>  
			                        <br />  

			                        <label>Serial No.</label>  
			                        <input type="text" name="serial_number" id="e_serial_number" class="form-control" />  
			                        <br /> 

			                        <label>Brand</label>  
			                        <input type="text" name="brand" id="e_brand" class="form-control" />  
			                        <br />  

			                        <label>Model</label>  
			                        <input type="text" name="model" id="e_model" class="form-control" />  
			                        <br /> 

			                        <label>Description</label>  
			                        <input type="text" name="description" id="e_description" class="form-control" />  
			                        <br />

			                        <label>Date aquired</label>  
			                        <input type="date" name="date_acquired" id="e_date_acquired" class="form-control" />  
			                        <br />

			                        <label>Cost</label>  
			                        <input type="text" name="cost" id="e_cost" class="form-control" />  
			                        <br />

 									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			                        <input class="btn btn-success" type="submit" name="submit" id="edit-asset" value="Save changes" />  
					        	</div>
					          
					        </div>
					      </div><!-- /.modal-content -->
					    </div><!-- /.modal-dialog -->
					</div>



					 
					<!--Modal adding office-->
					<div class="modal" id="modal-add-office"  tabindex="-1" role="dialog" aria-hidden="true">
					    <div class="modal-dialog">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					          <h4 class="modal-title" id="upload-avatar-title">Add office</h4>
					        </div>
					        <div class="modal-body">
					        	<div>
					        		<label>Office Name</label>  
			                        <input type="text" name="name" id="name" class="form-control" />  
			                        <br />  

			                        <label>Description</label>  
			                        <input type="text" name="description" id="description" class="form-control" />  
			                        <br />  

			                        <label>Department</label>  
			                        <select class="form-control" id="department">
			                        	<option value="" disabled selected hidden>Select</option>
			                        	<option value="academic">Academic</option>
			                        	<option value="administration">Administration</option>
			                        </select>  
			                        <br />  
 
			                        <input class="btn btn-success" type="submit" name="submit" id="add-office" value="Submit" />  
					        	</div>
					          
					        </div>
					      </div><!-- /.modal-content -->
					    </div><!-- /.modal-dialog -->
					</div>


					<!--Modal adding computer-->
					<div class="modal" id="modal-add-computer"  tabindex="-1" role="dialog" aria-hidden="true">
					    <div class="modal-dialog">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					          <h4 class="modal-title" id="upload-avatar-title">Add computer</h4>
					        </div>
					        <div class="modal-body">
					        	<div>
					        		<label>Computer Name</label>  
			                        <input type="text" name="name" id="computer-name" class="form-control" />  
			                        <br />   
 
			                        <button class="btn btn-success" id="add-computer">Save</button>  
					        	</div>
					          
					        </div>
					      </div><!-- /.modal-content -->
					    </div><!-- /.modal-dialog -->
					</div>

					
					
					

				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Copyright &copy; 2018 - Computer Asset Management System</span>
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>

				

		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo site_url();?>resources/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script src="resources/js/jquery-1.11.3.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo site_url();?>resources/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo site_url();?>resources/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="resources/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo site_url();?>resources/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo site_url();?>resources/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo site_url();?>resources/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo site_url();?>resources/js/jquery.sparkline.index.min.js"></script>
		<script src="<?php echo site_url();?>resources/js/jquery.flot.min.js"></script>
		<script src="<?php echo site_url();?>resources/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo site_url();?>resources/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo site_url();?>resources/js/ace-elements.min.js"></script>
		<script src="<?php echo site_url();?>resources/js/ace.min.js"></script>

		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


		<script type="text/javascript">

			$("input#add-asset").click(function() {

			    $.ajax({
			        type: "POST",
			        data: {	po_number:$('#po_number').val(),
			        		serial_number:$('#serial_number').val(),
			        		category:$('#device_type').val(),
			        		brand:$('#brand').val(),
			        		model:$('#model').val(),
			        		description:$('#description').val(),
			        		date_acquired:$('#date_acquired').val(),
			        		cost:$('#cost').val()
			        	   },
			        url: "<?php echo base_url(); ?>" + "assets/add",
			        success: function(data) {

			        	$("#add-asset").val('Saving...');
			        	var delay = 2000;
						setTimeout(function() {
						 	location.reload();
						}, delay);
			        }
			    });
			});

			$('#search_text').keypress(function(event) {
	
				var keycode = (event.keyCode ? event.keyCode : event.which);
				
				if(keycode == '13'){
					var query = $(this).val();
  					load_data(query);
				}

			});

			$("input#edit-asset").click(function() {

			    $.ajax({
			        type: "POST",
			        data: {	
			        		id:$('#e_device_id').val(),
			        		po_number:$('#e_po_number').val(),
			        		serial_number:$('#e_serial_number').val(),
			        		category:$('#e_device_type').val(),
			        		brand:$('#e_brand').val(),
			        		model:$('#e_model').val(),
			        		description:$('#e_description').val(),
			        		date_acquired:$('#e_date_acquired').val(),
			        		cost:$('#e_cost').val()
			        	   },
			        url: "<?php echo base_url(); ?>" + "assets/update",
			        success: function(data) {

			        	$("input#edit-asset").val('Saving...');
			        	var delay = 2000;
						setTimeout(function() {
						 	location.reload();
						}, delay);
			        }
			    });

			});


			function load_data(query = '') {
				
				$.ajax({
			        type: "POST",
			        data:{query:query},
			        url: "<?php echo base_url(); ?>" + "assets/search",
			        success: function(data) {
			            $("#result").html(data);
			        }
			    });
			}


			$('#modal-edit-asset').on('show.bs.modal', function (e) {
				// get information to update quickly to modal view as loading begins
				var opener=e.relatedTarget;//this holds the element who called the modal
				   
				//we get details from attributes
				var deviceid=$(opener).attr('device-id');
				var ponumber=$(opener).attr('po-number');
				var devicetype=$(opener).attr('device-type');
				var serialnumber=$(opener).attr('serial-number');
				var brand=$(opener).attr('brand');
				var model=$(opener).attr('model');
				var description=$(opener).attr('description');
				var dateacquired=$(opener).attr('date-acquired');
				var cost=$(opener).attr('cost');


				//set what we got to our form
				$('#e_device_id').val(deviceid);
				$('#e_po_number').val(ponumber);
				$('#e_device_type').val(devicetype);
				$('#e_serial_number').val(serialnumber);
				$('#e_brand').val(brand);
				$('#e_model').val(brand);
				$('#e_brand').val(brand);
				$('#e_description').val(description);
				$('#e_date_acquired').val(dateacquired);
				$('#e_cost').val(cost);

	// 			<option value="" disabled selected hidden>Select</option>
    //         	<option id="accesspoint" value="access point">Access point</option>
    //         	<option id="avr" value="avr">AVR</option>
    //         	<option id="casing" value="casing">Casing</option>
    //         	<option id="externaldrive" value="external drive">External drive</option>
    //         	<option id="hdd" value="hdd">HDD</option>
    //         	<option id="cable" value="cable">HDMI cable</option>
    //         	<option id="keyboard" value="keyboard">Keyboard</option>
    //         	<option id="lancard" value="lancard">Lan card</option>
    //         	<option id="laptop" value="laptop">Laptop</option>
    //         	<option id="motherboard" value="motherboard">Mother board</option>
    //         	<option id="mouse" value="mouse">Mouse</option>
    //         	<option id="monitor" value="monitor">Monitor</option>
    //         	<option id="opticaldrive" value="optical drive">Optical drive</option>
    //         	<option id="powersupply" value="power suppy">Power suppy</option>   
    //         	<option id="printer" value="printer">Printer</option>
    //         	<option id="processor" value="processor">Processor</option>
    //         	<option id="ram" value="ram">RAM</option>
    //         	<option id="router" value="router">Router</option>
    //         	<option id="speaker" value="speaker">Speaker</option>
    //         	<option id="switch" value="switch">Switch</option>
    //         	<option id="ups" value="ups">UPS</option>
    //         	<option id="usb" value="usb">USB</option>
    //         	<option id="cable" value="cable">VGA cable</option>
    //         	<option id="videocard" value="video card">Video card</option>

				if (devicetype == 'ACCESS POINT') {
					$('#accesspoint').prop("selected", "selected");
				}

				if (devicetype == 'AVR') {
					$('#avr').prop("selected", "selected");
				}

				if (devicetype == 'CASING') {
					$('#casing').prop("selected", "selected");
				}

				if (devicetype == 'HDD') {
					$('#hdd').prop("selected", "selected");
				}

				if (devicetype == 'EXTERNAL DRIVE') {
					$('#externaldrive').prop("selected", "selected");
				}

				if (devicetype == 'MONITOR') {
					$('#monitor').prop("selected", "selected");
				}


			});

		</script>
		
	</body>
</html>


