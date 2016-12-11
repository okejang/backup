<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('m_home');
			$this->load->helper(array('url','form'));
		}

		public function index(){
			$data['berita'] = $this->db->query("SELECT * FROM tb_berita order by id desc ")->result_array();
			$data['page'] = "home/home";
			$this->load->view('home/index',$data);
		}

		public function pegawai(){
			$data['pegawai'] = $this->db->query("SELECT * FROM tb_datapegawai order by id desc")->result_array();
			$data['page'] = "home/pegawai";
			$this->load->view('home/index',$data);
		}
}
?>