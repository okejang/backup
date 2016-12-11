<?php
	class Keg Extends CI_Controller{

		public function __construct(){
			parent:: __construct();
			$this->load->model('m_home');
		}

		public function index(){
			redirect('keg/seminardanpelatihan');
		}
		public function seminardanpelatihan(){
			$data['service'] = $this->db->query("SELECT * FROM tb_service")->result_array();
			$data['page'] = "home/seminar";
			$this->load->view('home/index',$data);
		}
		public function daftarseminar(){
			$data['nama'] = addslashes($this->input->post('nama'));
			$data['institusi'] = addslashes($this->input->post('institusi'));
			$data['jurusan'] = addslashes($this->input->post('jurusan'));
			$data['nohp'] = addslashes($this->input->post('nohp'));
			$data['email'] = addslashes($this->input->post('email'));
			$res = $this->m_home->insertseminar($data);
				if ($res>0){
					echo "<script>
							alert('Selamat Anda Telah Berhasil Mendaftar');
							location.href='seminardanpelatihan';
						  </script>";
				}else{
					echo "ERROR 404";
			}
		}
	}
?>