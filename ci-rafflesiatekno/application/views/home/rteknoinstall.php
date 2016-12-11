<div class="content text-center">
		<div>
			<div class="container">
				<div class="row">
					<?php foreach ($service as $row) { ?>
						<header>
							<h3 style="margin-top:20px; margin-bottom:10px; font-weight:bold;"><?php echo $row['nama']?></h3>
						</header>
					</div>
					
					<div class="col-md-12">
						<div>
							<p><center><img src="<?php echo base_url();?>asset/home/images/<?php echo $row['foto']?>"
							class="img-responsive" style="border-radius:3px; border:3px solid #000000;"></p>
						</div>
					</div>
					<?php } ?>
			</div>
				<div class="why_choose_us" style="margin-top:5px">
			<div class="container">
				<div class="row">
						<header>
							<h3>Apa Saja Pelayanan Install Ulang Ini ..?</h3>
						</header>
					</div>
					<div class="col-md-4 grid_4">
						<div>
							<span>01</span>
							<p>Harga Yang Terjangkau, harga jasa penginstallan ulang terjangkau. Untuk Mahasiswa diskon 20% dengan membawa KTM</p>
						</div>
					</div>
					<div class="col-md-4 grid_4">
						<div>
							<span>02</span>
							<p>Garansi, Kami memberikan garansi selama 14 hari untuk setiap install ulang</p>
		
						</div>
					</div>
					<div class="col-md-4 grid_4">
						<div>
							<span>03</span>
							<p>Full Aplikasi, Kami memberikan tambahan aplikasi yang lengkap untuk setiap instal ulang</p>
						</div>
				</div>
		</div>
		</div>
	</div>
</div>