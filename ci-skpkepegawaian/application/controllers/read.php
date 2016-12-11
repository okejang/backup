<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Read extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('m_home');
			$this->load->helper(array('url','form'));
		}

		public function index(){
			$id = $this->uri->segment(3);
			$data['berita'] = $this->db->query("SELECT * FROM tb_berita where id='$id' ")->result_array();
			$data['page'] = "home/readmore";
			$this->load->view('home/index',$data);
		}

}
?>