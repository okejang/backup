<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
		<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-user"></i> Daftar Organisasi >> 
					<a href="<?php echo base_url()."adminmentor/organisasi/insertorganisasi ";?>" style="text-decoration:none;">
				<i class="fa fa-file-o"></i> Input Data Baru</a>
				</li>
			</ol>
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table id="myTable" class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<th>Foto</th>
						<th>Nama</th>
						<th>Nohp</th>
						<th>Alamat</th>
						<th>Bidang</th>
						<th>Sasaran</th>
						<th>Biodata</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1);
					foreach ($users as $row) { ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><img src="<?php echo base_url();?>asset/home/images/mentor/<?php echo $row['foto']?>" width="100px"></td>
						<td><?php echo $row['nama'];?></td>
						<td><?php echo $row['nohp'];?></td>
						<td><?php echo $row['alamat'];?></td>
						<td><?php echo $row['bidang'];?></td>
						<td><?php echo $row['sasaran'];?></td>
						<td><?php echo $row['biodata'];?></td>
						<td align="center" width="12%">
						<a href="<?php echo base_url();?>adminmentor/datausers/updateusers/<?php echo $row['id'];?>" 
						onclick="return confirm('Data ini Akan Berubah')">
						<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span></button></a>
						<a href="<?php echo base_url();?>adminmentor/datausers/deleteusers/<?php echo $row['id'];?>" 
						onclick="return confirm('Data ini Akan Terhapus')">
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
	</div>
	</section>
<script type="text/javascript" charset="utf-8">
 $(document).ready(function() {
    $('#myTable').dataTable();
} );
</script>
<div id="break" style="height:30px">
</div>