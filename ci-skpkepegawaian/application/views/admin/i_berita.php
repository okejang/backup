
<?php
	$mode = $this->uri->segment(3);

	if($mode == "updateberita" || $mode =="setupdateberita"){
		$act = "setupdateberita";
		$id = $data['id'];
		$judul = $data['judul'];
		$berita = $data['berita'];
		$foto = $data['foto'];

	}else{
		$act = "setinsertberita";
		$id = "";
		$judul = "";
		$berita = "";
		$foto = "";

	}
?>
<script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

<section class="content">
<div class="navbar navbar-inverse">
	<div class="container ">
		<div class="navbar-header">
			<span class="navbar-brand" href="#">Posting Berita</span>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->

		<div class="row-fluid well" style="overflow: hidden">
	 <div class="row">
        <div class="col-md-12">	
       <form action="<?php echo base_URL(); ?>index.php/dashboard/manajemenberita/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $id; ?>">	
		<table  class="table-form">
		<tr><td>Judul</td><td><b><input type="text" name="judul" autofocus tabindex="1" required value="<?php echo $judul; ?>" class="form-control"  style="width:950px"></b></td></tr>
		<tr><td>Berita</td><td>
            <textarea id="editor1" name="berita">
                    	<?php echo $berita; ?>
            </textarea>
		</td></tr>
		<tr><td>Foto</td><td><b>
			<input type="file" name="userfile" tabindex="3" ></b></td></tr>
		<tr><td colspan="2">
		<br><button type="submit" class="btn btn-primary"tabindex="4" ><i class="icon icon-ok icon-white"></i> Simpan</button>
		<a href="<?php echo base_URL(); ?>index.php/dashboard/manajemenberita" class="btn btn-success" tabindex="5" ><i class="icon icon-arrow-left icon-white"></i> Kembali</a>
		</td></tr>
		</table>
		</form>
	</div>
</div>
</div>
</div>
