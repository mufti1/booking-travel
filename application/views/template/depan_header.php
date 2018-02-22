<!DOCTYPE html>
<!--[if IE 7 ]>    <html class="ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 	 ]>    <html class="ie" lang="en"> <![endif]-->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="HandheldFriendly" content="True">
	<title><?php echo $judul; ?></title>
	<link rel="stylesheet" href="<?php echo base_url('/assets/depan/'); ?>css/style.css" type="text/css" media="screen,projection,print" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/depan/'); ?>css/theme-pink.css">
	<link rel="stylesheet" href="<?php echo base_url('/assets/'); ?>css/style.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url('/assets/depan/'); ?>css/prettyPhoto.css" type="text/css" media="screen" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('/assets/adminlte/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="shortcut icon" href="<?php echo base_url('/assets/depan/'); ?>images/favicon.ico" />
	<script type="text/javascript" src="<?php echo base_url('/assets/depan/'); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/depan/'); ?>js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/depan/'); ?>js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/depan/'); ?>js/sequence.jquery-min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/depan/'); ?>js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/depan/'); ?>js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/depan/'); ?>js/sequence.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/depan/'); ?>js/scripts.js"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/depan/'); ?>js/selectnav.js"></script>
	<script type="text/javascript">	
		$(document).ready(function(){
			$(".form").hide();
			$(".form:first").show();
			$(".f-item:first").addClass("active");
			$(".f-item:first span").addClass("checked");
		});
	</script>
</head>
<body>
	<!--header-->
	<header>
		<div class="wrap clearfix">
			<!--logo-->
			<h1 class="logo"><a href="<?php echo base_url(); ?>" title="TravelSist - beranda"><img src="<?php echo base_url('/assets/depan/'); ?>images/txt/logo.png" alt="Book Your Travel" /></a></h1>
			<!--//logo-->

			<!--ribbon-->
			<div class="ribbon">
				<nav>
					<ul class="profile-nav">
						<li class="active"><a href="#" title="My Account">My Account</a></li>
						<?php if (!$this->session->userdata('username')) { ?>
						<li><a href="<?php echo base_url('/Login') ?>" title="Login">Login</a></li>
						<?php }else{ ?>
						<li><a href="<?php echo base_url('/Login/logout') ?>" title="Login">Logout</a></li>
						<li><a href="<?php echo base_url('/Home/setting/'.$ids = $this->session->userdata('id_user')) ?>" title="Login">Setting</a></li>
						<?php } ?>
					</ul>
				</nav>
			</div>
			<!--//ribbon-->

			<!--search-->
			<div class="search">
				<form id="search-form" method="get" action="search-form">
					<input type="search" placeholder="Search entire site here" name="site_search" id="site_search" /> 
					<input type="submit" id="submit-site-search" value="submit-site-search" name="submit-site-search"/>
				</form>
			</div>
			<!--//search-->

			<!--contact-->
			<div class="contact">
				<span>24/7 Support number</span>
				<span class="number">1- 555 - 555 - 555</span>
			</div>
			<!--//contact-->
		</div>

		<!--main navigation-->
		<nav class="main-nav" role="navigation" id="nav">
			<ul class="wrap">
				<li class="active"><a href="flights.html" title="Flights">Flights</a></li>
			</ul>
		</nav>
		<!--//main navigation-->
	</header>
	<!--//header-->
