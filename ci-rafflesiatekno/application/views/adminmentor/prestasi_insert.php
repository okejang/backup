<?php
$mode	= $this->uri->segment(3);

if ($mode == "updateprestasi" || $mode == "setupdate") {
	$act		= "setupdate";
	$id			= $prestasi['id'];
	$kegiatan	= $prestasi['kegiatan'];
	$tahun		= $prestasi['tahun'];
	$id_mentor	= $prestasi['id_mentor'];
} else {
	$act		= "setinsertprestasi";
	$id			= "";
	$kegiatan	= "";
	$tahun		= "";
	$id_mentor	= "";
}
?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
<style>
	table tr td{

	}
</style>
<br/>
	<div class="row">
		<div class="col-lg-12">
		<form action="<?php echo base_URL()?>adminmentor/prestasi/<?php echo $act?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table class="table" style="border:1px;">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<td align="center" colspan="2" style="font-family:verdana; font-size:25px;">Masukkan Maksimal 10 Prestasi Yang Pernah Di Raih</td>
					</tr>
					</thead>
					<tbody>
					<input type="hidden" class="form-control" type="text" name="id" value="<?php echo $id ?>">
						<input type="hidden" class="form-control" type="text" name="id_mentor" value="<?php echo $id_mentor ?>">
					<tr><td width="15%" style="background-color:#31708f;">Prestasi Yang Di Raih</td><td style="background-color:#31708f;"><input class="form-control" type="text" name="kegiatan" value="<?php echo $kegiatan ?>"></td></tr>
					<tr><td width="15%" style="background-color:#31708f;">Tahun Mendapatkan</td><td style="background-color:#31708f;"><input class="form-control" type="text" name="tahun" value="<?php echo $tahun ?>"></td></tr>
					</tbody>
					</table>
					<div id="tombol" style="margin:10px;">
						<button class="btn btn-primary" type="submit" name="simpan" value="Simpan" style="padding:5px;"> 
						<span class="glyphicon glyphicon-save"></span> Simpan</button>
						<a href="<?php echo base_url()."dashboard/article";?>">
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