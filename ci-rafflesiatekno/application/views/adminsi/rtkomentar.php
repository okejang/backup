<style>
p{font-size:12px; text-align:center;}
</style>
<div class="row">	
<div class="col-lg-12">
		<div class="col-lg-12">
			<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
			<div class="table-responsive"> 
				<table id="myTable" class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Subjek</th>
						<th>Komentar</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1);
					foreach ($komentar as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $row['nama'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['subjek'];?></td>
						<td><?php echo $row['komentar'];?></td>
					<td align="center" width="12%">
						<a href="<?php echo base_url();?>dashboard/rtkomentar/deletekomentar/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Testimoni ini Akan Terhapus')">
						<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
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