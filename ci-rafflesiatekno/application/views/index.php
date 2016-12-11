<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" type="image/png" href="<?php echo base_url();?>asset/home/images/logoweb1.jpg">">
    <title>Login</title>

    <!-- Bootstrap -->
	<link href="<?php echo base_url();?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
 	<link href="<?php echo base_url();?>asset/css/sb-admin.css" rel="stylesheet">
</head>
<body>
<p><br/><br/><br/><br/></p>
 <div id="login">
      <div class="row">  
  <div class="col-md-12">
       <div class="panel panel-default">
       <div class="panel-body">
          <div class="page-hd">
         <h3>Login Administrator</h3>
      </div>
      <form action="<?php echo base_url()."adminsi/ceklogin"?>" method="post" accept-charset="utf-8" role="form">
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="username" placeholder="Enter username" required />
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           <input type="password" class="form-control" name="password" placeholder="Password" required />
        </div>
         </div>
         <hr/>
         <a href="<?php echo base_url()?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-home"></span> View</button></a>
         <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Login</button>
         <p>
		</p>
      </form>
       </div>
    </div> 
     </div>
  </div>
</div>
</body>
</html>