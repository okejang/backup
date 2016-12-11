<!DOCTYPE html>
<html>
<head>
<title>Rafflesia Youth Course</title>
<link href="<?php echo base_url();?>asset/home/css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="<?php echo base_url();?>asset/mentor/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,500,700,600,800,300,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="yura pinata" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="<?php echo base_url();?>asset/mentor/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>asset/mentor/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
 	<!---- start-smoth-scrolling---->

</head>
<body>
<!--body-->
<div id="about" class="about">
	 <div class="container">
		 <div class="about-head">
			 <h3>Ringkasan Biodata</h3>
		 </div> 
		 <div class="about-sec">
			 <div class="col-md-8 about-info">
				 <p class="about-sec-info">
				 <?php foreach ($mentor as $row) {?> <span><?php echo $row['nama']?></span> 
				  <?php echo $row['biodata'];}?></p>
				 <div class="about-grid">
					 <div class="about-icon">
						 <i class="icon1"></i>
					 </div>
					 <div class="about-icon-info">
						 <h4>Organisasi / Kegiatan</h4>
						 <p>
						<?php foreach ($organisasi as $row) { 
							 	echo "-"." ".$row['kegiatan']." "."(".$row['periode'].")"."<br>";
							 } ?>
						</p>
					 </div>
					 <div class="clearfix"></div>
				 </div>
				 <div class="about-grid">
					 <div class="about-icon">
						 <i class="icon2"></i>
					 </div>
					 <div class="about-icon-info">
						 <h4>Prestasi</h4>
						<p>
						<?php foreach ($prestasi as $row) { 
							 	echo "-"." ".$row['kegiatan']." "."(".$row['tahun'].")"."<br>";
							 } ?>
						</p>
					 </div>
					 <div class="clearfix"></div>
				 </div>
			 </div>
			 <div class="container">
			<div class="row">
				<div class="col-md-12" style="margin:auto;">
					<img src="<?php echo base_url();?>asset/home/images/iklan/rycourse.gif" class="img-responsive">
			</div>
		</div>
			 <div class="col-md-4 about-phones">
			 	<?php foreach ($galerix as $row) { ?>
				 <img src="<?php echo base_url();?>asset/home/images/mentor/galeri/<?php echo $row['foto']?>" class="img-responsive">
				 <?php } ?>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!------ Light Box ------>
    <link rel="stylesheet" href="<?php echo base_url();?>asset/mentor/swipebox.css">
    <script src="<?php echo base_url();?>asset/mentor/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
    <!------ Eng Light Box ------>	
<div id="gallery" class="gallery" style="padding-top:5px; padding-bottom:0px;">
			<div id="portfoliolist">		
					<?php foreach ($galeri as $row) { ?>
					<div class="portfolio app mix_all  wow bounceIn" data-wow-delay="0.2s" data-cat="app" style="display: inline-block; opacity: 1;">
						<div class="portfolio-wrapper grid_box">		
							 <a href="<?php echo base_url();?>asset/home/images/mentor/galeri/<?php echo $row['foto']?>" class="swipebox"  title="<?php echo $row['nama']?>"> 
				 			<img src="<?php echo base_url();?>asset/home/images/mentor/galeri/<?php echo $row['foto']?>" class="img-responsive">
				 <div class="caption">
							 <div class="caption-info">
								 <h4><?php echo $row['nama']?></h4>								
								 <p><?php echo $row['lokasi']?></p>
								 <p><?php echo $row['tingkatan']?></p>
								 </div>
								 </div></a>
		                </div>
					</div>						
					<?php } ?>
<div class="clearfix"></div>					
				</div>
				
	  <!-- Script for gallery Here -->
				<script type="text/javascript" src="<?php echo base_url();?>asset/mentor/jquery.mixitup.min.js"></script>
					<script type="text/javascript">
					$(function () {
						
						var filterList = {
						
							init: function () {
							
								// MixItUp plugin
								// http://mixitup.io
								$('#portfoliolist').mixitup({
									targetSelector: '.portfolio',
									filterSelector: '.filter',
									effects: ['fade'],
									easing: 'snap',
									// call the hover effect
									onMixEnd: filterList.hoverEffect()
								});				
							
							},
							
							hoverEffect: function () {
							
								// Simple parallax effect
								$('#portfoliolist .portfolio').hover(
									function () {
										$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
										$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
									},
									function () {
										$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
										$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
									}		
								);				
							
							}
				
						};
						
						// Run the show!
						filterList.init();
						
						
					});	
					</script>

</div>
<!---->
</body>
</html>