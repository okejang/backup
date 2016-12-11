<?php
$mode	= $this->uri->segment(3);

if ($mode == "updategaleri" || $mode == "setupdate") {
	$act		= "setupdate";
	$id			= $galeri['id'];
	$id_mentor	= $galeri['id_mentor'];
	$namax		= $galeri['nama'];
	$lokasi		= $galeri['lokasi'];
	$tingkatan	= $galeri['tingkatan'];
	$prioritas	= $galeri['prioritas'];
	$foto		= $galeri['foto'];
} else {
	$act		= "setinsertgaleri";
	$id			= "";
	$id_mentor	= "";
	$namax		= "";
	$lokasi		= "";
	$tingkatan	= "";
	$prioritas	= "";
	$foto		= "";
}
?>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-user"></i> Hello <?php echo $nama = $this->session->userdata('nama');?> (Pengajar Muda Rafflesia)
			</li>
		</ol>
	</div>
</div>
	<div class="row">
		<div class="col-lg-12">
		<form action="<?php echo base_URL()?>adminmentor/galeri/<?php echo $act?>" method="post" enctype="multipart/form-data">
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table class="table">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<td align="center" colspan="2" style="font-family:verdana; font-size:25px;">INPUT FOTO GALERI</td>
					</tr>
					</thead>
					<tbody>
					<input type="hidden" class="form-control" type="text" name="id" value="<?php echo $id ?>">
					<input type="hidden" class="form-control" type="text" name="id_mentor" value="<?php echo $id_mentor ?>">
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Nama Photo</td><td style="background-color:#31708f;"><input class="form-control" type="text" name="nama" value="<?php echo $namax ?>"></td></tr>
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Lokasi Photo</td><td style="background-color:#31708f;"><input class="form-control" type="text" name="lokasi" value="<?php echo $lokasi?>"></td></tr>
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Tingkatan</td><td style="background-color:#31708f;"><input class="form-control" type="text" name="tingkatan" value="<?php echo $tingkatan ?>"></td></tr>
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Jadikan Foto Profil</td><td style="background-color:#31708f;"><input class="form-control" type="text" name="prioritas" value="<?php echo $prioritas ?>" placeholder="Ya Atau Tidak"></td></tr>
					<tr><td style="background-color:rgb(245, 171, 56);">File Foto </td><td style="background-color:#31708f;"><img src="<?php echo base_url();?>asset/home/images/mentor/galeri/<?php echo $foto ?>" width="120px" style="margin-bottom:10px;"> 
					<input type="file" name="userfile"></td></tr>
					</tbody>
					</table>
					<div id="tombol" style="margin:10px;">
						<button class="btn btn-primary" type="submit" name="simpan" value="Simpan" style="padding:5px;"> 
						<span class="glyphicon glyphicon-save"></span> Simpan</button>
						<a href="<?php echo base_url()."dashboard/galeri";?>">
						<button class="btn btn-danger" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span> Batal</button></a>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>