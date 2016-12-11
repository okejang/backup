<section class="content">
    <div class="row">
        <div class="col-xs-12">
	
			<div class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Data Pengukuran Capaian Pegawai</a>
					</div>
				<div class="navbar-collapse collapse navbar-inverse-collapse" >
					<ul class="nav navbar-nav">
						<li><a href="<?php echo base_URL(); ?>index.php/dashboard/pengukurancapaian/updatex" ><span class="glyphicon glyphicon-level-up"> </span> Nilai Capaian</a></li>
					</ul>
				<ul class="nav navbar-nav">
				<li><a href="#myModal" data-toggle="modal" target="_blank" >
					<span class="glyphicon glyphicon-print"> </span> Cetak Laporan</a></li>
			</ul>
		<div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-print"> </span> Cetak Pengukuran Capaian</h4>
                </div>
                <div class="modal-body">
                	<form action="<?php echo base_url();?>dashboard/cetak/printdatapengukurancapaian" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <select name="tahun" class="form-control" style="border-radius:2px;">
			           	<option value="<?php echo date('Y')?>">== Pilih Tahun ==</option>
			           	<?php foreach($kktahun as $in){?>
			          	<option>
		           			<?php echo $in['tahun']?>
		           		</option>
			          	<?php }?>
		          	</select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Cetak</button></a>
                </div>
            </form>
            </div>
        </div>
    </div>
				<form action="<?php echo base_URL(); ?>dashboard/pengukurancapaian/tahun" method="post" accept-charset="utf-8" >
				<ul class="nav navbar-nav" style="margin-top:7px; margin-left:340px;">
					<select name="tahun" class="form-control" style="border-radius:2px;">
		           	<option>== Tahun ==</option>
		           	<?php foreach($kktahun as $in){?>
		          	<option>
	           			<?php echo $in['tahun']?>
	           		</option>
		          	<?php }?>
		          	</select>
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
				<th>Kegiatan Tugas Jabatan</th>
				<th>AK</th>
				<th>Kuant/Output</th>
				<th>Kual/Mutu</th>
				<th>Masa</th>
				<th>Biaya</th>
				<th>Perhitungan</th>
				<th>Nilai Capaian</th>
				<th>Edit</th>
				<th>Update Nilai</th>
			</tr>
			</thead>
			<tbody>
			<?php 
			$no = ($this->uri->segment(4) + 1 );
			foreach ($kontrakkerja as $row) { ?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $row['kegiatan_tugas'];?></td>
				<td><?php echo $row['AK'];?></td>
				<td><?php echo $row['kuant_pc'];?> berkas</td>
				<td><?php echo $row['kual_pc'];?></td>
				<td><?php echo $row['waktu_pc'];?> bulan</td>
				<td><?php echo $row['biaya_pc'];?></td>
				<td><?php echo $row['perhit_pc'];?></td>
				<td><?php echo $row['nilai_pc'];?></td>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<td align="center">
					<a href="<?php echo base_url();?>dashboard/pengukurancapaian/updatepengukurancapaian/<?php echo $row['id'];?>" 
					onclick="return confirm('Data kontrak kerja ini akan berubah')">
					<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
					<span class="glyphicon glyphicon-edit"></span></button></a>
				</td>
				<td align="center">
					<form action="<?php echo base_URL(); ?>index.php/dashboard/pengukurancapaian/updates/<?php echo $row['id']; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
						<input name="keg1" type="hidden" value="<?php echo $row['kegiatan_tugas']; ?>">
							<button class="btn btn-warning" type="submit" name="cancel" style="padding:5px;">
							<span class="glyphicon glyphicon-retweet"></span>
					</form>
				</td>
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