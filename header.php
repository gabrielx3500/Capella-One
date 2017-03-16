<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
  <meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<?php wp_head();?>
  </head>
<body>
<!--Header-->
<div class="header" id="home">
   <div class="container">
		<nav class="navbar navbar-default">
				<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
	    			</button>
				</div>
<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <?php 
                wp_nav_menu(array(
                  'theme_location' => 'header-menu',
                  'menu_class' => 'nav navbar-nav'
                  )
                );
              ?>
	  <div class="social-icons-nav">
          <ul class="social-share-nav">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul> 
</div>
	 
	<div class="clearfix"></div>
	</div><!-- /.navbar-collapse -->
	<!-- /.container-fluid -->
	</div>
	</nav>
	<div class="header-bottom">
		<div class="navbar-brand">
		<h1><a href="index.html">Capella Professional</a></h1>
	</div>
	</div>
	</div>
	</div>	
	<!--header-->

	<div class="container">

		
