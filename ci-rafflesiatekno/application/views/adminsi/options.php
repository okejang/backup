<div class="row">	
<div class="col-lg-12">
		<div class="col-lg-4">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-file-text-o"></i> Data Pendukung Rafflesia Tekno
				</li>
			</ol>
			<a href="<?php echo base_url()."dashboard/options/insertpendukung";?>"><i class="fa fa-file-o" style="float:left; margin:10px 10px 10px 0px;"></i></a>
			<input class="form-control" type="text" name="cari" style="width:92%; margin-bottom:10px;" placeholder="Cari Pendukung">
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<th>Nama</th>
						<th>Foto</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1 );
					foreach ($pendukung as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $row['nama'];?></td>
						<td align="center">
						<?php 
						if($row['foto'] == "notavailable.png"){ ?>
							<img src="<?php echo base_url();?>asset/home/images/<?php echo $row['foto']?>" width="80px"></td>
						<?php }else{ ?>
						<img src="<?php echo base_url();?>asset/home/images/pendukung/<?php echo $row['foto']?>" width="80px"></td>
						<?php } ?>
						<td align="center">
						<a href="<?php echo base_url();?>dashboard/options/editpendukung/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Pendukung ini Akan Berubah')">
						<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span></button></a>
						<a href="<?php echo base_url();?>dashboard/options/hapuspendukung/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Penduku ini Akan Terhapus')">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-trash"></span></button></a></td>
					</tr>
					<?php $no++; } ?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="col-lg-8">
		<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-user"></i> Data Testimoni Rafflesia Tekno >> 
					<a href="<?php echo base_url()."dashboard/options/inserttestemoni";?>" style="text-decoration:none;">
				<i class="fa fa-file-o"></i> Input Data Baru</a>
				</li>
			</ol>
			<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
			<div class="table-responsive"> 
				<table id="myTable" class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<th>Nama</th>
						<th>Foto</th>
						<th>Pekerjaan</th>
						<th>Testimoni</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1);
					foreach ($testimoni as $row) { ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $row['nama'];?></td>
						<td align="center">
						<?php 
						if($row['foto'] == "notavailable.png"){ ?>
							<img src="<?php echo base_url();?>asset/home/images/<?php echo $row['foto']?>" width="80px"></td>
						<?php }else{ ?>
						<img src="<?php echo base_url();?>asset/home/images/testimoni/<?php echo $row['foto']?>" width="80px"></td>
						<?php }?>
						<td><?php echo $row['pekerjaan'];?></td>
						<td><?php echo $row['testimoni'];?></td>
						<td align="center" width="12%">
						<a href="<?php echo base_url();?>dashboard/options/edittestemoni/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Testimoni ini Akan Berubah')">
						<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span></button></a>
						<a href="<?php echo base_url();?>dashboard/options/deletetestemoni/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Testimoni ini Akan Terhapus')">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-trash"></span></button></a></td>
					</tr>
					<?php $no++; } ?>
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