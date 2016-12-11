<style>
p{font-size:12px; text-align:center;}
</style>
</br/>
<div class="row">	
<div class="col-lg-12">
		<div class="col-lg-12">
		<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-user"></i> 4 Foto Terbaik dan 1 Foto Profil >> 
					<a href="<?php echo base_url()."adminmentor/galeri/insertgaleri ";?>" style="text-decoration:none;">
				<i class="fa fa-file-o"></i> Input Data Baru</a>
				</li>
			</ol>
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table class="table table-hover table-striped">
					<tbody>
					<?php foreach ($galeri as $row) { ?>
					<div class="col-md-4" style="margin-top:15px;">
						<div>
							<p><img src="<?php echo base_url();?>asset/home/images/mentor/galeri/<?php echo $row['foto']?>"
							class="img-responsive" width="350px" height="300px" style="border-radius:3px; border:3px solid #000000;"></p>
							<p style="color:#000000; font-weight:bold;"><?php echo $row['nama']?></p>
							<p style="text-align:center;"> <a href="<?php echo base_url();?>adminmentor/galeri/updategaleri/<?php echo $row['id'];?>" 
							onclick="return confirm('Foto ini Akan Berubah')">
							<button class="btn btn-success" type="button" name="edit" style="padding:5px;">
							<span class="glyphicon glyphicon-retweet"></span></button></a>
							<a href="<?php echo base_url();?>adminmentor/galeri/deletegaleri/<?php echo $row['id'];?>" 
							onclick="return confirm('Foto Ini Akan Terhapus')">
							<button class="btn btn-warning" type="button" name="hapus" style="padding:5px;">
							<span class="glyphicon glyphicon-trash"></span></button></a></p>
						</div>
					</div>
			</div>
					<?php } ?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
    $('#myTable').dataTable();
} );
</script>