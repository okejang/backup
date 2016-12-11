<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Loginmentor extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			$this->load->model('m_adminsi');
			$this->load->helper(array('url','form'));
		}

		public function index(){
			$this->load->view('adminmentor/login');
		}
		
		// Validasi Login
		public function ceklogin(){
			$data['nama'] =  $this->input->post('username');
			$data['password'] =  md5($this->input->post('password'));
			$datax['username'] =  $this->input->post('username');
			$datax['password'] =  md5($this->input->post('password'));
			$res = $this->m_adminsi->cekmentor($data); 
				if($res->num_rows()==1){
					foreach ($res->result() as $key) {
						$dt['id'] = $key->id;
						$dt['nama'] = $key->nama;
						$dt['password'] = $key->password;
						$_SESSION['login']=$key->nama;
						$this->session->set_userdata($dt);
						redirect('adminmentor');
					}
				}
			$res = $this->m_adminsi->cekuser($datax); 
				if($res->num_rows()==1){
					foreach ($res->result() as $key) {
						$dt['id'] = $key->id;
						$dt['username'] = $key->username;
						$dt['password'] = $key->password;
						$dt['level'] = $key->level;
						$_SESSION['login']=$key->username;
						$this->session->set_userdata($dt);
						redirect('adminmentor');
					}
				}
				else{
					echo "<script>
							alert('Username Atau Password Salah');
							location.href='loginmentor';
						  </script>";
			}
		}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('level');
        $this->session->sess_destroy();
        session_destroy();
        redirect('loginmentor');
		}
	}
?>