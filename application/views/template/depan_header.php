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