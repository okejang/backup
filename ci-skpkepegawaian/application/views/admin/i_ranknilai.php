
<?php
	$mode = $this->uri->segment(3);

	if($mode == "updateranknilai" || $mode =="setupdateranknilai"){
		$act = "setupdateranknilai";
		$id = $data['id'];
		$rank_nilai = $data['rank_nilai'];
		$nilai_kata = $data['nilai_kata'];
	}else{
		$act = "setinsertranknilai";
		$id = "";
		$rank_nilai = "";
		$nilai_kata = "";
	}
?>
<div class="navbar navbar-inverse">
	<div class="container ">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Rank Nilai Kinerja Pegawai</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/dashboard/ranknilai/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td>Rank Nilai</td><td><b><input type="text" name="rank_nilai" tabindex="1" required value="<?php echo $rank_nilai; ?>" id="dari" class="form-control"></b></td></tr>
		<tr><td>Nilai Kata</td><td><b><input type="text" name="nilai_kata" tabindex="2" required value="<?php echo $nilai_kata; ?>" id="dari" class="form-control"></b></td></tr>			
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i> Simpan</button>
		<a href="<?php echo base_URL(); ?>index.php/dashboard/kriterianilai" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
</div>
</form>
