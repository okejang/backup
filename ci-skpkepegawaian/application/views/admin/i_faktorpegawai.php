
<?php
	$mode = $this->uri->segment(3);

	if($mode == "updatefaktorpegawai" || $mode =="setupdatefaktorpegawai"){
		$act = "setupdatefaktorpegawai";
		$id = $data['id'];
		$faktor_nilai = $data['faktor_nilai'];
	}else{
		$act = "setinsertfaktorpegawai";
		$id = "";
		$faktor_nilai = "";
	}
?>
<div class="navbar navbar-inverse">
	<div class="container ">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Faktor Penilaian Perilaku Kerja</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/dashboard/faktorpegawai/<?php echo $act; ?>" method="post">
	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td>Faktor Nilai</td><td><b><input type="text" name="faktor_nilai" tabindex="1" required value="<?php echo $faktor_nilai; ?>" id="dari" class="form-control"></b></td></tr>		
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i> Simpan</button>
		<a href="<?php echo base_URL(); ?>index.php/dashboard/kriterianilai" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
</div>
</form>
