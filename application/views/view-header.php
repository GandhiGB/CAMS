<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$session_data = $this->session->userdata('cams');
$name = ucfirst($session_data['firstname']) . " " . ucfirst($session_data['middlename'][0]) . ". " . ucfirst($session_data['lastname']);
$id = $session_data['id'];

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>cAMS</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- favicon -->
		<link rel="shortcut icon" href="<?php echo site_url();?>resources/images/global/favicon.png">

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo site_url();?>resources/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo site_url();?>resources/font-awesome/4.5.0/css/font-awesome.min.css" />


		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo site_url();?>resources/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo site_url();?>resources/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo site_url();?>resources/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo site_url();?>resources/css/ace-skins.min.css" />
		<link rel="stylesheet" href="<?php echo site_url();?>resources/css/ace-rtl.min.css" />



		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="resources/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="resources/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="resources/js/html5shiv.min.js"></script>
		<script src="resources/js/respond.min.js"></script>
		<![endif]-->

		<style type="text/css">
			
			.showcss{ display:block;}
 			.hidecss{ display:none;}

		</style>
	</head>

	<body class="skin-1">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="<?php echo base_url()?>" class="navbar-brand">
						<small>
							<i class="fa fa-building"></i>
							cAMS
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle">
								<!-- <img class="nav-user-photo" src="<?php echo site_url();?>resources/images/avatars/user.jpg" alt="Jason's Photo" /> -->
								<span class="user-info">
									<small><?php echo $name; ?></small>
									<small><?php echo $id; ?></small>
								</span>

							</a>

						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>


		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
					
						<button class="btn btn-success" >
							<i class="ace-icon fa fa-search"></i>
						</button>

						<button class="btn btn-info" data-toggle="modal" data-target="#modal-add-computer" title="Add computer">
							<i class="ace-icon fa fa-plus"></i>
						</button>

						<button class="btn btn-warning" data-toggle="modal" data-target="#modal-add-asset" title="Add asset">
							<i class="ace-icon fa fa-plus-square"></i>
						</button>

						<a class="ace-icon fa fa-power-off btn btn-danger" href="<?php echo site_url()?>logout" title="Logout bro!"></a>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">

					<li class="small">
						<a href="<?php echo base_url();?>assets">
							<i class="menu-icon fa fa-tablet"></i>
							<span class="menu-text"> Manage assets </span>
						</a>
					</li>

					<li class="small">
						<a href="<?php echo base_url();?>computer">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> Manage computers </span>
						</a>

					</li>


					<li class="small">
						<a href="<?php echo base_url();?>office">
							<i class="menu-icon fa fa-archive"></i>
							<span class="menu-text"> Manage offices </span>
						</a>
					</li>

				</ul>

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="fa fa-home"></i>
								<a href="#">Home</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					