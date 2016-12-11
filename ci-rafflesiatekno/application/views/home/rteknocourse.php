<div class="content text-center">
		<div>
			<div class="container">
				<div class="row">
						<header style="margin-bottom:40px;">
							<h2 style="margin-top:20px; margin-bottom:25px; font-weight:bold;">RAFFLESIA YOUTH COURSE
                <a href="<?php echo base_url();?>courses/daftar" target="_blank"><button type="button" class="btn btn-danger"><i class="icon-search icon-white"> </i> Jadi Pengajar</button></a>
							</h2>
						</header>
					</div>
				<div class="row">
					<div class="col-md-12" style="margin:-15px 0px 10px 0px; float:right;">
						<img src="<?php echo base_url();?>asset/home/images/iklan/iklan1.gif" class="img-responsive">
					</div>
				</div>
					<?php foreach ($mentor as $row) { ?>
					<div class="col-md-4">
						<div>
							<?php $slug = url_title(strtolower($row['nama']), '-', TRUE); ?>
							<p><a href="<?php echo base_url();?>courses/profil/<?php echo $row['id']?>/<?php echo $slug?>">
							<img src="<?php echo base_url();?>asset/home/images/mentor/<?php echo $row['foto']?>"
							width="350px" height="300px" style="" class="img-responsive"></p>
							</a>
							<div class="table-responsive"> 
								<table class="table" style="text-align:left; background-color:rgba(0, 0, 255, 0.09);">
									<tbody>
									<tr><td>Nama</td><td>:</td><td><?php echo $row['nama'];?></td></tr>
									<tr><td>Bidang</td><td>:</td><td><?php echo $row['bidang']?></td></tr>
									<tr><td>Sasaran</td><td>:</td><td><?php echo $row['sasaran']?></td></tr>
									<tr><td>Kontak</td><td>:</td><td><?php echo $row['nohp']?></td></tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<?php } ?>
			</div>
			<div class="content-pagenation">
						<li><?php echo $halaman ?></li>
						<div class="clearfix"> </div>
					</div>
					<br/>
			<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin:auto;">
					<img src="<?php echo base_url();?>asset/home/images/iklan/rycourse.gif" class="img-responsive">
			</div>
		</div>
				</div>
				<div class="why_choose_us" style="margin-top:5px">
			<div class="container">
				<div class="row">
						<header>
							<h3>Pelayanan Rafflesia Youth Course</h3>
						</header>
					</div>
          <div>
               <form action="<?php echo base_URL()?>courses/index/cari" method="post">
                <input type="text" class="form-control" name="q" style="width:100%;" placeholder="Cari Berdasarkan Nama Mentor, Bidang Pengajaran Atau Sasaran Pengajaran" required>
                </form>
            </div>
					<div class="col-md-3 grid_4">
						<div>
							<span>01</span>
							<p>Mentor Kursus Merupakan Personal Yang Aktif, Berprestasi Dan Berpengalaman</p>
						</div>
					</div>
					<div class="col-md-3 grid_4">
						<div>
							<span>02</span>
							<p>Pertemuan Sebanyak 2 Kali Dalam 1 Minggu Dimana 1 Kali Pertemuan 1 Jam 30 Menit</p>
		
						</div>
					</div>
					<div class="col-md-3 grid_4">
						<div>
							<span>03</span>
							<p>Jadwal dan Biaya Kursus Private Di Komunikasikan Dengan Mentornya</p>
						</div>
				</div>
				<div class="col-md-3 grid_4">
						<div>
							<span>04</span>
							<p>Setelah Kursus Peserta Mendapatkan Sertifikat Pembelajaran</p>
						</div>
				</div>
		</div>

		</div>
	</div>
</div>