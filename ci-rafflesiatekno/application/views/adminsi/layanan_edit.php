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
		<form action="<?php echo site_url('dashboard/layanan/setedit'); ?>" method="post" enctype="multipart/form-data">
			<div class="panel panel-default">
			<?php extract($data);?>
			<div class="table-responsive"> 
				<table class="table table-bordered">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<td align="center" colspan="2" style="font-family:verdana; font-size:25px;">Perbaharui Layanan</td>
					</tr>
					</thead>
					<tbody>
					<input type="hidden" class="form-control" type="text" name="id" value="<?php echo $id ?>">
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Nama Layanan </td><td style="background-color:rgb(48, 157, 78);"><input class="form-control" type="text" name="nama" value="<?php echo $nama ?>"></td></tr>
					<tr><td style="background-color:rgb(245, 171, 56);">Detail Layanan</td><td style="background-color:rgb(48, 157, 78);"><textarea class="form-control" name="keterangan" rows="7"><?php echo $keterangan ?></textarea></td></tr>
					<tr><td style="background-color:rgb(245, 171, 56);">Icon Layanan </td><td style="background-color:rgb(48, 157, 78);"><img src="<?php echo base_url();?>asset/home/images/<?php echo $icon ?>" width="200px" style="margin-bottom:10px;"> 
					<input type="file" name="userfile"></td></tr>
					</tbody>
					</table>
					<div id="tombol" style="margin:10px;">
						<button class="btn btn-primary" type="submit" name="simpan" value="Simpan" style="padding:5px;"> 
						<span class="glyphicon glyphicon-save"></span> Simpan</button>
						<a href="<?php echo base_url()."dashboard/layanan";?>">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span> Batal</button></a>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>