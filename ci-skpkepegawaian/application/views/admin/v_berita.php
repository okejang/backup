<section class="content">
    <div class="row">
        <div class="col-xs-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Informasi Berita</a>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" >
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>index.php/dashboard/manajemenberita/insertberita" ><span class="glyphicon glyphicon-plus"> </span> Tambah Data</a></li>
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
						<th>Judul</th>
						<th>Berita</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1 );
					foreach ($berita as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<td align="center">
						<?php 
						if($row['foto'] == "notavailable.png"){ ?>
							<img src="<?php echo base_url();?>assets/dist/img/berita/<?php echo $row['foto']?>" width="80px">
						<?php }else{ ?>
						<img src="<?php echo base_url();?>assets/dist/img/berita/<?php echo $row['foto']?>" width="80px"></td>
						<?php } ?>
						<td><?php echo $row['judul'];?></td>
						<td><?php echo $row['berita'];?></td>
						<td align="center">
						<a href="<?php echo base_url();?>dashboard/manajemenberita/updateberita/<?php echo $row['id'];?>" 
						onclick="return confirm('Data ini Akan Berubah')">
						<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-edit"></span></button></a>
						<a href="<?php echo base_url();?>dashboard/manajemenberita/deleteberita/<?php echo $row['id'];?>" 
						onclick="return confirm('Data ini Akan Terhapus')">
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
