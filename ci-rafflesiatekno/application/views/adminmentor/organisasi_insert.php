<?php
$mode	= $this->uri->segment(3);

if ($mode == "updateorganisasi" || $mode == "setupdate") {
	$act		= "setupdate";
	$id			= $organisasi['id'];
	$kegiatan	= $organisasi['kegiatan'];
	$periode	= $organisasi['periode'];
	$id_mentor	= $organisasi['id_mentor'];
} else {
	$act		= "setinsertorganisasi";
	$id			= "";
	$kegiatan	= "";
	$periode	= "";
	$id_mentor	= "";
}
?>
<br/>
	<div class="row">
		<div class="col-lg-12">
		<form action="<?php echo base_URL()?>adminmentor/organisasi/<?php echo $act?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table class="table" style="border:1px;">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<td align="center" colspan="2" style="font-family:verdana; font-size:25px;">Masukkan Maksimal 10 Organisasi/Kegiatan Yang Pernah Di Ikuti</td>
					</tr>
					</thead>
					<tbody>
					<input type="hidden" class="form-control" type="text" name="id" value="<?php echo $id ?>">
					<input type="hidden" class="form-control" type="text" name="id_mentor" value="<?php echo $id_mentor ?>">
					<tr><td width="15%" style="background-color:#31708f;">Kegiatan Organisasi</td><td style="background-color:#31708f;"><input class="form-control" type="text" name="kegiatan" placeholder="misal : ketua umum kpu fakultas teknik" value="<?php echo $kegiatan ?>"></td></tr>
					<tr><td width="15%" style="background-color:#31708f;">Periode Jabatan</td><td style="background-color:#31708f;"><input class="form-control" type="text" name="periode" placeholder="misal : 2014-sekarang" value="<?php echo $periode ?>"></td></tr>
					</tbody>
					</table>
					<div id="tombol" style="margin:10px;">
						<button class="btn btn-primary" type="submit" name="simpan" value="Simpan" style="padding:5px;"> 
						<span class="glyphicon glyphicon-save"></span> Simpan</button>
						<a href="<?php echo base_url()."adminmentor/organisasi";?>">
						<button class="btn btn-danger" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span> Batal</button></a>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
<div id="break" style="height:270px">
</div>