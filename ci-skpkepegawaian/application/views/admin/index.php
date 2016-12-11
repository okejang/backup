<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
   
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
       <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.css">
    <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

    <script src="<?php echo base_url();?>assets/sweetalert.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/sweetalert.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <!-- Menampilkan Kalender Otomatis-->
    <link href="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/timepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/plugins/timepicker/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>  
   <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
     <?php 
          $nip = $this->session->userdata('nip');
          $username = $this->session->userdata('username');
          if($nip>0){
            $data = $this->db->query("SELECT * FROM tb_datapegawai where nip = '$nip' ");
          }else{
          $data = $this->db->query("SELECT * FROM tb_users where username = '$username' ");
        }
     ?>
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url();?>dashboard" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Dashboard</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-gears"></i>
                </a>

                <ul class="dropdown-menu">
                  <!-- User image -->
                 
                  <li class="user-header">
                     <?php
                       $nip = $this->session->userdata('nip');
                       $username = $this->session->userdata('username');
                       if($nip>0){ 
                    $data = $this->db->query("SELECT * FROM tb_datapegawai where nip = '$nip' ");?>
                    <img src="http://localhost:85/ci-skpkepegawaian/assets/dist/img/pegawai/<?php echo $data->row()->foto;?>" class="img-circle" alt="User Image">
                    <?php echo "<p>".$data->row()->nama." (".$data->row()->nip.")";
                    echo "<small>".$data->row()->unitkerja."</small>".
                    "</p>";
                      }else{
                     $datax = $this->db->query("SELECT * FROM tb_users where username = '$username' "); ?>
                    <?php echo "<p>Selamat Datang </p><p>".$datax->row()->username;
                    echo "<p>Anda Bertindak sebagai<br/>"."- ".$data->row()->level." -</p>";
                    }?>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url();?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
             <?php
                $nip = $this->session->userdata('nip');
                $username = $this->session->userdata('username');
                if($nip>0){ 
                $data = $this->db->query("SELECT * FROM tb_datapegawai where nip = '$nip' ");?>
            <div class="pull-left image">
              <?php if($this->session->userdata('level')=="superadmin"){ ?>
              <img src="<?php echo base_url();?>assets/dist/img/pegawai/avatar21.jpg;?>" class="img-circle" alt="User Image">
              <?php } else {?>
              <img src="<?php echo base_url();?>assets/dist/img/pegawai/<?php echo $data->row()->foto;?>" class="img-circle" alt="User Image">
            <?php } ?>
            </div>
            <div class="pull-left info">
              <p> <?php echo $data->row()->nip; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
                <?php }else{
                $datax = $this->db->query("SELECT * FROM tb_users where username = '$username' "); ?>
             <div class="pull-left image">
              <img src="<?php echo base_url();?>assets/dist/img/pegawai/avatar2.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p> <?php echo $datax->row()->username; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
              <?php } ?>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
             <?php if($this->session->userdata('level')=="superadmin"){ ?>
             <li>
              <a href="<?php echo base_url();?>dashboard/datapegawai">
                <i class="fa fa-users"></i> <span>Pegawai</span> </a>
            </li>
            <?php } ?>
			      <?php $nip = $this->session->userdata('nip'); if($nip>0){ ?>
            <li class="treeview">
				<a href="#">
					<i class="fa fa-pie-chart "></i> 
					<span>Kontrak Kerja Pegawai</span> 
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url();?>dashboard/kontrakkerja"><i class="fa fa-circle-o"></i> Kontrak Kerja Utama</a></li>
					<li><a href="<?php echo base_url();?>dashboard/kontrakkerjatambahan"><i class="fa fa-circle-o"></i> Kontrak Kerja Tambahan</a></li>
				</ul>
            </li>
			      <?php } ?>
            <li>
              <a href="<?php echo base_url();?>dashboard/dataharian">
                <i class="fa fa-files-o"></i> <span>Laporan Harian</span> </a>
            </li>
            <?php $nip = $this->session->userdata('nip'); if($nip>0){ ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Sasaran Kerja</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_URL(); ?>index.php/dashboard/cetak/printsasarankerja" target="_blank" ><i class="fa fa-circle-o"></i> Data Sasaran Kerja</a></li>
   			    <li><a href="<?php echo base_URL(); ?>index.php/dashboard/pengukurancapaian"><i class="fa fa-circle-o"></i> Pengukuran Capaian</a></li>
                <li><a href="<?php echo base_url();?>index.php/dashboard/cetak/printprilakukerja" target="_blank" ><i class="fa fa-circle-o"></i> Catatan Prilaku</a></li>
                <li><a href="<?php echo base_url();?>index.php/dashboard/cetak/printprestasikerja" target="_blank" ><i class="fa fa-circle-o"></i> Penilaian Prestasi Kerja</a></li>
                <li><a href="<?php echo base_url();?>index.php/dashboard/cetak/printcover" target="_blank" ><i class="fa fa-circle-o"></i> Cover</a></li>
              </ul>
            </li>
             <li>
              <a href="<?php echo base_url();?>dashboard/komentar">
                <i class="fa fa-files-o"></i> <span>Komentar</span> </a>
            </li>
            <?php } ?>
              <?php if($this->session->userdata('level')=="atasan"){ ?>
             <li>
              <a href="<?php echo base_url();?>dashboard/datapegawaiatas">
                <i class="fa fa-files-o"></i> <span>Data Bawahan</span> </a>
            </li>
            <li>
              <a href="<?php echo base_url();?>dashboard/datapegawai">
                <i class="fa fa-files-o"></i> <span>Penilaian</span> </a>
            </li>
            <?php } ?>
            <?php if($this->session->userdata('level')=="superadmin"){ ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Pengaturan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url();?>dashboard/admin"><i class="fa fa-circle-o"></i> Manajemen User</a></li>
                <li><a href="<?php echo base_url();?>dashboard/manajemenberita"><i class="fa fa-circle-o"></i> Manajemen Berita</a></li>
              </ul>
            </li>
            <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>SICAKEP</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url()?>" target="_blank"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url()?>dashboard">Dashboard</a></li>
          </ol>
        </section>

        <?php $this->load->view($page)?>

      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2016 </strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
     </body>
</html>
