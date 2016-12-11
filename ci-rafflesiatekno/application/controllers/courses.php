<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Courses extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('m_dashboard');
			$this->load->helper('url');
			$this->load->helper('text');
		}

		public function index(){
			$total_rows	= $this->db->get('tb_course')->num_rows();
			$config['base_url'] 	= base_URL().'courses/index/p/';
			$config['total_rows'] 	= $total_rows;
			$config['uri_segment'] 	= 4;
			$config['per_page'] 	= 6; 
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close']= '</li>';
			$config['prev_link'] 	= '&lt;';
			$config['prev_tag_open']='<li>';
			$config['prev_tag_close']='</li>';
			$config['next_link'] 	= '&gt;';
			$config['next_tag_open']='<li>';
			$config['next_tag_close']='</li>';
			$config['cur_tag_open']='<li class="active disabled"><a href="#"  style="background: #e3e3e3">';
			$config['cur_tag_close']='</a></li>';
			$config['first_tag_open']='<li>';
			$config['first_tag_close']='</li>';
			$config['last_tag_open']='<li>';
			$config['last_tag_close']='</li>';
			$this->pagination->initialize($config); 		
			
			$awal	= $this->uri->segment(4); 
			if (empty($awal) || $awal == 1) { $awal = 0; } { $awal = $awal; }
			$akhir	= $config['per_page'];
			
			$data['halaman']	= $this->pagination->create_links();

			$q 		= addslashes($this->input->post('q'));

			if ($this->uri->segment(3) == "cari") {
				$data['mentor']	= $this->db->query("SELECT * FROM tb_course WHERE nama LIKE '%$q%' OR alamat LIKE '%$q%' ")->result_array();
				$data['page'] = "home/rteknocourse";
				$this->load->view('home/index',$data);
			} 
			else{
			$data['mentor'] = $this->db->query("SELECT * FROM tb_course order by id desc LIMIT $awal, $akhir")->result_array();
			$data['page'] = "home/rteknocourse";
			$this->load->view('home/index',$data);
			}
		}
		public function profil(){
			$id = $this->uri->segment(3);
			$data['mentor'] = $this->db->query("SELECT * FROM tb_course where id = '$id' ")->result_array();
			$data['organisasi'] = $this->db->query("SELECT * FROM tb_organisasi where id_mentor = '$id' ")->result_array();
			$data['galeri'] = $this->db->query("SELECT * FROM tb_galeri where id_mentor = '$id'  AND prioritas = ' ' limit 4")->result_array();
			$data['galerix'] = $this->db->query("SELECT * FROM tb_galeri where id_mentor = '$id' AND prioritas = 'ya' ")->result_array();
			$data['prestasi'] = $this->db->query("SELECT * FROM tb_prestasi where id_mentor = '$id' ")->result_array();
			$this->load->view('home/profil_mentor',$data);
		}

		public function daftar(){
		$this->load->view('home/daftar');
		}

		public function daftarmentor(){
			$config['upload_path'] = './asset/home/images/mentor';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '1000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				if(empty($this->upload->file_name)){
				$foto = 'notavailable.png';
				$datax['nama'] = addslashes($this->input->post('nama'));
				$datax['password'] = md5($this->input->post('password'));
				$datax['bidang'] = addslashes($this->input->post('bidang'));
				$datax['nohp'] = addslashes($this->input->post('nohp'));
				$datax['alamat'] = addslashes($this->input->post('alamat'));
				$datax['sasaran'] = addslashes($this->input->post('sasaran'));
				$datax['biodata'] = addslashes($this->input->post('biodata'));
				$datax['foto'] = $foto;
				$this->m_dashboard->insertcourse($datax);
				redirect('courses');
				}else{
				$foto = $this->upload->file_name;
				$datax['nama'] = addslashes($this->input->post('nama'));
				$datax['password'] = md5($this->input->post('password'));
				$datax['bidang'] = addslashes($this->input->post('bidang'));
				$datax['nohp'] = addslashes($this->input->post('nohp'));
				$datax['alamat'] = addslashes($this->input->post('alamat'));
				$datax['sasaran'] = addslashes($this->input->post('sasaran'));
				$datax['biodata'] = addslashes($this->input->post('biodata'));
				$datax['foto'] = $foto;
				$this->m_dashboard->insertcourse($datax);
				redirect('courses');
			}
		}

	}
?>