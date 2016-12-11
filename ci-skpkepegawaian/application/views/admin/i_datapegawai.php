
<?php
	$mode = $this->uri->segment(3);

	if($mode == "updatedatapegawai" || $mode =="setupdatedatapegawai"){
		$act = "setupdatedatapegawai";
		$id = $data['id'];
		$nama = $data['nama'];
		$password = $data['password'];
		$nip = $data['nip'];
		$foto = $data['foto'];
		$email = $data['email'];
		$nohp = $data['nohp'];
		$alamat = $data['alamat'];
		$jabatan = $data['jabatan'];
		$unitkerja = $data['unitkerja'];
		$atasan = $data['atasan'];
		$atasan1 = $data['pejabat_pnatasan'];
		$level = $data ['level'];
	}else{
		$act = "setinsertdatapegawai";
		$id = "";
		$nama = "";
		$nip = "";
		$password = "";
		$nohp ="";
		$email ="";
		$foto = "";
		$alamat = "";
		$jabatan = "";
		$unitkerja = "";
		$atasan	= "";
		$atasan1 = "";
		$level = "";
	}
?>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
<div class="navbar navbar-inverse">
	<div class="container ">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Data Pegawai</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

	
	<form action="<?php echo base_URL(); ?>index.php/dashboard/datapegawai/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	<div class="row-fluid well" style="overflow: hidden">
		
	<div class="col-lg-6">
		 <div class="box-body">
		<table  class="table-form">
		<tr><td>Nama</td><td><b><input type="text" name="nama" autofocus tabindex="1" required value="<?php echo $nama; ?>" class="form-control"></b></td></tr>
		<tr><td>NIP</td><td><b><input type="text" name="nip" tabindex="2" required value="<?php echo $nip; ?>" id="dari" class="form-control"></b></td></tr>		
		<tr><td style="padding-right:5px;">password</td><td><b><input type="password" name="password" tabindex="3" required value="<?php echo $password; ?>" class="form-control"></td></tr>
		<tr><td style="padding-right:5px;">Jabatan</td><td><b><input type="text" name="jabatan" tabindex="3" required value="<?php echo $jabatan; ?>" style="width: 400px" class="form-control"></td></tr>		
		<tr><td>Unit kerja </td><td><b><input type="text" name="unitkerja" autofocus tabindex="1" required value="<?php echo $unitkerja; ?>" class="form-control"></b></td></tr>
		<tr><td>Foto</td><td>
			<input type="file" name="userfile"></td></tr>
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i> Simpan</button>
		<?php $nip = $this->session->userdata('nip');
			if($nip>0){ ?>
				<a href="<?php echo base_URL(); ?>index.php/dashboard" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
			<?php }else{ ?>
				<a href="<?php echo base_URL(); ?>index.php/dashboard/datapegawai" class="btn btn-success" tabindex="11" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
			<?php }?>
		</td></tr>
		</table>
	</div>
	</div>
	<div class="col-lg-6">
		<table  class="table-form">
		<tr><td>Pejabat Penilai </td><td>
			<select name="atasan" class="form-control">
           <option value="<?php echo $atasan ?>">== Pilih == (<?php echo $atasan ?>)</option>
           <?php foreach($atasanp as $in){?>
           <option><?php echo $in['nama']?></option>
           <?php }?>
          </select>
		</td></tr>
		<tr><td>Atasan Pejabat Penilai </td><td>
		   <select name="atasan1" class="form-control">
           <option value="<?php echo $atasan ?>">== Pilih == (<?php echo $atasan1 ?>)</option>
           <?php foreach($atasanp as $in){?>
           <option><?php echo $in['nama']?></option>
           <?php }?>
          </select>
		</td></tr>
		<tr><td style="padding-right:5px;">No Handphone </td><td><b><input type="text" name="nohp" autofocus tabindex="1" required value="<?php echo $nohp; ?>" class="form-control"></b></td></tr>
		<tr><td>Email</td><td><b><input type="text" name="email" tabindex="2" value="<?php echo $email; ?>" id="dari" class="form-control"></b></td></tr>
		<?php if($this->session->userdata('level')=="superadmin"){ ?>
		<tr><td>Level</td><td>
		   <select name="level" class="form-control">
           <option value="<?php echo $level ?>">== Pilih == (<?php echo $level ?>)</option>
           <option>atasan</option>
           <option>pegawai</option>
           </select>
		</td></tr>		
		<?php } ?>
		<tr><td>Alamat</td><td><b><textarea type="text" name="alamat" tabindex="3" required style="width: 400px" rows="3" class="form-control"><?php echo $alamat; ?></textarea></td></tr>	
		</table>
	</div>
</div>
</form>
</div>
</div>
</section>
