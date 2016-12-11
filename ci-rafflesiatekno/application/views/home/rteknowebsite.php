<div class="content text-center">
		<div>
			<div class="container">
				<div class="row">
						<header>
							<h3 style="margin-top:20px; margin-bottom:10px; font-weight:bold;">RAFFLESIA TEKNO SOFTWARE</h3>
						</header>
					</div>
					<?php foreach ($mentor as $row) { ?>
					<div class="col-md-4">
						<div>
							<p><img src="<?php echo base_url();?>asset/home/images/template/<?php echo $row['foto']?>"
							class="img-responsive" width="350px" height="300px" style="border-radius:3px; border:3px solid #000000;"></p>
							<p style="color:#000000; font-weight:bold;"><?php echo $row['nama']?> (<?php echo $row['tipe']?>)</p>
							<p style="color:#000000; text-align:bold; text-align:center; padding-bottom:5px;"><?php echo "keterangan : ".$row['keterangan']?></p>
						</div>
					</div>
					<?php } ?>
			</div>
				<div class="why_choose_us" style="margin-top:5px">
			<div class="container">
				<div class="row">
						<header>
							<h3>Apa Saja Pelayanan Rafflesia Tekno Website ..?</h3>
						</header>
					</div>
					<div class="col-md-4 grid_4">
						<div>
							<span>01</span>
							<p>Buku panduan, akan diberikan buku panduan tata cara menggunakan dan menjalankan sistem atau website</p>
						</div>
					</div>
					<div class="col-md-4 grid_4">
						<div>
							<span>02</span>
							<p>CD Aplikasi, akan disediakan CD yang berisikan aplikasi website sesuai dengan sistem atau website yang di buat</p>
		
						</div>
					</div>
					<div class="col-md-4 grid_4">
						<div>
							<span>03</span>
							<p>Berkualitas dan Terjangkau, Biaya tergantung dengan permintaan pembuatan sistem, website dan content program</p>
						</div>
				</div>
		</div>
		</div>
	</div>
</div>