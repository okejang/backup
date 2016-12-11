<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Adminmentor extends CI_Controller{
		 function __construct(){
			parent::__construct();
			session_start();
			$this->load->model('m_dashboard');
			$this->load->helper(array('url','form'));
			$this->load->library(array('form_validation','session'));
		}
		public function index(){					
		if(!isset($_SESSION['login'])){
			redirect('loginmentor');
	    }else{
			$data['page'] = "adminmentor/dashboard";
			$this->load->view('adminmentor/index',$data);
		}
	}

	public function users(){					
		if(!isset($_SESSION['login'])){
			redirect('loginmentor');
	    }else{
	    	$link = $this->uri->segment(3);
	    	if($link == "datamentor"){
				$config['upload_path'] = './asset/home/images/mentor';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '1000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				$foto = $this->upload->file_name;
				$filefoto = $this->m_dashboard->getidcourse($_POST['id']);
				if ($foto == ""){
						$icon = $filefoto['foto'];
				}
				else {
					$delfoto = "./asset/home/images/mentor/".$filefoto['foto'];
					unlink($delfoto);
					$icon = $foto;
				}
				$datax['nama'] = addslashes($this->input->post('nama'));
				$nama = $this->session->userdata('nama');
				$pass = $this->input->post('password');
				$idx = $this->db->query("SELECT password FROM tb_course WHERE nama ='$nama'");
		 		$password= $idx->row()->password;
				if($password == $pass){}
				else{
				$datax['password'] = addslashes(md5($this->input->post('password')));
				}
				$datax['bidang'] = addslashes($this->input->post('bidang'));
				$datax['nohp'] = addslashes($this->input->post('nohp'));
				$datax['alamat'] = addslashes($this->input->post('alamat'));
				$datax['sasaran'] = addslashes($this->input->post('sasaran'));
				$datax['biodata'] = addslashes($this->input->post('biodata'));
					$datax['foto'] = $icon;
					$res = $this->m_dashboard->editcourse($datax,$_POST['id']);
						if($res>0){
							redirect('adminmentor/users');
							}
					}else{
					echo "ERROR 404";
				}
			}
			$nama = $this->session->userdata('nama');
			$data['page'] = "adminmentor/users";
			$data['profil'] = $this->db->query("SELECT * FROM tb_course WHERE nama ='$nama' ")->row_array();
			$this->load->view('adminmentor/index',$data);
		}
	public function datausers(){
		if(!isset($_SESSION['login'])){
			redirect('adminmentor');
	    }else{
			$data['users'] = $this->db->query("SELECT * FROM tb_course")->result_array();	
			}
		$data['page'] = "adminmentor/datausers";
		$link = $this->uri->segment(3);
	    $id = $this->uri->segment(4);

		if($link =="updateusers"){
			$data['profil'] = $this->m_dashboard->getidcourse($id);
			$data['page'] = "adminmentor/users";
		}
		else if ($link =="setupdate"){
			$config['upload_path'] = './asset/home/images/mentor';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']	= '1000';
			$config['$file_name'] = url_title($this->input->post('file_upload'));
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			$foto = $this->upload->file_name;
			$filefoto = $this->m_dashboard->getidcourse($_POST['id']);
			if ($foto == ""){
					$icon = $filefoto['foto'];
			}
			else {
				$delfoto = "./asset/home/images/mentor/".$filefoto['foto'];
				unlink($delfoto);
				$icon = $foto;
			}
			$idm = $_POST['id'];
			$pass = $this->input->post('password');
			$idx = $this->db->query("SELECT password FROM tb_course WHERE id ='$idm'");
	 		$password= $idx->row()->password;
			if($password == $pass){}
			else{
			$datax['password'] = addslashes(md5($this->input->post('password')));
			}
			$datax['bidang'] = addslashes($this->input->post('bidang'));
			$datax['nohp'] = addslashes($this->input->post('nohp'));
			$datax['alamat'] = addslashes($this->input->post('alamat'));
			$datax['sasaran'] = addslashes($this->input->post('sasaran'));
			$datax['biodata'] = addslashes($this->input->post('biodata'));
				$datax['foto'] = $icon;
				$res = $this->m_dashboard->editcourse($datax,$_POST['id']);
					if($res>0){
						redirect('adminmentor/datausers');
						}else{
				echo "ERROR 404";
			}
		}
		else if($link =="deleteusers"){
			$filefoto = $this->m_dashboard->idgaleri($id);
			$delfoto = "./asset/home/images/mentor/".$filefoto['foto'];
			unlink($delfoto);
			$this->m_dashboard->deletecourse($id);
			redirect('adminmentor/datausers');
		}

		$this->load->view('adminmentor/index',$data);
		}

	public function galeri(){
		if(!isset($_SESSION['login'])){
			redirect('adminmentor');
	    }else{
	    $nama = $this->session->userdata('nama');
			if($nama==true){
				$idx = $this->db->query("SELECT id FROM tb_course WHERE nama = '$nama'");
		 		$idp= $idx->row()->id;
			 	$data['galeri'] = $this->db->query("SELECT * FROM tb_galeri where id_mentor = '$idp' limit 7")->result_array();
			}else{
				$data['galeri'] = $this->db->query("SELECT * FROM tb_galeri")->result_array();	
			}
		$data['page'] = "adminmentor/galeri";
		  $link = $this->uri->segment(3);
	    $id = $this->uri->segment(4);

		$nama = addslashes($this->input->post('nama'));
		$lokasi = addslashes($this->input->post('lokasi'));
		$tingkatan = addslashes($this->input->post('tingkatan'));
		$prioritas = addslashes($this->input->post('prioritas'));
		$id_mentor = addslashes($this->input->post('id_mentor'));

		if ($link =="insertgaleri"){
			$data['page'] = "adminmentor/galeri_insert";
		}
		else if ($link =="setinsertgaleri"){ 
				$config['upload_path'] = './asset/home/images/mentor/galeri';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '1000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				if(empty($this->upload->file_name)){
				$foto = 'notavailable.png';
				$datax['nama'] = $nama;
				$datax['lokasi'] = $lokasi;
				$datax['tingkatan'] = $tingkatan;
				$datax['prioritas'] = $prioritas;
				$datax['id_mentor'] = $idp;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->insertgaleri($datax);
					if($res>0){
						redirect('adminmentor/galeri');
					}else{
					echo "ERROR 404";
				}
				}else{
				$foto = $this->upload->file_name;
				$datax['nama'] = $nama;
				$datax['lokasi'] = $lokasi;
				$datax['tingkatan'] = $tingkatan;
				$datax['prioritas'] = $prioritas;
				$datax['id_mentor'] = $idp;
				$datax['foto'] = $foto;
				$res = $this->m_dashboard->insertgaleri($datax);
					if($res>0){
						redirect('adminmentor/galeri');
					}else{
					echo "ERROR 404";
				}
			}
		}
		else if($link =="updategaleri"){
			$data['galeri'] = $this->m_dashboard->idgaleri($id);
			$data['page'] = "adminmentor/galeri_insert";
		}
		else if ($link =="setupdate"){
			$config['upload_path'] = './asset/home/images/mentor/galeri';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']	= '2000';
			$config['$file_name'] = url_title($this->input->post('file_upload'));
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			$foto = $this->upload->file_name;
			$filefoto = $this->m_dashboard->idgaleri($_POST['id']);
			if ($foto == ""){
					$icon = $filefoto['foto'];
			}
			else {
				$delfoto = "./asset/home/images/mentor/galeri/".$filefoto['foto'];
				unlink($delfoto);
				$icon = $foto;
			}
				$datax['nama'] = $nama;
				$datax['lokasi'] = $lokasi;
				$datax['tingkatan'] = $tingkatan;
				$datax['prioritas'] = $prioritas;
				$datax['id_mentor'] = $id_mentor;
				$datax['foto'] = $icon;
				$res = $this->m_dashboard->updategaleri($datax,$_POST['id']);
					if($res>0){
					redirect('adminmentor/galeri');
				}else{
				echo "ERROR 404";
			}
		}
		else if($link =="deletegaleri"){
			$filefoto = $this->m_dashboard->idgaleri($id);
			$delfoto = "./asset/home/images/mentor/galeri/".$filefoto['foto'];
			unlink($delfoto);
			$this->m_dashboard->deletegaleri($id);
			redirect('adminmentor/galeri');
		}

		$this->load->view('adminmentor/index',$data);
		}
	}

	public function organisasi(){
	if(!isset($_SESSION['login'])){
			redirect('adminmentor');
	    }else{
	    $nama = $this->session->userdata('nama');
		if($nama==true){
		$idx = $this->db->query("SELECT id FROM tb_course WHERE nama = '$nama'");
		$idp= $idx->row()->id;
		 $data['organisasi'] = $this->db->query("SELECT * FROM tb_organisasi where id_mentor = '$idp' order by periode desc limit 10")->result_array();
		}else{
			 $data['organisasi'] = $this->db->query("SELECT * FROM tb_organisasi order by id_mentor asc")->result_array();	
		}
	    $link = $this->uri->segment(3);
	    $id = $this->uri->segment(4);
	   	$data['page'] = "adminmentor/organisasi";

		$kegiatan = addslashes($this->input->post('kegiatan'));
		$periode = $this->input->post('periode');
		$id_mentor= addslashes($this->input->post('id_mentor'));

		if ($link =="insertorganisasi"){
			$data['page'] = "adminmentor/organisasi_insert";
		}
		else if ($link =="setinsertorganisasi"){ 
			$datax['kegiatan'] = $kegiatan;
			$datax['periode'] = $periode;
			$datax['id_mentor'] = $idp;
			$res = $this->m_dashboard->insertorganisasi($datax);
			if($res>0){
				redirect('adminmentor/organisasi');
			}else{
				echo "ERROR 404";
			}
		}
		else if($link =="updateorganisasi"){
			$data['organisasi'] = $this->m_dashboard->idorganisasi($id);
			$data['page'] = "adminmentor/organisasi_insert";
		}
		else if ($link =="setupdate"){
			$datax['kegiatan'] = $kegiatan;
			$datax['periode'] = $periode;
			$datax['id_mentor'] = $id_mentor;
			$res = $this->m_dashboard->updateorganisasi($datax,$_POST['id']);
				if($res>0){
				redirect('adminmentor/organisasi');
			}else{
			echo "ERROR 404";
			}
		}
		else if($link =="deleteorganisasi"){
			$this->m_dashboard->deleteorganisasi($id);
			redirect('adminmentor/organisasi');
		}

		$this->load->view('adminmentor/index',$data);
		}
	}

		public function prestasi(){
		if(!isset($_SESSION['login'])){
			redirect('adminmentor');
	    }else{
	    $nama = $this->session->userdata('nama');
		if($nama==true){
		$idx = $this->db->query("SELECT id FROM tb_course WHERE nama = '$nama'");
		$idp= $idx->row()->id;
		 $data['prestasi'] = $this->db->query("SELECT * FROM tb_prestasi where id_mentor = '$idp' order by tahun desc limit 10")->result_array();
		}else{
			 $data['prestasi'] = $this->db->query("SELECT * FROM tb_prestasi order by id_mentor asc")->result_array();	
		}

	    $link = $this->uri->segment(3);
	    $id = $this->uri->segment(4);
		$data['page'] = "adminmentor/prestasi";

		$kegiatan = addslashes($this->input->post('kegiatan'));
		$tahun = $this->input->post('tahun');
		$id_mentor = addslashes($this->input->post('id_mentor'));

		if ($link =="insertprestasi"){
			$data['page'] = "adminmentor/prestasi_insert";
		}
		else if ($link =="setinsertprestasi"){ 
			$datax['kegiatan'] = $kegiatan;
			$datax['tahun'] = $tahun;
			$datax['id_mentor'] = $idp;
			$res = $this->m_dashboard->insertprestasi($datax);
			if($res>0){
				redirect('adminmentor/prestasi');
			}else{
				echo "ERROR 404";
			}
		}
		else if($link =="updateprestasi"){
			$data['prestasi'] = $this->m_dashboard->idprestasi($id);
			$data['page'] = "adminmentor/prestasi_insert";
		}
		else if ($link =="setupdate"){
			$datax['kegiatan'] = $kegiatan;
			$datax['tahun'] = $tahun;
			$datax['id_mentor'] = $id_mentor;
			$res = $this->m_dashboard->updateprestasi($datax,$_POST['id']);
				if($res>0){
				redirect('adminmentor/prestasi');
			}else{
			echo "ERROR 404";
			}
		}
		else if($link =="deleteprestasi"){
			$this->m_dashboard->deleteprestasi($id);
			redirect('adminmentor/prestasi');
		}

		$this->load->view('adminmentor/index',$data);
		}
	}
}

?>