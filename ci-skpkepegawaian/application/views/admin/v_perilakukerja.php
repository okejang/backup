<div class="clearfix">
	<div class="row">
  		<div class="col-xs-12">
			<div class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand">Kriteria Penilaian Perilaku Kerja</a>
					</div>
					<div class="navbar-collapse collapse navbar-inverse-collapse" >
						<ul class="nav navbar-nav">
							<li><a href="<?php echo base_URL(); ?>index.php/dashboard/cetak/printkriteriapegawai" target="_blank" ><span class="glyphicon glyphicon-print"> </span> Cetak Data</a></li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div><!-- /.container -->
			</div><!-- /.navbar -->
		</div>
	</div>
</div>

<!-- START Fungsi Tabel Dengan Halaman dan Pencarian Atomatis serta Responsif -->
<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
	<div class="row">	
		<div class="col-xs-12">
			<div class="col-xs-5">
				<a href="<?php echo base_URL(); ?>index.php/dashboard/faktorpegawai/insertfaktorpegawai">
					<button type="button" class="btn btn-default btn-sm" type="button" style="padding:5px;">
					<span class="glyphicon glyphicon-file" ></span></button>
				</a>
				Faktor Penilaian Pegawai <span class="glyphicon glyphicon-briefcase"></span>
				<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
					<div class="table-responsive"> 
						<table id="myTable" class="table table-hover table-striped">
							<thead>
							<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
								<th>No</th>
								<th>Faktor Penilaian</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							$no = ($this->uri->segment(4) + 1 );
							foreach ($faktorpegawai as $row) { ?>
							<tr>
								<td><?php echo $no;?></td>
								<td><?php echo $row['faktor_nilai'];?></td>
								<td align="center">
								<a href="<?php echo base_url();?>dashboard/faktorpegawai/updatefaktorpegawai/<?php echo $row['id'];?>" 
								onclick="return confirm('Data Pendukung ini Akan Berubah')">
								<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
								<span class="glyphicon glyphicon-edit"></span></button></a>
								<a href="<?php echo base_url();?>dashboard/faktorpegawai/deletefaktorpegawai/<?php echo $row['id'];?>" 
								onclick="return confirm('Data Penduku ini Akan Terhapus')">
								<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
								<span class="glyphicon glyphicon-trash"></span></button></a></td>
							</tr>
							<?php $no++; } ?>
							</tbody>
						</table>
					</div>
				</div>
				<script type="text/javascript" charset="utf-8"> //memanggil option Tabel pada asset 
				 $(document).ready(function() {
				    $('#myTable').dataTable();
				} );
				</script>
				<!-- END -->
			</div>
			<div class="col-xs-7">
				<a href="<?php echo base_URL(); ?>index.php/dashboard/ranknilai/insertranknilai">
					<button type="button" class="btn btn-default btn-sm" type="button" style="padding:5px;">
					<span class="glyphicon glyphicon-file" ></span></button>
				</a>
				Rank Nilai Pegawai <span class="glyphicon glyphicon-briefcase"></span>
				
				<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
					<div class="table-responsive"> 
						<table id="myTable1" class="table table-hover table-striped">
							<thead>
							<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
								<th>No</th>
								<th>Rank Nilai</th>
								<th>Nilai Kata</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							$no = ($this->uri->segment(4) + 1 );
							foreach ($ranknilai as $row) { ?>
							<tr>
								<td><?php echo $no;?></td>
								<td><?php echo $row['rank_nilai'];?></td>
								<td><?php echo $row['nilai_kata'];?></td>
								<td align="center">
								<a href="<?php echo base_url();?>dashboard/ranknilai/updateranknilai/<?php echo $row['id'];?>" 
								onclick="return confirm('Data Pendukung ini Akan Berubah')">
								<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
								<span class="glyphicon glyphicon-retweet"></span></button></a>
								<a href="<?php echo base_url();?>dashboard/ranknilai/deleteranknilai/<?php echo $row['id'];?>" 
								onclick="return confirm('Data Penduku ini Akan Terhapus')">
								<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
								<span class="glyphicon glyphicon-trash"></span></button></a></td>
							</tr>
							<?php $no++; } ?>
							</tbody>
						</table>
					</div>
				</div>
				<script type="text/javascript" charset="utf-8"> //memanggil option Tabel pada asset 
				 $(document).ready(function() {
				    $('#myTable1').dataTable();
				} );
				</script>
				<!-- END -->
			</div>
		</div>
	</div>
</div>