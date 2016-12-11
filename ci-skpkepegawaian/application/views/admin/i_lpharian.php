
<?php
	$mode = $this->uri->segment(3);

	if($mode == "updatedataharian" || $mode =="setupdatedataharian"){
		$act = "setupdatedataharian";
		$id = $data['id'];
		$nipx = $data['nip'];
		$kegiatan = $data['kegiatan'];
		$output = $data['output'];
		$volume = $data['volume'];
		$satuan = $data['satuan'];
		$keterangan = $data['keterangan'];
		$tanggal = $data['tanggal'];
	}else{
		$act = "setinsertdataharian";
		$id = "";
		$nipx = "";
		$kegiatan = "";
		$output = "";
		$volume ="";
		$satuan ="";
		$keterangan = "";
		$tanggal = "";
	}
?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
<div class="navbar navbar-inverse">
	<div class="container ">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Laporan Harian Pegawai</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/dashboard/dataharian/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<input type="hidden" name="nip" value="<?php echo $nipx; ?>">
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td style="padding-right:5px;">Kegiatan Tugas Pegawai</td><td><b>
			<select name="kegiatan" class="form-control">
           	<option value="<?php echo $kegiatan?>">== Pilih ==</option>
           	<?php foreach($kontrakkerja as $in){?>
          	<option><?php echo $in['kegiatan_tugas']?></option>
          	<?php }?>
          	</select></b></td></tr>
		<tr><td>Output</td><td><b><input type="text" name="output" tabindex="2" value="<?php echo $output; ?>" id="dari" class="form-control"></b></td></tr>		
		<tr><td>Volume</td><td><b><input type="text" name="volume" tabindex="3" value="<?php echo $volume; ?>" style="width: 400px" class="form-control"></td></tr>	
		<tr><td colspan="2"><br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i> Simpan</button>
		<a href="<?php echo base_URL(); ?>index.php/dashboard/dataharian" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
	</div>
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td>Satuan </td><td><b><input type="text" name="satuan" autofocus tabindex="1" value="<?php echo $satuan; ?>" class="form-control"></b></td></tr>
		<tr><td style="padding-right:5px;">Keterangan</td><td><b><input type="text" name="keterangan" tabindex="2" value="<?php echo $keterangan; ?>" id="dari" class="form-control"></b></td></tr>		
		<tr><td style="padding-right:5px;">Tanggal</td><td><b><input class="form-control" size="10" type="text" name="tanggal" id="tanggal" data-date-format="yyyy-mm-dd" tabindex="3" value="<?php echo $tanggal; ?>" style="width: 400px;"></b></td></tr>			
		<tr><td>File Scan</td><td><input type="file" name="userfile" tabindex="8" class="form-control" style="width: 400px"></td></tr>
		</table>
	</div>
</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
     $('#tanggal').datetimepicker({
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
