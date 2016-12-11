<section class="content">
<div class="navbar navbar-inverse">
	<div class="container ">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Username dan Password Admin</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/dashboard/admin/update" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<?php extract($admin)?>
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-12">
		<table  class="table-form">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" class="form-control" style="width:380px" value="<?php echo $username ?>"></td>
			<td>Password</td>
			<td><input type="password" name="password" class="form-control" style="width:380px" value="<?php echo $password ?>"></td>
			<td><button type="submit" class="btn btn-primary"tabindex="5" >Simpan</td>
		</tr>
		</table>
	</div>
</div>
</form>
</div>
</div>
