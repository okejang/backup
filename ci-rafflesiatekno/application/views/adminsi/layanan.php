<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-file-text-o"></i> Halaman Pengaturan Layanan Rafflesia Tekno
			</li>
		</ol>
	</div>
</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table class="table table-bordered">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th width="15%" align="center">Nama Layanan</th>
						<th width="63%">Detail Layanan</th>
						<th width="12%">Icon Layanan</th>
						<th width="10%">Edit Layanan</th>
					</tr>
					</thead>
					<?php foreach ($layanan as $row) { ?>
					<tbody>
					<tr>
						<td style="background-color:rgb(245, 171, 56);"><?php echo $row['nama'];?></td>
						<td style="background-color:rgb(97, 245, 56);"><?php echo $row['keterangan'];?></td>
						<td style="background-color:rgb(255, 34, 151);" align="center">
						<img src="<?php echo base_url();?>asset/home/images/<?php echo $row['icon']?>" width="80px"></td>
						<td style="background-color:rgb(59, 73, 73);" align="center">
						<a href="<?php echo base_url();?>dashboard/layanan/edit/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Layanan ini Akan Berubah')">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span> Perbaharui</button></a></td>
					</tr>
					</tbody>
					<?php } ?>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url();?>asset/jquery.js"></script>
	<script type="text/javascript" charset="utf-8">
	 $('tr:odd').css('background', 'rgb(198, 242, 199)');
	</script>