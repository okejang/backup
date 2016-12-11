<?php
$mode	= $this->uri->segment(3);

if ($mode == "editusers" || $mode == "seteditusers") {
	$act		= "seteditusers";
	$id			= $data['id'];
	$username	= $data['username'];
	$password	= $data['password'];
	$level		= $data['level'];
} else {
	$act		= "setinputusers";
	$id			= "";
	$username	= "";
	$password	= "";
	$level		= "";
}
?>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-user"></i> Hello <?php echo $this->session->userdata('username');?>
			</li>
		</ol>
	</div>
</div>
	<div class="row">
		<div class="col-lg-12">
		<form action="<?php echo base_URL()?>dashboard/users/<?php echo $act?>" method="post" enctype="multipart/form-data">
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table class="table table-bordered">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<td align="center" colspan="2" style="font-family:verdana; font-size:25px;">INPUT DATA ADMIN</td>
					</tr>
					</thead>
					<tbody>
					<input type="hidden" class="form-control" type="text" name="id" value="<?php echo $id ?>">
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Username</td><td style="background-color:rgb(48, 157, 78);"><input class="form-control" type="text" name="username" value="<?php echo $username ?>"></td></tr>
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Password</td><td style="background-color:rgb(48, 157, 78);"><input class="form-control" type="password" name="password" value="<?php echo $password ?>"></td></tr>
					<tr><td width="15%" style="background-color:rgb(245, 171, 56);">Level</td><td style="background-color:rgb(48, 157, 78);"><input class="form-control" type="text" name="level" value="<?php echo $level ?>" readonly></td></tr>
					</tr>
					</tbody>
					</table>
					<div id="tombol" style="margin:10px;">
						<button class="btn btn-primary" type="submit" name="simpan" value="Simpan" style="padding:5px;"> 
						<span class="glyphicon glyphicon-save"></span> Simpan</button>
						<a href="<?php echo base_url()."dashboard/users";?>">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span> Batal</button></a>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
<div id="break" style="height:160px">
</div>