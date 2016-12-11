<?php
class Template{

	protected $theme;

	function __construct(){
		$this->theme =& get_instance();
	}

	function display($template,$data=null){
		$data['content']=$this->theme->load->view(
			$template,$data, true);
		$data['header']=$this->theme->load->view(
			'template/header',$data, true);
		$data['top_menu']=$this->theme->load->view(
			'template/menu',$data, true);
		$data['right_menu']=$this->theme->load->view(
			'template/sidebar',$data, true);
		$this->theme->load->view('/template.php', $data);
	}
}
?>