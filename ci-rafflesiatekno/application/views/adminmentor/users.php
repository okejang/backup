<div class="row">
    <div class="col-lg-12">
 <div class="col-md-4">
    <?php extract($profil)?>
    <img src="<?php echo base_url();?>asset/home/images/mentor/<?php echo $foto?>" width="350px" height="300px" style="" class="img-responsive">
</div>
 <div class="col-md-8">
    <?php $namax = $this->session->userdata('nama'); 
    if ($namax == true){?>
     <form action="<?php echo base_url()."adminmentor/users/datamentor"?>" method="post" enctype="multipart/form-data" accept-charset="utf-8" role="form">
      <?php }else{?>  
      <form action="<?php echo base_url()."adminmentor/datausers/setupdate"?>" method="post" enctype="multipart/form-data" accept-charset="utf-8" role="form">
      <?php } ?>
         <input type="hidden" class="form-control" type="text" name="id" value="<?php echo $id ?>">
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="nama" placeholder="Enter username" required value="<?php echo $nama?>"/>
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           <input type="password" class="form-control" name="password" placeholder="Password" required value="<?php echo $password?>"/>
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="bidang" placeholder="Bidang Pengajaran" required value="<?php echo $bidang?>"/>
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="sasaran" placeholder="Sasaran Murid" required value="<?php echo $sasaran?>"/>
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="text" class="form-control" name="nohp" placeholder="No Handphone" required value="<?php echo $nohp?>"/>
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <textarea type="text" class="form-control" name="alamat" 
           placeholder="Misalnya Jalan Adius 08 RT07 RW02 No.48 Kel. Padang Nangka Bengkulu" required /><?php echo $alamat?></textarea>
        </div>
         </div>
          <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <textarea type="text" class="form-control" name="biodata" 
           placeholder="Isikan Biodata Ringkas Maksimal 400 Kata" required rows="4"/><?php echo $biodata?></textarea>
        </div>
         </div>
         <div class="form-group">
            <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           <input type="file" name="userfile"></div>
         </div>
         <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Perbaharui</button></a>
         <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Batal</button>
         <p>
        </p>
      </form>
</div>
</div>
</div>
<div id="break" style="height:35px">
</div>