<style>
p{font-size:12px; text-align:center;}
</style>
<div class="row">	
<div class="col-lg-12">
		<div class="col-lg-12">
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-file-text-o"></i> Daftar Users Rafflesia Tekno >> 
					<?php if ($this->session->userdata('level')=='superadmin'){ ?>
					<a href="<?php echo base_url()."dashboard/users/insertusers";?>" style="text-decoration:none;">
				<i class="fa fa-file-o"></i> Input Data Baru</a>
				<?php } ?>
				</li>
			</ol>
			<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
			<div class="table-responsive"> 
				<table id="myTable" class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<th>Username</th>
						<th>Password</th>
						<th>Level</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php if ($this->session->userdata('level')=='superadmin'){
					$no = ($this->uri->segment(4) + 1);
					foreach ($users as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['password'];?></td>
						<td><?php echo $row['level'];?></td>
					<td align="center" width="12%">
						<a href="<?php echo base_url();?>dashboard/users/editusers/<?php echo $row['id'];?>" 
							onclick="return confirm('Data Testimoni ini Akan Berubah')">
							<button class="btn btn-success" type="button" name="edit" style="padding:5px;">
							<span class="glyphicon glyphicon-retweet"></span></button></a>
							<a href="<?php echo base_url();?>dashboard/users/deleteusers/<?php echo $row['id'];?>" 
							onclick="return confirm('Data Testimoni ini Akan Terhapus')">
							<button class="btn btn-warning" type="button" name="hapus" style="padding:5px;">
						<span class="glyphicon glyphicon-trash"></span></button></a></td>
					</tr>
					<?php $no++; } ?>

					<?php }else { 
					$id = $this->session->userdata('id');
					$date = $this->db->query("SELECT * FROM tb_users where id = '$id' ");
					$iduser = $date->row()->id;
					$username = $date->row()->username;
					$password = $date->row()->password; 
					$level= $date->row()->level; 
					$no = ($this->uri->segment(4) + 1);
					?>
					<tr>
						<td><?php echo $no?></td>
						<td><?php echo $username;?></td>
						<td><?php echo $password;?></td>
						<td><?php echo $level;?></td>
					<td align="center" width="12%">
						<a href="<?php echo base_url();?>dashboard/users/editusers/<?php echo $iduser;?>" 
							onclick="return confirm('Data Testimoni ini Akan Berubah')">
							<button class="btn btn-success" type="button" name="edit" style="padding:5px;">
							<span class="glyphicon glyphicon-retweet"></span></button></a>
							<a href="<?php echo base_url();?>dashboard/users/deleteusers/<?php echo $iduser;?>" 
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