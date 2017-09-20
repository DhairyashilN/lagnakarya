<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<title>Royal Matrimony</title>
	<link href="<?php echo base_url();?>assets/css/bootstrap-3.1.1.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/waves.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/dir/css/flex_style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/stylesheet.css" rel="stylesheet">
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Yeseva+One');
	</style>
</head>
<body>
	<header id="wd_header" class="wd_wrapper">
		<nav class="navbar navbar-default navbar_default-custom navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_collapseId" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url();?>" style="font-family: 'Yeseva One', cursive;">Royal Matrimony</a>
				</div>
				<div class="collapse navbar-collapse" id="nav_collapseId">
					<ul class="nav navbar-nav navbar-nav-custom navbar-right">
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="<?php echo site_url('#');?>">About</a></li>
						<li><a href="<?php echo site_url('#');?>">Event</a></li>
				<!--<li class="dropdown">
				  <a href="#" role="button" aria-haspopup="true" aria-expanded="false">Matches <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					<li><a href="#">New Matches</a></li>
					<li><a href="#">Educational Matches</a></li>
					<li><a href="#">Professional Matches</a></li>
					<li role="separator" class="divider"></li>
					<li><a href="#">Premium Members</a></li>
					<li><a href="#">Special Maratha Matches</a></li>
				  </ul>
				</li>-->
				<!--<li class="dropdown">
				  <a href="#">Search<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="#">Regular Search</a></li>
                                         <li><a href="#">Advance Search</a></li>
                                          <li role="separator" class="divider"></li>
                                         <li><a href="#">City Search</a></li>
					<li><a href="#">Education Search</a></li>
					<li><a href="#">Search By Profile ID</a></li>

				  </ul>
				</li>-->
				<li class="dropdown">
					<a href="#">Membership<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">New</a></li>
						<li><a href="#">Regular</a></li>
						<li><a href="#">Semi</a></li>
						<li><a href="#">Super</a></li>
					</ul> 
				</li>
				<li><a href="<?php echo site_url('contact');?>">Contact</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
</header>