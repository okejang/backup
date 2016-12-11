<section class="content"> 
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
                <a href="<?php echo base_url()?>dashboard/datapegawai" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h4> 
                  <?php 
                      $jumlah = $this->db->query("SELECT * FROM tb_laporanharian ");
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
                <a href="http://www.iainbengkulu.ac.id" target="_blank" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
</section>
          