<section class="content">
    <div class="row">
        <div class="col-xs-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Data Pegawai</a>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" >
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>index.php/dashboard/datapegawai/insertdatapegawai" ><span class="glyphicon glyphicon-plus"> </span> Tambah Data</a></li>
			</ul>
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>index.php/dashboard/cetak/printdatapegawai" target="_blank" ><span class="glyphicon glyphicon-print"> </span> Cetak Data</a></li>
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
						<th width="100px">Foto</th>
						<th>Nama</th>
						<th>NIP</th>
						<th>Jabatan</th>
						<th>Unit Kerja</th>
						<th>No HP</th>
						<th>Email</th>
						<th>Alamat</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1 );
					foreach ($pegawai as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<td align="center">
						<?php 
						if($row['foto'] == "notavailable.png"){ ?>
							<img src="<?php echo base_url();?>assets/dist/img/pegawai/<?php echo $row['foto']?>" width="80px">
						<?php }else{ ?>
						<img src="<?php echo base_url();?>assets/dist/img/pegawai/<?php echo $row['foto']?>" width="80px"></td>
						<?php } ?>
						<td><?php echo $row['nama'];?></td>
						<td><?php echo $row['nip'];?></td>
						<td><?php echo $row['jabatan'];?></td>
						<td><?php echo $row['unitkerja'];?></td>
						<td><?php echo $row['nohp'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['alamat'];?></td>
						<td align="center">
						<a href="<?php echo base_url();?>dashboard/datapegawai/updatedatapegawai/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Pendukung ini Akan Berubah')">
						<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span></button></a>
						<a href="<?php echo base_url();?>dashboard/datapegawai/deletedatapegawai/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Penduku ini Akan Terhapus')">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-trash"></span></button></a></td>
					</tr>
					<?php $no++; } ?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<script type="text/javascript" charset="utf-8"> //memanggil option Tabel pada asset 
 $(document).ready(function() {
    $('#myTable').dataTable();
} );
</script>
<!-- END -->

</div>
