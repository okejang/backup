<?php
$mode	= $this->uri->segment(3);

if ($mode == "edittestemoni" || $mode == "setedittestemoni") {
	$act		= "setedittestemoni";
	$id			= $data['id'];
	$nama		= $data['nama'];
	$pekerjaan	= $data['pekerjaan'];
	$testemoni	= $data['testimoni'];
	$foto		= $data['foto'];
} else {
	$act		= "setinserttestemoni";
	$id			= "";
	$nama		= "";
	$pekerjaan	= "";
	$testemoni	= "";
	$foto		= "";
}
?>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-user"></i> Hello Yura Pinata (Administrator)
			</li>
		</ol>
	</div>
</div>
	<div class="row">
		<div class="col-lg-12">
		<form action="<?php echo base_URL()?>dashboard/options/<?php echo $act?>" method="post" enctype="multipart/form-data">
			<div class="table-responsive"> 
				<table class="table table-bordered">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<td align="center" colspan="2" style="font-family:verdana; font-size:25px;">INPUT TESTIMONI RAFFLESIA TEKNO</td>
					</tr>
					</thead>
					<tbody>
					<input type="hidden" class="form-control" type="text" name="id" value="<?php echo $id ?>">
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Nama </td><td style="background-color:rgb(48, 157, 78);"><input class="form-control" type="text" name="namak" value="<?php echo $nama ?>"></td></tr>
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Pekerjaan </td><td style="background-color:rgb(48, 157, 78);"><input class="form-control" type="text" name="pekerjaan" value="<?php echo $pekerjaan ?>"></td></tr>
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Testemoni </td><td style="background-color:rgb(48, 157, 78);"><textarea class="form-control" name="testemoni"><?php echo $testemoni ?></textarea></td></tr>
					<tr><td style="background-color:rgb(245, 171, 56);">Foto </td><td style="background-color:rgb(48, 157, 78);"><img src="<?php echo base_url();?>asset/home/images/testimoni/<?php echo $foto ?>" width="200px" style="margin-bottom:10px;"> 
					<input type="file" name="userfile"></td></tr>
					</tbody>
					</table>
					<div id="tombol" style="margin:10px;">
						<button class="btn btn-primary" type="submit" name="simpan" value="Simpan" style="padding:5px;"> 
						<span class="glyphicon glyphicon-save"></span> Simpan</button>
						<a href="<?php echo base_url()."dashboard/options";?>">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span> Batal</button></a>
					</div>
			</div>
			</form>
		</div>
	</div>
<div id="break" style="height:30px">
</div>