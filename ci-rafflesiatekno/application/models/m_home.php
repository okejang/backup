<?php
class M_home extends CI_Model{
	public function insertkomentar($data){
		return $this->db->insert('tb_komentar',$data);
	}

	public function insertseminar($data){
		return $this->db->insert('tb_seminar',$data);
	}
}
?>