<?php
	$mode = $this->uri->segment(3);

	if($mode == "updatepengukurancapaian" || $mode =="setupdatepengukurancapaian"){
		$act = "setupdatepengukurancapaian";
		$id = $data['id'];
		$kual = $data['kual_pc'];
		$waktu = $data['waktu_pc'];
		$biaya = $data['biaya_pc'];
	}else{
		$act = "setinsertkontrakkerja";
		$id = "";
		$kual ="";
		$waktu = "";
		$biaya = "";
	}
?>
<section class="container">
<div class="navbar navbar-inverse">
	<div class="container ">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Pengukuran Nilai</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
<form action="<?php echo base_URL(); ?>index.php/dashboard/pengukurancapaian/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="row-fluid well" style="overflow: hidden">
		<div class="col-lg-8">
			<table  class="table-form">
			<tr><td>Kualitas / Mutu</td><td><b><input type="text" name="kual_pc" autofocus tabindex="1" required value="<?php echo $kual; ?>" class="form-control"></b></td></tr>
			<tr><td>Waktu</td><td><b><input type="text" name="waktu_pc" tabindex="2" required value="<?php echo $waktu; ?>" id="dari" class="form-control"></b></td></tr>		
			<tr><td>Biaya</td><td><b><input type="text" name="biaya_pc" tabindex="3" required value="<?php echo $biaya; ?>" style="width: 400px" class="form-control"></td></tr>	
			<tr><td colspan="2">
			<br><button type="submit" class="btn btn-primary"tabindex="4" ><i class="icon icon-ok icon-white"></i> Simpan</button>
			<a href="<?php echo base_URL(); ?>index.php/dashboard/pengukurancapaian" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
			</td></tr>
			</table>
		</div>
	</div>
</form>
</div>
