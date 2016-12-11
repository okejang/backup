 <div class="callout callout-info">
  <?php foreach ($pegawai as $row) { ?>
  <div class="callout callout-danger">
    <table>
    <tr><td rowspan="5">
      <img src="<?php echo base_url();?>assets/dist/img/pegawai/<?php echo $row['foto']?>" width="100px"></td></tr>
    <tr><td style="width:120px">Nama Lengkap</td> 
    <td style="width:250px"><label>: <?php echo $row['nama']; ?></label></b></td>
    <td style="width:170px">No Induk Pegawai (NIP) </td>
    <td style="width:350px"><b><label>: <?php echo $row['nip'];?></b></td></tr>
    <tr><td>Email </td><td><b><label>: <?php echo $row['email'];?></b></td>
	<td>Unit kerja </td><td><b><label>: <?php echo $row['unitkerja'];?></b></td></tr>
    <tr><td>Jabatan</td><td><b><label>: <?php echo $row['jabatan']; ?></b></td>
	 <td>Alamat </td><td><b><label>: <?php echo $row['alamat'];?></b></td></tr>
    </table>
	</div>
<?php }?>
</div>