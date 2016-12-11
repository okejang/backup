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
    <link rel="icon" type="image/png" href="<?php echo base_url();?>asset/home/images/iconweb1.jpg">">
</head>

<body>

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
                <a class="navbar-brand " href="<?php echo base_url();?>dashboard" style="background-color:rgb(9, 18, 115); width:225px; color:#ffffff;">DASHBOARD</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav" style="background-color:rgb(19, 16, 47);">
						<li>
                            <a href="<?php echo base_url();?>" target="_blank"><i class="fa fa-refresh"></i></a>
                        </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>adminsi/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#1" style="font-size:20px;">
						<i class="fa fa-archive"></i> Blog <i class="fa fa-carret"></i></a>
                        <ul id="1" class="collapse">
                            <li>
                                <a href="#">Posting Blog</a>
                            </li>
                            <li>
                                <a href="#">Sidebar</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#2" style="font-size:20px;">
						<i class="fa fa-indent"></i> Halaman Statis <i class="fa fa-carret"></i></a>
                        <ul id="2" class="collapse">
                            <li>
                                <a href="#">Profil</a>
                            </li>
                            <li>
                                <a href="#">Kontak</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#3" style="font-size:20px;">
                        <i class="fa fa-file-text-o"></i> Layanan <i class="fa fa-carret"></i></a>
                        <ul id="3" class="collapse">
                            <li><a href="<?php echo base_url();?>dashboard/layanan">Layanan Utama</a></li>
                            <li><a href="<?php echo base_url();?>dashboard/rtcourse">RT Course</a></li>
                            <li><a href="<?php echo base_url();?>dashboard/rtwebsite">RT Website</a></li>
                            <li><a href="<?php echo base_url();?>dashboard/rtservice">RT Service</a></li>
                        </ul>
                    </li>
					<li>
                        <a href="<?php echo base_url();?>dashboard/users" style="font-size:20px;"><i class="fa fa-user"></i> Users</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>dashboard/rtkomentar" style="font-size:20px;"><i class="fa fa-comments"></i> Komentar</a>
                    </li>
					<li>
                        <a href="<?php echo base_url();?>dashboard/options" style="font-size:20px;"><i class="fa fa-cog"></i> Options</a>
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
				<div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">&copy 2015 Depeloved by Rafflesia Tekno</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
	
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->


</body>

</html>
