	<div class="banner">
		<div class="container">
			<div class="banner-info">
				<?php foreach ($profil as $row) { ?>
				<h2><?php echo $row['nama']; ?></h2>
				<p><?php echo $row['keterangan']; ?></p>
				<a href="<?php echo base_url();?>home/kontak" class="btn btn-1 btn-1d">Selengkapnya</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="content">
	<div class="services-section">
		<div class="container">
			<h3></h3>
			<div class="services-section-grids">
				<div class="col-md-4 services-section-grid1">
					<div class="services-section-grid1-top" >
						<?php foreach ($website as $row) { ?>
						<h4><a href="<?php echo base_url();?>home/layanan/rafflesia-tekno-website" style="text-decoration:none; color:#ffffff;"><?php echo $row['nama'];?></a></h4>
						<p><?php echo $row['keterangan'];?></p>
						<?php } ?>
						<div class="icons">
							<div class="icon-left">
								<img src="<?php echo base_url();?>asset/home/images/<?php echo $row['icon']?>" width="80px">
							</div>
							<div class="icon-right">
								<a href="<?php echo base_url();?>home/layanan/rafflesia-tekno-website"><i class="arrow arrow4"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<div class="col-md-8 services-section-grid2">
					<a href="<?php echo base_url();?>home/layanan/rafflesia-tekno-website" style="text-decoration:none; color:#ffffff;">
					<img src="<?php echo base_url();?>asset/home/images/layananrft.jpg" class="img-responsive"></a>
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
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="subscribe-section">
		<div class="container">
			<div class="subscribe-section-grids">
				<div class="col-md-8 subscribe">
					<h3 style="font-size:20px;">Masukkan Email Anda Untuk Berlangganan</h3>
					<input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
					<a href="#">Kirim Email</a>
				</div>
				<div class="col-md-4 book">
					<img src="<?php echo base_url();?>asset/home/images/mail.png" alt="" >
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="our-clients">
		<div class="container">
			<div class="our-clients-head text-center">
				<h3>Rafflesia Tekno Team</h3>
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
								        autoPlay: false,
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
		<div class="testimonials-section">
			<div class="container">
				<div class="testimonials-section-head text-center">
					<h3>Testimoni</h3>
				</div>
				<div class="members">
					<div class="col-md-12 description">
						<div class="course_demo">
		          <ul id="flexiselDemo4">	
				  <?php foreach ($testimoni as $row) { ?>
					<li>
						<div class="client-text">
						<img src="<?php echo base_url();?>asset/home/images/testimoni/<?php echo $row['foto']?>" style="width:20%; height:20%; float:left; border-radius:5px;">
							<p><?php echo $row['testimoni'];?></p>
							<p style="color:black;"><?php echo "<b>".$row['nama']." , ".$row['pekerjaan']."</b>";?></p>
						</div>
					</li>	
					<?php } ?>
				</ul>

	  </div>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo4").flexisel({
					visibleItems: 1,
					animationSpeed: 3000,
					autoPlay: true,
					autoPlaySpeed: 10000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 1
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 1
			    		}
			    	}
			    });
			    
			});
		</script>
		<script src="<?php echo base_url();?>asset/home/js/jquery.flexisel.js"></script>	

				    </div>
					<div class="clearfix"></div>
					</div>
					
				</div>
			</div>
		</div>
		<div class="contact-section text-center">
			<div class="container">
				<h3>Hubungi Kami</h3>
				<div class="contact-top">
					<div class="col-md-4 contact-section-grid text-center">
						<i class="smartphone"></i>
						<p>Yura Pinata : 0897 2158 768</p>
						<p>M. Agum : 0896 7368 1838</p>
					</div>
					<div class="col-md-4 contact-section-grid text-center">
						<i class="user"></i>
						<p>Kota Bengkulu, Provinsi Bengkulu</p>
						<p>Negara Republik Indonesia</p>
					</div>
					<div class="col-md-4 contact-section-grid text-center">
						<i class="global"></i>
						<p>rafflesia.tekno@gmail.com</p>
						<p>operator.rafflesia.tekno@gmail.com</p>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
	</div>