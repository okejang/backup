<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Adminsi extends CI_Controller{
		public function __construct(){
			parent::__construct();
			session_start();
			$this->load->model('m_adminsi');
			$this->load->helper(array('url','form'));
		}

		public function index(){
			$this->load->view('index');
		}
		
		// Validasi Login
		public function ceklogin(){
			$data['username'] =  mysql_real_escape_string($this->input->post('username'));
			$data['password'] =  mysql_real_escape_string(md5($this->input->post('password')));
			$res = $this->m_adminsi->cekuser($data); 
				if($res->num_rows()==1){
					foreach ($res->result() as $key) {
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
							location.href='adminsi';
						  </script>";
			}
		}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('level');
        $this->session->sess_destroy();
        session_destroy();
        redirect('adminsi');
		}
	}
?>