<section class="content">
    <div class="row">
    <?php extract($komentar) ?>
	<p>Kolom Komentar : </p>
	<form action="<?php echo base_URL(); ?>index.php/dashboard/komentar/input_komentar" method="POST">
		<?php $nip = $this->session->userdata('nip');?>
		<input style="margin-bottom:2px;" type="text" class="form-control" name="dari" value="<?php echo $dari ?>" placeholder="Dari">
		<input style="margin-bottom:2px;" type="text" class="form-control" name="ke" value="<?php echo $nip ?>" placeholder="Ke">
		<input style="margin-bottom:2px;" type="text" class="form-control" name="perihal" value="<?php echo $perihal ?>" placeholder="Perihal">
		<textarea style="margin-bottom:3px;" class="form-control" style="width:100%;" rows="7" name="komentar"></textarea>
		<button type="submit" class="btn btn-primary"tabindex="10" ><i class="icon icon-ok icon-white"></i> Kirim Komentar</button>
	</form>
	<br/>
</div>
</div>
