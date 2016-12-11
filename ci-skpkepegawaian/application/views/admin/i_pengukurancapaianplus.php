<?php
	$mode = $this->uri->segment(3);

	if($mode == "updatepengukurancapaianplus" || $mode =="setupdatepengukurancapaianplus"){
		$act = "setupdatepengukurancapaianplus";
		$id = $data['id'];
		$kegiatan = $data['kegiatan_tambahan'];
		$AK = $data['AK'];
		$kuant_output = $data['kuan'];
		$kual_mutu = $data['kual'];
		$masa_waktu = $data['waktu'];
		$biaya = $data['biaya'];
		$tahun = $data['tahun'];
	}else{
		$act = "setinsertpengukurancapaianplus";
		$id = "";
		$kegiatan = "";
		$AK = "";
		$kuant_output ="";
		$kual_mutu ="";
		$masa_waktu = "";
		$biaya = "";
		$tahun = "";
	}
?>
<section class="content">
<div class="navbar navbar-inverse">
	<div class="container ">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Kontrak Kerja Tambahan</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
<form action="<?php echo base_URL(); ?>index.php/dashboard/kontrakkerjatambahan/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="tahun" value="<?php echo $tahun; ?>">
	<div class="row-fluid well" style="overflow: hidden">
		<div class="col-lg-6">
		<table  class="table-form">
		<tr><td>Kegiatan Tambahan</td><td><b><input type="text" name="kegiatan_tambahan" autofocus tabindex="1" required value="<?php echo $kegiatan; ?>" class="form-control"></b></td></tr>
		<tr><td>AK</td><td><b><input type="text" name="AK" tabindex="2" required value="<?php echo $AK; ?>" id="dari" class="form-control"></b></td></tr>		
		<tr><td style="padding-right:5px;">Kuant / Output</td><td><b><input type="text" name="kuan" tabindex="3" required value="<?php echo $kuant_output; ?>" style="width: 400px" class="form-control"></td></tr>	
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i> Simpan</button>
		<a href="<?php echo base_URL(); ?>index.php/dashboard/kontrakkerjatambahan" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td>Kual / Mutu</td><td><b><input type="text" name="kual" autofocus tabindex="4" required value="<?php echo $kual_mutu; ?>" class="form-control"></b></td></tr>
		<tr><td style="padding-right:5px;">Masa Waktu</td><td><b><input type="text" name="waktu" autofocus tabindex="5" required value="<?php echo $masa_waktu; ?>" class="form-control"></b></td></tr>
		<tr><td>Biaya</td><td><b><input type="text" name="biaya" tabindex="6" value="<?php echo $biaya; ?>" id="dari" class="form-control"></b></td></tr>		
		</table>
	</div>
	</div>
</form>
</div>
