<section class="content">
    <div class="row">
        <div class="col-xs-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Data Penilaian Pegawai</a>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" >
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>index.php/dashboard/penilaianpegawai/insertpenilaianpegawai" ><span class="glyphicon glyphicon-plus"> </span> Beri Penilaian </a></li>
			</ul>
		</div><!-- /.nav-collapse -->
		
		</div><!-- /.container -->
	</div><!-- /.navbar -->
  </div>
</div>

<!-- START Fungsi Tabel Dengan Halaman dan Pencarian Atomatis serta Responsif -->
<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
			<div class="table-responsive"> 
				<table id="myTable" class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<th>NIP</th>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Tahun</th>
						<th>SKP</th>
						<th>Pelayanan</th>
						<th>Integritas</th>
						<th>Komitmen</th>
						<th>Disiplin</th>
						<th>Kerjasama</th>
						<th>Kepemimpinan</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1 );
					foreach ($penilaianpegawai as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $row['nip'];?></td>
						<td><?php echo $row['nama'];?></td>
						<td><?php echo $row['jabatan'];?></td>
						<td><?php echo $row['tahun'];?></td>
						<td><?php echo $row['SKP'];?></td>
						<td><?php echo $row['orientasipelayanan'];?></td>
						<td><?php echo $row['integritas'];?></td>
						<td><?php echo $row['komitmen'];?></td>
						<td><?php echo $row['disiplin'];?></td>
						<td><?php echo $row['kerjasama'];?></td>
						<td><?php echo $row['kepemimpinan'];?></td>
						<td align="center">
						<a href="<?php echo base_url();?>dashboard/penilaianpegawai/updatepenilaianpegawai/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Penilaian Pegawai AKan Berubah')">
						<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-edit"></span></button></a>
						<a href="<?php echo base_url();?>dashboard/penilaianpegawai/deletepenilaianpegawai/<?php echo $row['id'];?>" 
						onclick="return confirm('Data penilaian pegawai ini akan terhapus')">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-trash"></span></button></a></td>
					</tr>
					<?php $no++; } ?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
<script type="text/javascript" charset="utf-8"> //memanggil option Tabel pada asset 
 $(document).ready(function() {
    $('#myTable').dataTable();
} );
</script>
<!-- END -->

</div>
