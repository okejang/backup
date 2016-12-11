 <html>
 <head>
  <title>Daftar</title>
 <link href="<?php echo base_url();?>asset/css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- jQuery -->
    <script src="<?php echo base_url();?>asset/js/jquery.js"></script>
</head>
<body style="background-color:#ffffff;">
  <div class="container" style="margin-top:10px;">
        <div class="row">
 <div class="col-md-6" style="margin:auto; float:none; background-color:blue; padding:15px;">
     <form action="<?php echo base_url()."courses/daftarmentor"?>" method="post" enctype="multipart/form-data" accept-charset="utf-8" role="form">
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap (Sekaligus Menjadi Username Login)" required />
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           <input type="password" class="form-control" name="password" placeholder="Isikan Dengan Kombinasi Huruf dan Angka" required />
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-book"></span></span>
           <input type="text" class="form-control" name="bidang" placeholder="Isikan Dengan Bahasa Indonesia, Bahasa Inggis, IPA, MATEMATIKA, Mengaji" required />
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-th-large"></span></span>
           <input type="text" class="form-control" name="sasaran" placeholder="Isikan Dengan SD, SMP, SMA Atau Umum" required />
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
           <input type="text" class="form-control" name="nohp" placeholder="No Handphone" required />
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-road"></span></span>
           <textarea type="text" class="form-control" name="alamat" 
           placeholder="Misalnya Jalan Adius 08 RT07 RW02 No.48 Kel. Padang Nangka Bengkulu" required /></textarea>
        </div>
         </div>
          <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-modal-window"></span></span>
           <textarea type="text" class="form-control" name="biodata" 
           placeholder="Isikan Biodata Ringkas Maksimal 400 Kata" required rows="4"/></textarea>
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-picture"></span></span>
           <input type="file" name="userfile"></div>
         </div>
         <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Daftar</button></a>
         <a href="<?php echo base_url();?>courses/daftar"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Batal</button></a>
      </form>
</div>
</div>
</div>
</body>
</html>