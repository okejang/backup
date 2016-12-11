<div class="box box-default">
          <div class="box-body">
		  <div class="row">
            <div class="col-md-12">
			<?php foreach ($berita as $row){ ?>
				<div class ="col-md-3">
				<img src="<?php echo base_url();?>assets/dist/img/berita/<?php echo $row['foto']?>" style="width:300px; height:150px; float:left;" class="img-responsive">
				</div>
				<div class ="col-md-9" style="margin-bottom:10px">
				<h2 style="margin-top:0px"><?php echo $row['judul']?></h2>
				<?php
					$isi_berita = strip_tags($row['berita']);
	    			$isi = substr($isi_berita,0,100000);
                ?>
				<p style="text-align:justify"><?php echo $isi ?></p>
				</div>
			<?php } ?>
			</div>
          </div>
	</div>
</div>