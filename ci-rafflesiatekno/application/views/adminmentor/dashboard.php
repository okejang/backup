<div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user"></i> Hello 
                                <?php $nama = $this->session->userdata('nama');
                                    if ($nama == true){ echo $nama." (Pengajar)";
                                    }else{
                                    $namax = $this->session->userdata('username');
                                    echo $namax." (Administrator)";
                                    }
                                ?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                         <?php 
                                            $nama = $this->session->userdata('nama');
                                            if ($nama == true){
                                            $idx = $this->db->query("SELECT id FROM tb_course WHERE nama = '$nama'");
                                            $idp= $idx->row()->id;
                                            $jumlah = $this->db->query("SELECT * FROM tb_organisasi where id_mentor ='$idp' ");
                                            echo $jumlah->num_rows();  
                                            }else{
                                                $jumlah = $this->db->query("SELECT * FROM tb_organisasi ");
                                                echo $jumlah->num_rows();  
                                            }                                     
                                        ?>
                                        </div>
                                        <div>Top Kegiatan</div>
                                    </div>
                                </div>
                            </div>
                             <a href="<?php echo base_url();?>adminmentor/organisasi">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                        <?php 
                                            $nama = $this->session->userdata('nama');
                                            if($nama == true){
                                            $idx = $this->db->query("SELECT id FROM tb_course WHERE nama = '$nama'");
                                            $idp= $idx->row()->id;
                                            $jumlah = $this->db->query("SELECT * FROM tb_prestasi where id_mentor ='$idp' ");
                                            echo $jumlah->num_rows();
                                            }else{
                                                $jumlah = $this->db->query("SELECT * FROM tb_prestasi ");
                                                echo $jumlah->num_rows();  
                                            }                                              
                                        ?>
                                        </div>
                                        <div>Top Prestasi</div>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url();?>adminmentor/prestasi ">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php 
                                            $nama = $this->session->userdata('nama');
                                            if($nama == true){
                                            $idx = $this->db->query("SELECT id FROM tb_course WHERE nama = '$nama'");
                                            $idp= $idx->row()->id;
                                            $jumlah = $this->db->query("SELECT * FROM tb_galeri where id_mentor ='$idp' ");
                                            echo $jumlah->num_rows();
                                            }else{
                                                $jumlah = $this->db->query("SELECT * FROM tb_galeri ");
                                                echo $jumlah->num_rows();  
                                            }                                              
                                        ?>
                                        </div>
                                         <div>Top Foto</div>
                                    </div>
                                </div>
                            </div>
                              <a href="<?php echo base_url();?>adminmentor/galeri ">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php 
                                            $jumlah = $this->db->query("SELECT * FROM tb_course ");
                                            echo $jumlah->num_rows();
                                            ?>
                                        </div>
                                        <div>Total Mentor</div>
                                    </div>
                                </div>
                            </div>
                              <a href="<?php echo base_url();?>courses" target="_blank">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>