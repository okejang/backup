<section class="content">
    <div class="row">
<!-- START Fungsi Tabel Dengan Halaman dan Pencarian Atomatis serta Responsif -->
<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
		<div class="table-responsive"> 
				<table id="myTable" class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<th>Dari</th>
						<th>Ke</th>
						<th>Perihal</th>
						<th>Komentar</th>
						<th>Upan Balik</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1 );
					foreach ($komentar as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<td><?php echo $row['dari'];?></td>
						<td><?php echo $row['ke'];?></td>
						<td><?php echo $row['perihal'];?></td>
						<td><?php echo $row['komentar'];?></td>
						<td>
							<?php $nip = $this->session->userdata('nip');
								if ($nip==$row['dari']){
									echo "Terkirim";
								}else{echo "Masuk";}
							?>
						</td>
						<td>
							<a href="<?php echo base_url();?>dashboard/komentar/balaskomentar/<?php echo $row['id'];?>" 
							onclick="return confirm('Anda Membalas Komentar')">
							<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
							<span class="glyphicon glyphicon-refresh"></span></button></a>
							<a href="<?php echo base_url();?>dashboard/komentar/deletekomentar/<?php echo $row['id'];?>" 
							onclick="return confirm('Data kontrak kerja ini akan terhapus')">
							<button class="btn btn-warning" type="button" name="cancel" style="padding:5px;">
							<span class="glyphicon glyphicon-trash"></span></button></a>
						</td>
					</tr>
					<?php $no++; } ?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
<script type="text/javascript" charset="utf-8"> //memanggil option Tabel pada asset 
 $(document).ready(function() {
    $('#myTable').dataTable();
} );
</script>
<!-- END -->
</div>
