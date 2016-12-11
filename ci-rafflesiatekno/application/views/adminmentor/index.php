<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administrator</title>
    <!-- Bootstrap Core CSS -->
   <link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
   <link href="<?php echo base_url();?>asset/css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
   <link href="<?php echo base_url();?>asset/css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- jQuery -->
    <script src="<?php echo base_url();?>asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
     <script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>asset/js/plugins/morris/raphael.min.js"></script>
     <script src="<?php echo base_url();?>asset/js/plugins/morris/morris.min.js"></script>
     <script src="<?php echo base_url();?>asset/js/plugins/morris/morris-data.js"></script>
	<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>asset/js/jquery.dataTables.min.css"></style>
	<script type="text/javascript" src="<?php echo base_url();?>asset/js/jquery.dataTables.min.js"></script>
    <link rel="icon" type="image/png" href="<?php echo base_url();?>asset/home/images/iconweb1.jpg">
</head>

<body style="background-color:#ffffff">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand " href="<?php echo base_url();?>adminmentor" style="background-color:rgb(9, 18, 115); width:225px; color:#ffffff;">DASHBOARD</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav" style="background-color:rgb(19, 16, 47);">
			<li>
                <a href="<?php echo base_url();?>courses" target="_blank"><i class="fa fa-refresh"></i></a>
            </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url();?>adminmentor/users"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>loginmentor/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <?php $nama = $this->session->userdata('nama');
                        if($nama==true){ ?>
					<li>
                        <a href="<?php echo base_url();?>adminmentor/users" style="font-size:20px;"><i class="fa fa-user"></i> Profil</a>
                    </li>
                    <?php } ?>
                    <?php $nama = $this->session->userdata('username');
                        if($nama==true){ ?>
                    <li>
                        <a href="<?php echo base_url();?>adminmentor/datausers" style="font-size:20px;"><i class="fa fa-user"></i> Profil</a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="<?php echo base_url();?>adminmentor/organisasi" style="font-size:20px;"><i class="fa fa-cubes"></i> Kegiatan</a>
                    </li>
					<li>
                        <a href="<?php echo base_url();?>adminmentor/prestasi" style="font-size:20px;"><i class="fa fa-star"></i> Prestasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>adminmentor/galeri" style="font-size:20px;"><i class="fa fa-picture-o"></i> Galeri</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
				<?php $this->load->view($page)?>
                <!-- Page Heading -->
                
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
	
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
<div>

</body>

</html>
