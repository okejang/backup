	<div class="content">
	<div class="services-section">
		<div class="container">
			<h3>Pelayanan Kami</h3>
			<div class="services-section-grids">
				<div class="col-md-4 services-section-grid1">
					<div class="services-section-grid1-top" >
						<?php foreach ($course as $row) { ?>
						<h4><a href="<?php echo base_url();?>home/layanan/rafflesia-tekno-course" style="text-decoration:none; color:#ffffff;"><?php echo $row['nama'];?></a></h4>
						<p><?php echo $row['keterangan'];?></p>
						<?php } ?>
						<div class="icons">
							<div class="icon-left">
								<img src="<?php echo base_url();?>asset/home/images/<?php echo $row['icon']?>" width="80px">
							</div>
							<div class="icon-right">
								<a href="<?php echo base_url();?>home/layanan/rafflesia-tekno-course"><i class="arrow arrow4"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4 services-section-grid2">
					 <?php foreach ($website as $row) { ?>
						<h4><a href="<?php echo base_url();?>home/layanan/rafflesia-tekno-website" style="text-decoration:none; color:#ffffff;"><?php echo $row['nama'];?></a></h4>
						<p><?php echo $row['keterangan'];?></p>
						<?php } ?>
					<div class="icons">
							<div class="icon-left">
								<img src="<?php echo base_url();?>asset/home/images/<?php echo $row['icon']?>" width="140px">
							</div>
							<div class="icon-right">
								<a href="<?php echo base_url();?>home/layanan/rafflesia-tekno-website"><i class="arrow arrow3"></i></a>
								
							</div>
							<div class="clearfix"></div>
						</div>
				</div>
				<?php /*
				<div class="col-md-4 services-section-grid3" >
					<div class="services-section-grid3-top">
						<?php foreach ($store as $row) { ?>
						<h4><?php echo $row['nama'];?></h4>
						<p><?php echo $row['keterangan'];?></p>
						<?php } ?>
						<div class="icons">
							<div class="icon-left">
								<img src="<?php echo base_url();?>asset/home/images/<?php echo $row['icon']?>" width="100px">
							</div>
							<div class="icon-right">
								<a href="#"><i class="arrow arrow4"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="services-section-grid3-bottom">
						<?php foreach ($install as $row) { ?>
						<h4><?php echo $row['nama'];?></h4>
						<p><?php echo $row['keterangan'];?></p>
						<?php } ?>
						<div class="icons">
							<div class="icon-left">
								<img src="<?php echo base_url();?>asset/home/images/<?php echo $row['icon']?>" width="100px">
							</div>
							<div class="icon-right">
								<a href="<?php echo base_url();?>home/layanan/rafflesia-tekno-install"><i class="arrow arrow5"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					*/ ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="services_overview">
        <div class="container">
       		<h3>Layanan Overview</h3>
       		<div class="col-md-4 service_grid">
       			<img src="<?php echo base_url();?>asset/home/images/ruko.jpg" width="400px" class="img-responsive" alt=""/>
       			<h4>TOKO RAFFLESIA TEKNO</h4>
       			<p></p>
       		  
       		</div>
       		<div class="col-md-4 service_grid">
       			<img src="<?php echo base_url();?>asset/home/images/tim.jpg" class="img-responsive" alt=""/>
       			<h4>TIM RAFFLESIA TEKNO</h4>
       			<p></p>
       		</div>
       		<div class="col-md-4 service_grid span_55">
       			<img src="<?php echo base_url();?>asset/home/images/keg.jpg" class="img-responsive" alt=""/>
       			<h4>AKTIVITAS RAFFLESIA TEKNO</h4>
       			<p></p>
     
       		</div>
			<div class="clearfix"></div>
       	</div>
       </div> 	
	<div class="our-clients">
		<div class="container">
			<div class="our-clients-head text-center">
				<h3>Terima Kasih Kepada</h3>
			</div>
			<!---strat-image-cursuals---->
                  <div class="scroll-slider">											 
							<div class="nbs-flexisel-container">
							<div class="nbs-flexisel-inner">
							<ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">					    					    					       
							<?php foreach ($pendukung as $row) { ?>
								<li><img src="<?php echo base_url();?>asset/home/images/pendukung/<?php echo $row['foto']?>"></li>
							<?php } ?>
							</ul>
							<div class="nbs-flexisel-nav-left" style="display:none"></div>
							<div class="nbs-flexisel-nav-right" style="display:none"></div></div></div> 
							<div class="clear"> </div>      
						  <!---strat-image-cursuals---->
								<script type="text/javascript" src="<?php echo base_url();?>asset/home/js/jquery.flexisel.js"></script>
								<!---End-image-cursuals---->
								<script type="text/javascript">
								$(window).load(function() {
								    $(".flexiselDemo3").flexisel({
								        visibleItems: 4,
								        animationSpeed: 1000,
								        autoPlay: true,
								        autoPlaySpeed: 3000,            
								        pauseOnHover: true,
								        enableResponsiveBreakpoints: true,
								        responsiveBreakpoints: { 
								            portrait: { 
								                changePoint:480,
								                visibleItems: 1
								            }, 
								            landscape: { 
								                changePoint:640,
								                visibleItems: 2
								            },
								            tablet: { 
								                changePoint:768,
								                visibleItems: 3
								            }
								        }
								    });
								});
								</script>
						<!---->
				  <!---->
				  </div>				
			</div>

				<!---//End-signin---->
		</div>
		</div>