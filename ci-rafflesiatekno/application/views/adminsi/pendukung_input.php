<?php
$mode	= $this->uri->segment(3);

if ($mode == "editpendukung" || $mode == "setpendukung") {
	$act		= "setpendukung";
	$id			= $data['id'];
	$nama		= $data['nama'];
	$foto		= $data['foto'];
} else {
	$act		= "setinputpendukung";
	$id			= "";
	$nama		= "";
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
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table class="table table-bordered">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<td align="center" colspan="2" style="font-family:verdana; font-size:25px;">INPUT PENDUKUNG RAFFLESIA TEKNO</td>
					</tr>
					</thead>
					<tbody>
					<input type="hidden" class="form-control" type="text" name="id" value="<?php echo $id ?>">
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Nama Pendukung </td><td style="background-color:rgb(48, 157, 78);"><input class="form-control" type="text" name="namap" value="<?php echo $nama ?>"></td></tr>
					<tr><td style="background-color:rgb(245, 171, 56);">Foto Pendukung </td><td style="background-color:rgb(48, 157, 78);"><img src="<?php echo base_url();?>asset/home/images/pendukung/<?php echo $foto ?>" width="200px" style="margin-bottom:10px;"> 
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
			</div>
			</form>
		</div>
	</div>
<div id="break" style="height:30px">
</div>