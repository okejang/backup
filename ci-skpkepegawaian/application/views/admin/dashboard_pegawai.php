<section class="content" style="min-height:0px;"> 
   <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h4> 
                  <?php 
                      $jumlah = $this->db->query("SELECT * FROM tb_datapegawai");
                      echo $jumlah->num_rows()." Orang";                                       
                  ?></h4>
                  <p style="font-size: 22px">Data Pegawai</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="<?php echo base_url()?>dashboard" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h4> 
                  <?php 
                      $nip = $this->session->userdata('nip');
                      $jumlah = $this->db->query("SELECT * FROM tb_laporanharian where nip ='$nip' ");
                      echo $jumlah->num_rows()." Data Item";                                       
                  ?></h4>
                  <p style="font-size: 22px">Total Laporan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-files-o"></i>
                </div>
                <a href="<?php echo base_url()?>dashboard/dataharian" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>SICAKEP</h3>
                  <p>IAIN Bengkulu</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file-archive-o"></i>
                </div>
                <a href="<?php echo base_url();?>" class="small-box-footer" target="_blank">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>IAIN</h3>
                  <p>Bengkulu</p>
                </div>
                <div class="icon">
                  <i class="fa fa-building"></i>
                </div>
                <a href="http://www.iainbengkulu.ac.id"  target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
  
  <form action="<?php echo base_URL(); ?>index.php/dashboard/datapegawai/setupdatedatapegawai" method="post" accept-charset="utf-8" enctype="multipart/form-data">
  <?php extract($pegawai)?>
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <div class="row-fluid well" style="overflow: hidden">
    
  <div class="col-lg-12">
     <div class="box-body">
    <table>
    <tr><td rowspan="5"><a href="<?php echo base_URL(); ?>index.php/dashboard/datapegawai/updatedatapegawai/<?php echo $id?>">
      <img src="<?php echo base_url();?>assets/dist/img/pegawai/<?php echo $foto?>" width="200px"></a></td></tr>
    <tr><td style="width:150px">Nama Lengkap</td> 
    <td style="width:300px"><label>: <?php echo $nama; ?></label></b></td>
    <td style="width:200px">No Induk Pegawai (NIP) </td>
    <td style="width:320px"><b><label>: <?php echo $nip;?></b></td></tr>
    <tr><td>Email </td><td><b><label>: <?php echo $email;?></b></td>
      <td>No Handphone </td><td><b><label>: <?php echo $nohp;?></b></td></tr> 
    <tr><td>Pejabat Penilai</td><td><b><label>: <?php echo $jabatan; ?></b></td>
    <td>Unit kerja </td><td><b><label>: <?php echo $unitkerja;?></b></td></tr> 
    <tr><td>Alamat Lengkap</td><td colspan="3"><b><label>: <?php echo $alamat;?></b></td></tr>
    </table>
  </div>
</div>
</form>
</div>
</div>
</section>

          