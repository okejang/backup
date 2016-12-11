<section class="content">
    <div class="row">
        <div class="col-xs-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="">Data Kontrak Kerja Pegawai</a>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" >
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>dashboard/kontrakkerjaatas/<?php echo $this->uri->segment(3); ?>/updatex" ><span class="glyphicon glyphicon-plus"> </span> Setujui</a></li>
			</ul>
			<ul class="nav navbar-nav">
				<li><a href="#" data-toggle="modal" target="_blank" >
					<span class="glyphicon glyphicon-print"> </span> Status</a></li>
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
	<form action="<?php echo base_URL(); ?>index.php/dashboard/kontrakkerjaatas/<?php echo $this->uri->segment(3);?>/updatex" method="post" accept-charset="utf-8">
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
						<th>Konfirmasi</th>
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
						<td><input type="checkbox" name="cek[]" value="<?php echo $row['id'];?>"></td>
					</tr>
					<?php $no++; } ?>
					</tbody>
					</table>
					<button style="margin-left:20px;" type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i> Setujui</button>
					</form>
				</div>
			</div>
			<p>Kolom Komentar : </p>
			<form action="<?php echo base_URL(); ?>index.php/dashboard/komentar/input_komentar" method="POST">
				<input style="margin-bottom:2px;" type="text" class="form-control" name="dari" placeholder="Dari">
				<input style="margin-bottom:2px;" type="text" class="form-control" name="ke" placeholder="Ke">
				<input style="margin-bottom:2px;" type="text" class="form-control" name="perihal" placeholder="Perihal">
				<textarea style="margin-bottom:2px;" class="form-control" style="width:100%;" rows="7" name="komentar"></textarea>
				<button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i> Kirim Komentar</button>
			</form>
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

<script type="text/javascript">
		$(document).ready(function() {
			$("input[name='checkAll']").click(function() {
				var checked = $(this).attr("checked");
				$("#myTable tr td input:checkbox").attr("checked", checked);
			});
		});
	</script>
</div>
