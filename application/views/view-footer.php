
			
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
			        		<input type="submit" name="submit" id="add-office" value="add">
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


		<script type="text/javascript">
		$("#add-office").click(function() {
		    $.ajax({
		        type: "POST",
		        url: "<?php echo base_url(); ?>" + "office/add",
		        before: function(data){
		        	alert("before");
		        },
		        success: function(data) {
		            alert("sucess");
		        }
		    });
		});
		</script>
		
	</body>
</html>


