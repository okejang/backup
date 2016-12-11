<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png" href="<?php echo base_url();?>asset/home/images/logoweb1.jpg">
<title>Rafflesia Tekno</title>
<link href="<?php echo base_url();?>asset/home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>asset/home/js/jquery.min.js"></script>
<!-- Custom Theme files -->
 <link href="<?php echo base_url();?>asset/home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="UNITED COMMS Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>asset/home/images/logo11.png" class="img-responsive" alt="" /></a>
			</div>
			<div class="header-right">
				<h4 style="font-size:15px"><img src="<?php echo base_url();?>asset/home/images/phone.png" width="35px">0896 5774 3525 / 0896 7368 1838</h4>
				<span class="menu"></span>
				<div class="top-menu">
					<ul>                                              
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="<?php echo base_url();?>home/portofolio">Portofolio</a></li>
						<li><a href="<?php echo base_url();?>home/profil">Profil</a></li>
						<li><a href="<?php echo base_url();?>home/kontak">Kontak</a></li>
					</ul>
				</div>
				<!-- script for menu -->
				<script>
				$( "span.menu" ).click(function() {
				  $( ".top-menu" ).slideToggle( "slow", function() {
				    // Animation complete.
				  });
				});
			</script>
			<!-- script for menu -->

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- header-section-ends -->
	 <?php $this->load->view($page)?>
	<div class="map">
		<iframe src="https://www.google.com/maps/d/embed?mid=zneknLgpYtJY.kixZC2kr75z4" frameborder="0" style="border:0"></iframe>
		<div class="map-layer"></div>
	</div>
	<div class="footer text-center">
		<div class="social-icons">
			<a href="#"><i class="facebook"></i></a>
			<a href="#"><i class="twitter"></i></a>
			<a href="#"><i class="googlepluse"></i></a>
			<a href="#"><i class="youtube"></i></a>
			<a href="#"><i class="linkedin"></i></a>
		</div>
		<div class="copyright">
			<p>Copyright &copy; 2015 All rights reserved </p>
		</div>
	</div>
</body>
</html>