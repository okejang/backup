<style>
p{font-size:12px; text-align:center;}
</style>
<div class="row">	
<div class="col-lg-12">
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-file-text-o"></i> Daftar Mentor Rafflesia Tekno Course >> 
					<a href="<?php echo base_url()."dashboard/rtcourse/insertcourse";?>" style="text-decoration:none;">
				<i class="fa fa-file-o"></i> Input Data Baru</a>
				</li>
			</ol>
			<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
			<div class="table-responsive"> 
				<table id="myTable" class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<th>Foto</th>
						<th>Nama</th>
						<th>Posisi</th>
						<th>No Handphone</th>
						<th>Alamat</th>
						<th>Quote</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1);
					foreach ($course as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<td width="100px">
						<?php 
						if($row['foto'] == "notavailable.png"){ ?>
							<img src="<?php echo base_url();?>asset/home/images/<?php echo $row['foto']?>" width="80px"></td>
						<?php }else{ ?>
						<img src="<?php echo base_url();?>asset/home/images/mentor/<?php echo $row['foto']?>"
							class="img-responsive" width="100px" style="border-radius:3px; border:3px solid #000000;"></td>
						<?php } ?>
						<td><?php echo $row['nama'];?></td>
						<td><?php echo $row['posisi'];?></td>
						<td><?php echo $row['nohp'];?></td>
						<td><?php echo $row['alamat'];?></td>
						<td><?php echo $row['quote'];?></td>
					<td align="center" width="12%">
						<a href="<?php echo base_url();?>dashboard/rtcourse/editcourse/<?php echo $row['id'];?>" 
							onclick="return confirm('Data Testimoni ini Akan Berubah')">
							<button class="btn btn-success" type="button" name="edit" style="padding:5px;">
							<span class="glyphicon glyphicon-retweet"></span></button></a>
							<a href="<?php echo base_url();?>dashboard/rtcourse/deletecourse/<?php echo $row['id'];?>" 
							onclick="return confirm('Data Testimoni ini Akan Terhapus')">
							<button class="btn btn-warning" type="button" name="hapus" style="padding:5px;">
						<span class="glyphicon glyphicon-trash"></span></button></a></td>
					</tr>
					<?php $no++; } ?>
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