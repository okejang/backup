<?php
	class M_adminsi extends CI_Model{

		public function cekuser($data){
			return $query = $this->db->get_where('tb_users',$data);
		}
		public function cekmentor($data){
			return $query = $this->db->get_where('tb_course',$data);
		}
	}
?>