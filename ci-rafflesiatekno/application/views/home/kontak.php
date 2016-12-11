	<div class="content">
		<div class="contact about-desc">
			<h3>Kontak Rafflesia Tekno</h3>
   		<div class="container">
   			<div class="row">
   				<div class="col-md-8 contact_left">
   					<?php foreach ($profil as $row) { ?>
					<h4><?php echo $row['nama']; ?></h4>
					<p class="m_6"><?php echo $row['keterangan']; ?></p>
					<?php } ?>
				<div class="contact_grid contact_address">
					<?php foreach ($kontak as $row){ ?>
						<h5>Alamat Lengkap Rafflesia Tekno</h5>	
						<p>Alamat : <?php echo $row['alamat']?></p>
						<p>Phone : <?php echo $row['phone']?></p>
						<p>Email : <a href="malito:mail@demolink.org"><?php echo $row['email']?></a></p>
						<p>Website : <a href="http://www.rafflesiatekno.com"><?php echo $row['website']?></a></p>
					<?php } ?>
					</div>
   				</div>
   				<div class="col-md-4">
   					<div class="contact_right">
   				<div class="contact-form_grid">
				   <form method="post" action="<?php echo base_URL()?>home/komentar">
					 <input type="text" class="textbox" name="nama" value="Your name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your name';}">
					 <input type="text" class="textbox" name="email" value="Your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email';}">
					 <input type="text" class="textbox" name="subjek" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
					 <textarea value="Message:" name="pesan" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
					 <input type="submit" value="Send">
				   </form>
			      </div>
   			     </div>
   				</div>
   			</div>
   		</div>
   	</div>  	
   </div>
</div>