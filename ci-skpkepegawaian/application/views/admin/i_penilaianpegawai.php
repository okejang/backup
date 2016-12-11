<?php
	$mode = $this->uri->segment(3);

	if($mode == "updatepenilaianpegawai" || $mode =="setupdatepenilaianpegawai"){
		$act = "setupdatepenilaianpegawai";
		$id = $data['id'];
		$nip = $data['nip'];
		$nama = $data['nama'];
		$jabatan = $data['jabatan'];
		$tahun = $data['tahun'];
		$SKP = $data['SKP'];
		$orientasipelayanan = $data['orientasipelayanan'];
		$integritas = $data['integritas'];
		$komitmen = $data['komitmen'];
		$disiplin = $data['disiplin'];
		$kerjasama = $data['kerjasama'];
		$kepemimpinan = $data['kepemimpinan'];
	}else{
		$act = "setinsertpenilaianpegawai";
		$id = '';
		$nip = '';
		$nama = '';
		$jabatan = '';
		$tahun = '';
		$SKP = '';
		$orientasipelayanan = '';
		$integritas = '';
		$komitmen = '';
		$disiplin = '';
		$kerjasama = '';
		$kepemimpinan = '';
	}
?>
<script>
    $(window).load(function(){
    $("#nama").on("change", function(){
    var nip = $("#nama :selected").attr("data-nip");
    var jabatan = $("#nama :selected").attr("data-jabatan");
    $("#nip").val(nip);
    $("#jabatan").val(jabatan);
    });
    });
</script>
<section class="content">
<div class="navbar navbar-inverse">
	<div class="container ">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Penilaian Pegawai</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/dashboard/penilaianpegawai/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td style="padding-right:5px;">Nama</td><td><b>
			<select name="nama" class="form-control" id="nama">
           <option value="<?php echo $nama?>">== Pilih == (<?php echo $nama?>)</option>
           <?php foreach($pegawai as $in){?>
           <option 	
           data-nip="<?php echo $in['nip']?>"
           data-jabatan="<?php echo $in['jabatan']?>">
           <?php echo $in['nama']?>
           </option>
           <?php }?>
          </select></b>
      		<td><a href="<?php echo base_URL(); ?>index.php/dashboard/penilaianpegawai/ ?>"></a></td></tr>
		<tr><td>NIP</td><td><b><input type="text" name="nama" id="nip" tabindex="2" required value="<?php echo $nip; ?>" class="form-control"></b></td></tr>		
		<tr><td style="padding-right:5px;">Jabatan</td><td><b><input type="text" name="jabatan" id="jabatan" tabindex="3" required value="<?php echo $jabatan; ?>" style="width: 400px" class="form-control"></td></tr>	
		<tr><td>Tahun</td><td><b><input type="text" name="tahun" tabindex="4" required value="<?php echo date('Y') ?>" class="form-control"></b></td></tr>		
		<tr><td>Orientasi Pelayanan</td><td><b><input type="text" name="orientasipelayanan" tabindex="6" required value="<?php echo $orientasipelayanan; ?>" class="form-control"></b></td></tr>			
		</table>
	</div>
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td>Integritas</td><td><b><input type="text" name="integritas" autofocus tabindex="7" required value="<?php echo $integritas; ?>" class="form-control"></b></td></tr>
		<tr><td style="padding-right:5px;">Komitmen</td><td><b><input type="text" name="komitmen" autofocus tabindex="8" required value="<?php echo $komitmen; ?>" class="form-control"></b></td></tr>
		<tr><td>Disiplin</td><td><b><input type="text" name="disiplin" tabindex="9" value="<?php echo $disiplin; ?>" class="form-control"></b></td></tr>	
		<tr><td>Kerjasama</td><td><b><input type="text" name="kerjasama" tabindex="10" value="<?php echo $kerjasama; ?>" class="form-control"></b></td></tr>		
		<tr><td>Kepemimpinan</td><td><b><input type="text" name="kepemimpinan" tabindex="11" value="<?php echo $kepemimpinan; ?>" class="form-control"></b></td></tr>	
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="12" ><i class="icon icon-ok icon-white"></i> Simpan</button>
		<a href="<?php echo base_URL(); ?>index.php/dashboard/penilaianpegawai" class="btn btn-success" tabindex="13" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
</div>
</form>
</div>
