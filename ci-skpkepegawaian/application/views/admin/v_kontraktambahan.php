<section class="content">
    <div class="row">
        <div class="col-xs-12">
	
			<div class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Data Kontrak Kerja Tambahan Pegawai</a>
					</div>
				<div class="navbar-collapse collapse navbar-inverse-collapse" >
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_URL(); ?>index.php/dashboard/kontrakkerjatambahan/insertpengukurancapaianplus" ><span class="glyphicon glyphicon-plus"> </span> Tambah</a></li>
					</ul>
			 <form action="<?php echo base_URL(); ?>dashboard/kontrakkerjatambahan/tahun" method="post" accept-charset="utf-8" >
				<ul class="nav navbar-nav" style="margin-top:7px; margin-left:470px;">
				<?php $tahunsekarang = date('Y'); ?>
				<select name="tahun" class="form-control" style="border-radius:2px;">
	           	<option>== Tahun ==</option>
	           	<?php foreach($kktahun as $in){?>
	          	<option>
           			<?php echo $in['tahun']?>
           		</option>
	          	<?php }?>
	          	</select>
	          	<a href="<?php echo base_URL(); ?>index.php/dashboard/kontrakkerja/ ?>"></a>
	         </ul>
	         <ul class="nav navbar-nav" style="margin-top:7px; border-radius:0px;">
				<button type="submit" class="btn btn-primary" ><i class="icon icon-ok icon-white"></i> Pilih</button>
	         </ul>
	         </form>
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
				<th>Kegiatan Tugas Tambahan</th>
				<th>AK</th>
				<th>Kuant/Output</th>
				<th>Kual/Mutu</th>
				<th>Masa</th>
				<th>Biaya</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<?php 
			$no = ($this->uri->segment(4) + 1 );
			foreach ($nilaitambahan as $row) { ?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $row['kegiatan_tambahan'];?></td>
				<td><?php echo $row['ak'];?></td>
				<td><?php echo $row['kuan'];?> berkas</td>
				<td><?php echo $row['kual'];?></td>
				<td><?php echo $row['waktu'];?> bulan</td>
				<td><?php echo $row['biaya'];?></td>
				<td align="center">
				<a href="<?php echo base_url();?>dashboard/kontrakkerjatambahan/updatepengukurancapaianplus/<?php echo $row['id'];?>" 
				onclick="return confirm('Data kontrak kerja ini akan berubah')">
				<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
				<span class="glyphicon glyphicon-edit"></span></button></a>
				<a href="<?php echo base_url();?>dashboard/kontrakkerjatambahan/deletepengukurancapaianplus/<?php echo $row['id'];?>" 
				onclick="return confirm('Data kontrak kerja ini akan terhapus')">
				<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
				<span class="glyphicon glyphicon-trash"></span></button></a></td>
			</tr>
			<?php $no++; }	?>
			
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