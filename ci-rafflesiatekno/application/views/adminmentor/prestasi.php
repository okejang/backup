<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
		<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-user"></i> Daftar Prestasi >> 
					<a href="<?php echo base_url()."adminmentor/prestasi/insertprestasi ";?>" style="text-decoration:none;">
				<i class="fa fa-file-o"></i> Input Data Baru</a>
				</li>
			</ol>
			<div class="panel panel-default">
			<div class="table-responsive"> 
				<table id="myTable" class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<?php $nama = $this->session->userdata('username');
						if($nama==true){ ?>
						<th width="200px">Nama</th>
						<?php } ?>
						<th>Kegiatan</th>
						<th width="100px">Tahun</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1);
					foreach ($prestasi as $row) { ?>
					<tr>
						<td><?php echo $no; ?></td>
						<?php $nama = $this->session->userdata('username');
						if($nama==true){ 
							$idm = $row['id_mentor'];
							$idx = $this->db->query("SELECT nama FROM tb_course WHERE id = '$idm'");
							$nama= $idx->row()->nama;
						?>
						<td><?php echo $nama." (".$idm.")";?></td>
						<?php } ?>
						<td><?php echo $row['kegiatan'];?></td>
						<td><?php echo $row['tahun'];?></td>
						<td align="center" width="12%">
						<a href="<?php echo base_url();?>adminmentor/prestasi/updateprestasi/<?php echo $row['id'];?>" 
						onclick="return confirm('Data ini Akan Berubah')">
						<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-retweet"></span></button></a>
						<a href="<?php echo base_url();?>adminmentor/prestasi/deleteprestasi/<?php echo $row['id'];?>" 
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
<div id="break" style="height:35px">
</div