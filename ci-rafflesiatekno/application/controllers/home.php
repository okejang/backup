<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Home extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('m_home');
			$this->load->helper('url');
			$this->load->helper('text');
		}

		public function index(){
			$data['profil'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='1'")->result_array();
			$data['course'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='2'")->result_array();
			$data['website'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='3'")->result_array();
			$data['store'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='4'")->result_array();
			$data['install'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='5'")->result_array();
			$data['pendukung'] = $this->db->query("SELECT * FROM tb_pendukung ")->result_array();
			$data['testimoni'] = $this->db->query("SELECT * FROM tb_testimoni order by id desc Limit 4")->result_array();
			$data['page'] = "home/home";
			$this->load->view('home/index',$data);
		}
		public function layanan(){
			$data['profil'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='1'")->result_array();
			$data['course'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='2'")->result_array();
			$data['website'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='3'")->result_array();
			$data['store'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='4'")->result_array();
			$data['install'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='5'")->result_array();
			$data['pendukung'] = $this->db->query("SELECT * FROM tb_pendukung")->result_array();
			$data['page'] = "home/layanan";
			
			$link 	= $this->uri->segment(3);
			
			if($link == "rafflesia-tekno-course"){
				$data['mentor'] = $this->db->query("SELECT * FROM tb_course ")->result_array();
				$data['page'] = "home/rteknocourse";
			}
			else if($link == "rafflesia-tekno-website"){
				$data['mentor'] = $this->db->query("SELECT * FROM tb_template order by id desc")->result_array();
				$data['page'] = "home/rteknowebsite";
			}
			else if($link == "rafflesia-tekno-install"){
				$data['service'] = $this->db->query("SELECT * FROM tb_service")->result_array();
				$data['page'] = "home/rteknoinstall";
			}
			$this->load->view('home/index',$data);
		}
		public function portofolio(){
			$data['mentor'] = $this->db->query("SELECT * FROM tb_template order by id desc")->result_array();
			$data['page'] = "home/rteknowebsite";
			$this->load->view('home/index',$data);
		}
		public function kontak(){
			$data['profil'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='1'")->result_array();
			$data['kontak'] = $this->db->query("SELECT * FROM tb_kontak")->result_array();
			$data['page'] = "home/kontak";
			$this->load->view('home/index',$data);
		}
		public function profil(){
			$data['profil'] = $this->db->query("SELECT * FROM tb_pelayanan WHERE id='1'")->result_array();
			$data['page'] = "home/profil";
			$this->load->view('home/index',$data);
		}
		public function komentar(){
			$nama 	= addslashes($this->input->post('nama'));
			$email	= addslashes($this->input->post('email'));
			$subjek	= addslashes($this->input->post('subjek'));
			$pesan	= addslashes($this->input->post('pesan'));

			$data['nama'] = $nama; $data['email']=$email; $data['subjek']=$subjek; $data['komentar']=$pesan;
			$res =$this->m_home->insertkomentar($data);
				if($res>0){
					redirect('home/kontak');
				}
		}
		public function blog(){
			$data['page'] = "home/blog";
			$this->load->view('home/index',$data);
		}
	}
?>