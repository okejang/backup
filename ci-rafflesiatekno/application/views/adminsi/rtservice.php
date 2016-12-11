<style>
p{font-size:12px; text-align:center;}
</style>
<div class="row">	
<div class="col-lg-12">
		<div class="col-lg-12">
			<a href="<?php echo base_url()."dashboard/rtservice/inputservice";?>">
			<button class="btn btn-success" type="button" name="edit" style="width:100%; margin-bottom:5px;">
			<span class="glyphicon glyphicon-plus-sign"></span></button></a>
			<form action="<?php echo base_URL()?>dashboard/rtwebsite/carirtwebsite" method="post">
			<input class="form-control" type="text" name="cari" style="margin-bottom:10px;" placeholder="Search Here">
			</form>
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table class="table table-hover table-striped">
					<tbody>
					<?php foreach ($service as $row) { ?>
					<div class="col-md-12" style="margin-top:15px;">
						<div>
							<p><center>
							<p style="color:#000000; font-weight:bold; font-size:40px;"><?php echo $row['nama']?></p>
							<img src="<?php echo base_url();?>asset/home/images/service/<?php echo $row['foto']?>"
							class="img-responsive" style="border-radius:3px; border:3px solid #000000;"></p>
							<p style="text-align:center;"> <a href="<?php echo base_url();?>dashboard/rtservice/editservice/<?php echo $row['id'];?>" 
							onclick="return confirm('Data Testimoni ini Akan Berubah')">
							<button class="btn btn-success" type="button" name="edit" style="padding:5px;">
							<span class="glyphicon glyphicon-retweet"></span></button></a>
							<a href="<?php echo base_url();?>dashboard/rtservice/hapusservice/<?php echo $row['id'];?>" 
							onclick="return confirm('Data Testimoni ini Akan Terhapus')">
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
<div id="break" style="margin-bottom:10px">
</div>
<script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
    $('#myTable').dataTable();
} );
</script>