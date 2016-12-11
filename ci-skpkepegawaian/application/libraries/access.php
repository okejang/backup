<?php
class Access{
	public $user;

	function __construct(){
		$this->CI = get instance();
		$auth = $this->CI->config->item('auth');

		$this->CI->load->helper('cookie');
		$this->CI->load->model('user_model');

		$this->users_model = $this->CI->users_model;
	}

	function login($username, $password){
		$result = $this->users_model->get_login_info($username);
		if($result){
			$password = md5($password);
			if($password === $result->$password){
				$this->CI->session->set_userdata('id',$result->user_id);
				return true;
			}
		}
		return false;
	}

	function is_login(){
		return (($this->CI->session->userdata('id')) ? TRUE : false);	
	}

	function logout(){
		$this->CI->session->unset_userdata('id');
	}
}
?>