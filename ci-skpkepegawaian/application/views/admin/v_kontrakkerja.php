<script>
function sweet (){
swal("Maaf - Tidak Bisa Dilakukan", "Kontrak Kerja Belum Disetujui", "error");
}
</script><section class="content">
    <div class="row">
        <div class="col-xs-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Data Kontrak Kerja Pegawai</a>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" >
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>index.php/dashboard/kontrakkerja/insertkontrakkerja" ><span class="glyphicon glyphicon-plus"> </span> Tambah Data</a></li>
			</ul>
			<ul class="nav navbar-nav">
				<li><a href="#myModal" data-toggle="modal" target="_blank" >
					<span class="glyphicon glyphicon-print"> </span> Cetak Data</a></li>
			</ul>
		<div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-print"> </span> Cetak Kontrak Kerja</h4>
                </div>
                <div class="modal-body">
                	<form action="<?php echo base_url();?>dashboard/cetak/printdatakontrakkerja" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
			<form action="<?php echo base_URL(); ?>dashboard/kontrakkerja/tahun" method="post" accept-charset="utf-8" >
			<ul class="nav navbar-nav" style="margin-top:7px; margin-left:410px;">
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
						<th>Kegiatan Tugas Jabatan</th>
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
					foreach ($kontrakkerja as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $row['kegiatan_tugas'];?></td>
						<td><?php echo $row['AK'];?></td>
						<td><?php echo $row['kuant_output'];?></td>
						<td><?php echo $row['kual_mutu'];?></td>
						<td><?php echo $row['masa_waktu'];?> bulan</td>
						<td><?php echo $row['biaya'];?></td>
						<td align="center">
						<?php if($row['konf']==0){?>
						<a href="#">
						<button class="btn btn-success disabled" onclick="sweet()" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-edit"></span></button></a>
						<a href="#">
						<button class="btn btn-warning disabled" type="button" onclick="sweet()" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-trash"></span></button></a>
						<?php } else{?>
						<a href="<?php echo base_url();?>dashboard/kontrakkerja/updatekontrakkerja/<?php echo $row['id'];?>" 
						onclick="return confirm('Data kontrak kerja ini akan berubah')">
						<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-edit"></span></button></a>
						<a href="<?php echo base_url();?>dashboard/kontrakkerja/deletekontrakkerja/<?php echo $row['id'];?>" 
						onclick="return confirm('Data kontrak kerja ini akan terhapus')">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-trash"></span></button></a>
						<?php } ?>
					</td>
					</tr>
					<?php $no++; } ?>
					</tbody>
					</table>
				</div>
			</div>
			<div id="konf" style="margin-left:50%;">
				<a href="<?php echo base_url();?>dashboard/kontrakkerjaatas/<?php echo $row['nip']?>/update" 
				onclick="return confirm('Data Kontrak Kerja Dikirim Ke Atasan')">
				<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
				<span class="glyphicon glyphicon-send"></span></button></a>
			</div>
		</div>
<script type="text/javascript" charset="utf-8"> //memanggil option Tabel pada asset 
 $(document).ready(function() {
    $('#myTable').dataTable();
} );
</script>
<!-- END -->
<script>
    $(window).load(function(){
    $("#tahun").on("change", function(){
    var kegiatan_tugas = $("#tahun :selected").attr("data-kegiatan_tugas");
    var AK = $("#tahun :selected").attr("data-AK");
    var kuant_output = $("#tahun :selected").attr("data-kuant_output");
    var kual_mutu = $("#tahun :selected").attr("data-kual_mutu");
    var masa_waktu = $("#tahun :selected").attr("data-masa_waktu");
    var biaya = $("#tahun :selected").attr("data-biaya");
    $("#kegiatan_tugas").val(kegiatan_tugas);
    $("#AK").val(AK);
    $("#kuant_output").val(kuant_output);
    $("#kual_mutu").val(kual_mutu);
    $("#masa_waktu").val(masa_waktu);
    $("#biaya").val(biaya);
    });
    });
</script>

</div>
