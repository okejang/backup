<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Dashboard extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			$this->load->model('m_dashboard');
			$this->load->helper(array('url','form'));
			$this->load->library(array('form_validation','session'));
		}
		public function index(){					
		if(!isset($_SESSION['login'])){
			redirect('adminsi');
	    }else{
			$data['page'] = "adminsi/dashboard";
			$this->load->view('adminsi/index',$data);
		}
	}
	public function layanan(){					
		if(!isset($_SESSION['login'])){
			redirect('adminsi');
	    }else{
			$data['layanan'] = $this->db->query("SELECT * FROM tb_pelayanan")->result_array();
			$data['page'] = "adminsi/layanan";
			
			$link 	= $this->uri->segment(3);
			$id 	= $this->uri->segment(4);
			
			$nama 		= addslashes($this->input->post('nama'));
			$keterangan	= addslashes($this->input->post('keterangan'));
			$icon		= addslashes($this->input->post('icon'));
			
			if($link == "edit"){
				$data['data'] = $this->m_dashboard->getidlayanan($id);
				$data['page'] = "adminsi/layanan_edit";
			}
			else if($link == "setedit"){
				$config['upload_path'] = './asset/home/images/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$foto = $this->upload->file_name;
				$filefoto = $this->m_dashboard->getidlayanan($_POST['id']);
				if ($foto == ""){
						$icon = $filefoto['icon'];
				}
				else {
					$delfoto = "./asset/home/images/".$filefoto['icon'];
					unlink($delfoto);
					$icon = $foto;
				}
					$dt['nama'] = $nama;
					$dt['keterangan'] = $keterangan;
					$dt['icon'] = $icon;
					$res = $this->m_dashboard->updatelayanan($dt,$_POST['id']);
						if($res>0){
						$this->session->set_flashdata("x", "<br/><div class=\"alert alert-success\" style='margin-left:27; margin-right:27;'>Data Berhasil Di Perbaharui</div>");
						redirect('dashboard/layanan');
					}else{
					echo "ERROR 404";
				}
			}
		$this->load->view('adminsi/index',$data);
		}
	}
	
	public function options(){					
		if(!isset($_SESSION['login'])){
			redirect('adminsi');
	    }else{
			$data['pendukung'] = $this->db->query("SELECT * FROM tb_pendukung")->result_array();
			$data['testimoni'] = $this->db->query("SELECT * FROM tb_testimoni")->result_array();
			$data['page'] = "adminsi/options";
			
			$link 	= $this->uri->segment(3);
			$id 	= $this->uri->segment(4);
			
			$namap 		= addslashes($this->input->post('namap'));
			$namak 		= addslashes($this->input->post('namak'));
			$pekerjaan	= addslashes($this->input->post('pekerjaan'));
			$testemoni 	= addslashes($this->input->post('testemoni'));
			
			if($link == "insertpendukung"){
				$data['page'] = "adminsi/test_input";
			}
			else if($link == "setinputpendukung"){
				$config['upload_path'] = './asset/home/images/pendukung';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				if(empty($this->upload->file_name)){
				$foto = 'notavailable.png';
				$datax['nama'] = $namap;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->insertpendukung($datax);
					if($res>0){
						redirect('dashboard/options');
					}else{
					echo "ERROR 404";
				}
				}else{
				$foto = $this->upload->file_name;
				$datax['nama'] = $namap;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->insertpendukung($datax);
					if($res>0){
						redirect('dashboard/options');
					}else{
					echo "ERROR 404";
				}
			}
			}
			else if($link == "editpendukung"){
				$data['data'] = $this->m_dashboard->getidpendukung($id);
				$data['page'] = "adminsi/pendukung_input";
			}
			else if($link == "setpendukung"){
				$config['upload_path'] = './asset/home/images/pendukung';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$foto = $this->upload->file_name;
				$filefoto = $this->m_dashboard->getidpendukung($_POST['id']);
				if ($foto == ""){
						$icon = $filefoto['foto'];
				}
				else {
					$delfoto = "./asset/home/images/pendukung/".$filefoto['foto'];
					unlink($delfoto);
					$icon = $foto;
				}
					$dt['nama'] = $namap;
					$dt['foto'] = $icon;
					$res = $this->m_dashboard->updatependukung($dt,$_POST['id']);
						if($res>0){
						redirect('dashboard/options');
					}else{
					echo "ERROR 404";
				}
			}
			else if($link == "hapuspendukung"){
				$filefoto = $this->m_dashboard->getidpendukung($id);
				$delfoto = "./asset/home/images/pendukung/".$filefoto['foto'];
				unlink($delfoto);
				$this->m_dashboard->deletependukung($id);
				redirect('dashboard/options');
			}

			else if($link == "inserttestemoni"){
				$data['page'] = "adminsi/testemoni_input";
			}
			else if($link == "setinserttestemoni"){
				$config['upload_path'] = './asset/home/images/testimoni';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				if(empty($this->upload->file_name)){
				$foto = 'notavailable.png';
				$datax['nama'] = $namak;
				$datax['pekerjaan'] = $pekerjaan;
				$datax['testimoni'] = $testemoni;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->inserttestemoni($datax);
					if($res>0){
						redirect('dashboard/options');
					}else{
					echo "ERROR 404";
				}
				}else{
				$foto = $this->upload->file_name;
				$datax['nama'] = $namak;
				$datax['pekerjaan'] = $pekerjaan;
				$datax['testimoni'] = $testemoni;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->inserttestemoni($datax);
					if($res>0){
						redirect('dashboard/options');
					}else{
					echo "ERROR 404";
				}
			}
			}
			else if($link == "edittestemoni"){
				$data['data'] = $this->m_dashboard->getidtestemoni($id);
				$data['page'] = "adminsi/testemoni_input";
			}
			else if($link == "setedittestemoni"){
				$config['upload_path'] = './asset/home/images/testimoni';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$foto = $this->upload->file_name;
				$filefoto = $this->m_dashboard->getidtestemoni($_POST['id']);
				if ($foto == ""){
						$icon = $filefoto['foto'];
				}
				else {
					$delfoto = "./asset/home/images/testimoni/".$filefoto['foto'];
					unlink($delfoto);
					$icon = $foto;
				}
					$datax['nama'] = $namak;
					$datax['pekerjaan'] = $pekerjaan;
					$datax['testimoni'] = $testemoni;
					$datax['foto'] = $icon;
					$res = $this->m_dashboard->edittestemoni($datax,$_POST['id']);
						if($res>0){
						redirect('dashboard/options');
					}else{
					echo "ERROR 404";
				}
			}
			else if($link == "deletetestemoni"){
				$filefoto = $this->m_dashboard->deletetestemoni($id);
				$delfoto = "./asset/home/images/testimoni/".$filefoto['foto'];
				unlink($delfoto);
				$this->m_dashboard->deletetestemoni($id);
				redirect('dashboard/options');
			}

		}
		$this->load->view('adminsi/index',$data);
	}
	public function table(){	
		$data['page'] = "adminsi/table";
		$this->load->view('adminsi/index',$data);
	    }

	public function rtwebsite(){
			if(!isset($_SESSION['login'])){
			redirect('adminsi');
	    }else{
	    		$link 	= $this->uri->segment(3);
				$id 	= $this->uri->segment(4);

				$namap 		= addslashes($this->input->post('namap'));
				$namak 		= addslashes($this->input->post('namak'));
				$tipe 		= addslashes($this->input->post('tipe'));
				$ket 		= addslashes($this->input->post('keterangan'));

	    		$data['website'] = $this->db->query("SELECT * FROM tb_template order by id desc")->result_array();
				$data['page'] ="adminsi/rtwebsite";

			if($link == "insertrtwebsite"){
				$data['page'] = "adminsi/rtwebsite_input";
			}
			else if($link == "carirtwebsite"){
				$q = addslashes($this->input->post('cari'));
					$data['website'] = $this->db->query("SELECT * FROM tb_template WHERE nama LIKE '%$q%' OR tipe LIKE '%$q%' OR keterangan LIKE '%$q%' ")->result_array();
					$data['page'] ="adminsi/rtwebsite";
			}
			else if($link == "setinputtemplate"){
				$config['upload_path'] = './asset/home/images/template';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				if(empty($this->upload->file_name)){
				$foto = 'notavailable.png';
				$datax['nama'] = $namap;
				$datax['tipe'] = $tipe;
				$datax['keterangan'] = $ket;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->inserttemplate($datax);
					if($res>0){
						redirect('dashboard/rtwebsite');
					}else{
					echo "ERROR 404";
				}
				}else{
				$foto = $this->upload->file_name;
				$datax['nama'] = $namap;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->inserttemplate($datax);
					if($res>0){
						redirect('dashboard/options');
					}else{
					echo "ERROR 404";
				}
			}
			}
			else if($link == "edittemplate"){
				$data['data'] = $this->m_dashboard->getidtemplate($id);
				$data['page'] = "adminsi/rtwebsite_input";

			}
			else if($link == "settemplate"){
				$config['upload_path'] = './asset/home/images/template';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$foto = $this->upload->file_name;
				$filefoto = $this->m_dashboard->getidtemplate($_POST['id']);
				if ($foto == ""){
						$icon = $filefoto['foto'];
				}
				else {
					$delfoto = "./asset/home/images/template/".$filefoto['foto'];
					unlink($delfoto);
					$icon = $foto;
				}
					$dt['nama'] = $namap;
					$dt['foto'] = $icon;
					$res = $this->m_dashboard->updatetemplate($dt,$_POST['id']);
						if($res>0){
						redirect('dashboard/rtwebsite');
					}else{
					echo "ERROR 404";
				}
			}
			else if($link == "hapusrtwebsite"){
				$filefoto = $this->m_dashboard->getidtemplate($id);
				$delfoto = "./asset/home/images/template/".$filefoto['foto'];
				unlink($delfoto);
				$this->m_dashboard->deletetemplate($id);
				redirect('dashboard/rtwebsite');
			}
		}
		$this->load->view('adminsi/index',$data);
	}

	public function rtservice(){
		if(!isset($_SESSION['login'])){
			redirect('adminsi');
	    }else{
	    	$link = $this->uri->segment(3);
	    	$id = $this->uri->segment(4);

	    	$nama 	= addslashes($this->input->post('nama'));
	    	$keterangan = addslashes($this->input->post('keterangan'));

	    	$data['service'] = $this->db->query("SELECT * FROM tb_service")->result_array();
	    	$data['page'] = "adminsi/rtservice";

	    	if($link == "inputservice"){
	    		$data['page'] = "adminsi/rtservice_input";
	    	}
	    	else if($link == "setinputservice"){
	    		$config['upload_path'] = './asset/home/images/service';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				if(empty($this->upload->file_name)){
				$foto = 'notavailable.png';
				$datax['nama'] = $nama;
				$datax['keterangan'] = $keterangan;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->insertservice($datax);
					if($res>0){
						redirect('dashboard/rtservice');
					}else{
					echo "ERROR 404";
				}
				}else{
				$foto = $this->upload->file_name;
				$datax['nama'] = $nama;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->insertservice($datax);
					if($res>0){
						redirect('dashboard/options');
					}else{
					echo "ERROR 404";
				}
			}
			}
			else if($link == "editservice"){
				$data['data'] = $this->m_dashboard->getidservice($id);
				$data['page'] = "adminsi/rtservice_input";
			}
			else if($link == "setservice"){
				$config['upload_path'] = './asset/home/images/service';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$foto = $this->upload->file_name;
				$filefoto = $this->m_dashboard->getidservice($_POST['id']);
				if ($foto == ""){
						$icon = $filefoto['foto'];
				}
				else {
					$delfoto = "./asset/home/images/service/".$filefoto['foto'];
					unlink($delfoto);
					$icon = $foto;
				}
					$dt['nama'] = $nama;
					$dt['foto'] = $icon;
					$res = $this->m_dashboard->updateservice($dt,$_POST['id']);
						if($res>0){
						redirect('dashboard/rtservice');
					}else{
					echo "ERROR 404";
				}
			}
			else if($link == "hapusservice"){
				$this->m_dashboard->deleteservice($id);
				redirect('dashboard/rtservice');
			}
	    	$this->load->view('adminsi/index',$data);
	}
}
	public function rtcourse(){
		if(!isset($_SESSION['login'])){
			redirect('adminsi');
		}
		else{
		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$nama =  addslashes($this->input->post('nama'));
		$posisi =  addslashes($this->input->post('posisi'));
		$nohp =  addslashes($this->input->post('nohp'));
		$alamat =  addslashes($this->input->post('alamat'));
		$quote =  addslashes($this->input->post('quote'));

		$data['course'] = $this->db->query("SELECT* FROM tb_course")->result_array();
		$data['page'] = "adminsi/rtcourse";

		if($link =="insertcourse"){
			$data['page'] = "adminsi/rtcourse_input";
		}
		else if($link == "setinsertcourse"){
			$data['page'] = "adminsi/rtcourse_input";
			$config['upload_path'] = './asset/home/images/mentor';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				if(empty($this->upload->file_name)){
				$foto = 'notavailable.png';
				$datax['nama'] = $nama;
				$datax['posisi'] = $posisi;
				$datax['nohp'] = $nohp;
				$datax['alamat'] = $alamat;
				$datax['quote'] = $quote;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->insertcourse($datax);
					if($res>0){
						redirect('dashboard/rtcourse');
					}else{
					echo "ERROR 404";
				}
				}else{
				$foto = $this->upload->file_name;
				$datax['nama'] = $nama;
				$datax['posisi'] = $posisi;
				$datax['nohp'] = $nohp;
				$datax['alamat'] = $alamat;
				$datax['quote'] = $quote;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->insertcourse($datax);
					if($res>0){
						redirect('dashboard/rtcourse');
					}else{
					echo "ERROR 404";
				}
			}
		}
		else if($link == "editcourse"){
			$data['data'] = $this->m_dashboard->getidcourse($id);
			$data['page'] = "adminsi/rtcourse_input";
		}
		else if($link == "seteditcourse"){
			$config['upload_path'] = './asset/home/images/service';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$foto = $this->upload->file_name;
				$filefoto = $this->m_dashboard->getidcourse($_POST['id']);
				if ($foto == ""){
						$icon = $filefoto['foto'];
				}
				else {
					$delfoto = "./asset/home/images/service/".$filefoto['foto'];
					unlink($delfoto);
					$icon = $foto;
				}
					$dt['nama'] = $nama;
					$dt['posisi'] = $posisi;
					$dt['nohp'] = $nohp;
					$dt['alamat'] = $alamat;
					$dt['quote'] = $quote;
					$dt['foto'] = $icon;
					$res = $this->m_dashboard->editcourse($dt,$_POST['id']);
						if($res>0){
						redirect('dashboard/rtcourse');
					}else{
					echo "ERROR 404";
				}
		}
		else if($link == "deletecourse"){
			$this->m_dashboard->deletecourse($id);
			redirect('dashboard/rtcourse');
		}
		$this->load->view('adminsi/index',$data);
	}
}
	
	public function rtkontak(){
		if(!isset($_SESSION['login'])){
			redirect('adminsi');
		}
		else{
		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$alamat = $this->post->input('alamat');
		$phone 	= $this->post->input('phone');
		$email	= $this->post->input('email');
		$website = $this->post->input('website');

		$data = $this->db->query("SELECT * FROM tb_kontak")->result_array();
		$data['page'] = "adminsi/rtkontak";

		if($link == "inputkontak"){
			$data['page'] = "adminsi/rtkontak_input";
		}
		else if($link == "setinputkontak"){
			$datax['alamat'] = $alamat;
			$phone['phone'] = $phone;
			$email['email'] = $email;
			$website['website'] = $website;
			$res = $this->m_dashboard->insertkontak($datax);
				if($res>0){
					redirect('adminsi/rtkontak');
				}else{
					echo "ERROR 404";
				}
		}
		else if($link == "edikontak"){
			$data['kontak'] = $this->m_dashboard->getidkontak($id);
			$data['[page'] = "adminsi/rtkontak_input";
		}
		else if($link == "seteditkontak"){
			$datax['alamat'] = $alamat;
			$datax['phone'] = $phone;
			$datax['email'] = $email;
			$datax['website'] = $website;
			$res = $this->m_dashboard->editcourse($datax,$_POST['id']);
				if($res>0){
					redirect('adminsi/rtkontak');
				}else{
					echo "ERROR 404";  
				}
		}
		else if($link == "deletekontak"){
			$this->m_dashboard->deletekontak($id);
			redirect('adminsi/rtkontak');
		}

		$this->load->view('adminsi/index',$data);
	}
}
	public function rtkomentar(){
			if(!isset($_SESSION['login'])){
			redirect('adminsi');
		}
		else{
		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$alamat = $this->input->post('nama');
		$phone 	= $this->input->post('email');
		$email	= $this->input->post('subjek');
		$website = $this->input->post('komentar');

		$data['komentar'] = $this->db->query("SELECT * FROM tb_komentar")->result_array();
		$data['page'] = "adminsi/rtkomentar";

		if($link == "deletekomentar"){
			$this->m_dashboard->deletekomentar($id);
			redirect('dashboard/rtkomentar');
		}
		$this->load->view('adminsi/index',$data);
	}
}

	public function users(){
		if(!isset($_SESSION['login'])){
			redirect('adminsi');
		}
		else{
			$link = $this->uri->segment(3);
			$id = $this->uri->segment(4);

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$level = $this->input->post('level');

			$data['users'] = $this->db->query("SELECT * FROM tb_users")->result_array();
			$data['page'] = "adminsi/rtusers";

			if($link == "insertusers"){
				$data['page'] = "adminsi/rtusers_input";
			}
			else if($link =="setinputusers"){
				$datax['username'] = $username;
				$datax['password'] = md5($password);
				$datax['level'] = $level;
				$res = $this->m_dashboard->insertusers($datax);
				redirect('dashboard/users');
			}
			else if($link=="editusers"){
				$data['data'] = $this->m_dashboard->getidusers($id);
				$data['page'] ="adminsi/rtusers_input";
			}
			else if($link =="seteditusers"){
				$datax['username'] = $username;
				$datax['password'] = md5($password);
				$datax['level'] = $level;
				$res = $this->m_dashboard->editusers($datax,$_POST['id']);
				if($res>0){
					redirect('dashboard/users');
				}else{
					echo "ERROR 404";
				}
			}
			else if($link =="deleteusers"){
				$this->m_dashboard->deleteusers($id);
				redirect('dashboard/users');
			}

		$this->load->view('adminsi/index',$data);

		}
	}

}
?>