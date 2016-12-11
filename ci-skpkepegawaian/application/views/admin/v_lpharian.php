<section class="content">
    <div class="row">
        <div class="col-xs-12">
	
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Data Pegawai</a>
			</div>
		<div class="navbar-collapse collapse navbar-inverse-collapse" >
			<?php $nip = $this->session->userdata('nip');
             if($nip>0){ ?>
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_URL(); ?>index.php/dashboard/dataharian/insertdataharian" ><span class="glyphicon glyphicon-plus"> </span> Tambah Data</a></li>
			</ul>
			<ul class="nav navbar-nav">
				<li><a href="#myModal" data-toggle="modal" target="_blank" >
					<span class="glyphicon glyphicon-print"> </span> Cetak Data</a></li>
			</ul>
		<div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><span class="glyphicon glyphicon-print"> </span> Cetak Laporan Harian</h4>
                </div>
                <div class="modal-body">
                	<form action="<?php echo base_url();?>dashboard/cetak/printdatalpharian" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <label>Tanggal 1 : </label><input class="form-control" size="5" type="text" name="tgl1" id="tanggal1" data-date-format="yyyy-mm-dd">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Cetak</button></a>
                </div>
            </form>
            </div>
        </div>
    </div>  
     <form action="<?php echo base_URL(); ?>dashboard/dataharian/tahun" method="post" accept-charset="utf-8" >
				<ul class="nav navbar-nav" style="margin-top:7px; margin-left:530px;">
				<?php $tahunsekarang = date('Y'); ?>
				<select name="tahun" class="form-control" style="border-radius:2px;">
	           	<option>== Tahun ==</option>
	           	<?php foreach($datax as $in){?>
	          	<option>
           			<?php 
           				$tahunx = $in['tahun'];
           				$tahunn = strip_tags($tahunx);
	    				$tahun = substr($tahunn,0,4);
           				echo $tahun;
           			?>
           		</option>
	          	<?php }?>
	          	</select>
	          	<a href="<?php echo base_URL(); ?>index.php/dashboard/kontrakkerja/ ?>"></a>
	         </ul>
	         <ul class="nav navbar-nav" style="margin-top:7px; border-radius:0px;">
				<button type="submit" class="btn btn-primary" ><i class="icon icon-ok icon-white"></i> Pilih</button>
	         </ul>
	         </form>
	         <?php } ?>
		</div><!-- /.nav-collapse -->
		
		</div><!-- /.container -->
	</div><!-- /.navbar -->
  </div>
</div>
<script type="text/javascript">
     $('#tanggal1').datetimepicker({
            language:  'id',
            weekStart: 1,
            todayBtn:  1,
	      autoclose: 1,
	      todayHighlight: 1,
	      startView: 2,
	      minView: 2,
	      forceParse: 0
	        });
       $('#tanggal2').datetimepicker({
            language:  'id',
            weekStart: 1,
            todayBtn:  1,
	      autoclose: 1,
	      todayHighlight: 1,
	      startView: 2,
	      minView: 2,
	      forceParse: 0
	        });
    </script>

<!-- START Fungsi Tabel Dengan Halaman dan Pencarian Atomatis serta Responsif -->
<div class="panel panel-default" style="padding:5px 0px 5px 0px;">
			<div class="table-responsive"> 
				<table id="myTable" class="table table-hover table-striped">
					<thead>
					<tr style="background-color:rgb(9, 18, 115); color:#ffffff;">
						<th>No</th>
						<?php if($this->session->userdata('level')=="superadmin"){ ?>
						<th>Nip</th>
						<?php } ?>
						<th>Kegiatan</th>
						<th>File</th>
						<th>Output</th>
						<th>Volume</th>
						<th>Satuan</th>
						<th>Keterangan</th>
						<th width="80px">Tanggal</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php 
					$no = ($this->uri->segment(4) + 1 );
					foreach ($lpharian as $row) { ?>
					<tr>
						<td><?php echo $no;?></td>
						<?php if($this->session->userdata('level')=="superadmin"){ ?>
						<td><?php echo $row['nip'];?></td>
						<?php } ?>
						<td><?php echo $row['kegiatan'];?></td>
						<td><a href="<?php echo base_url();?>/assets/dist/berkas/<?php echo $row['file']?>" target="_blank"><?php echo $row['file'];?></a></td>
						<td><?php echo $row['output'];?></td>
						<td><?php echo $row['volume'];?></td>
						<td><?php echo $row['satuan'];?></td>
						<td><?php echo $row['keterangan'];?></td>
						<td><?php echo $row['tanggal'];?></td>
						<td align="center">
						<a href="<?php echo base_url();?>dashboard/dataharian/updatedataharian/<?php echo $row['id'];?>" 
						onclick="return confirm('Data Pendukung ini Akan Berubah')">
						<button class="btn btn-success" type="button" name="cancel" style="padding:5px;">
						<span class="glyphicon glyphicon-edit"></span></button></a>
						<a href="<?php echo base_url();?>dashboard/dataharian/deletedataharian/<?php echo $row['id'];?>" 
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
<script type="text/javascript" charset="utf-8"> //memanggil option Tabel pada asset 
 $(document).ready(function() {
    $('#myTable').dataTable();
} );
</script>
<!-- END -->

</div>
