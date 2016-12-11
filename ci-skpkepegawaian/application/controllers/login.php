<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			$this->load->model('m_skppegawai');
			$this->load->helper(array('url','form'));
		}

		public function index(){
			$this->load->view('index');
		}
		
		// Validasi Login
		public function ceklogin(){
			$data['nip'] =  $this->input->post('username');
			$datax['username'] =  $this->input->post('username');
			$data['password'] =  md5($this->input->post('password'));
			$res = $this->m_skppegawai->cekuser($data); 
				if($res->num_rows()==1){
					foreach ($res->result() as $key) {
						$dt['id'] = $key->id;
						$dt['nip'] = $key->nip;
						$dt['password'] = $key->password;
						$dt['level'] = $key->level;
						$_SESSION['login']=$key->nip;
						$this->session->set_userdata($dt);
						redirect('dashboard');
					}
				}
			$resl = $this->m_skppegawai->cekadmin($datax); 
				if($resl->num_rows()==1){
					foreach ($resl->result() as $key) {
						$dt['id'] = $key->id;
						$dt['username'] = $key->username;
						$dt['password'] = $key->password;
						$dt['level'] = $key->level;
						$_SESSION['login']=$key->username;
						$this->session->set_userdata($dt);
						redirect('dashboard');
					}
				}
				else{
					echo "<script>
							alert('Username Atau Password Salah');
							location.href='index';
						  </script>";
			}
		}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('level');
        $this->session->sess_destroy();
        session_destroy();
        redirect('login');
		}
	}
?>