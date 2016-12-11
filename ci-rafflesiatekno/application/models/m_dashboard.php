<?php
class M_dashboard extends CI_Model{
	
	public function getidlayanan($id){
		$query = $this->db->get_where('tb_pelayanan',array('id'=>$id));
		return $query->row_array();
	}
	public function updatelayanan($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_pelayanan',$data);
	}
	public function getidpendukung($id){
		$query = $this->db->get_where('tb_pendukung',array('id'=>$id));
		return $query->row_array();
	}
	public function insertpendukung($datax){
		return $this->db->insert('tb_pendukung',$datax);
	}
	public function updatependukung($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_pendukung',$data);
	}
	public function deletependukung($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_pendukung');
	}

	// Model Halaman Testimoni
	public function inserttestemoni($datax){
		return $this->db->insert('tb_testimoni', $datax);
	}
	public function getidtestemoni($id){
		$query = $this->db->get_where('tb_testimoni',array('id'=>$id));
		return $query->row_array();
	}
	public function edittestemoni($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_testimoni',$datax);
	}
	public function deletetestemoni($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_testimoni');
	}

	// Model Halaman Template
	public function inserttemplate($datax){
		return $this->db->insert('tb_template',$datax);
	}
	public function getidtemplate($id){
		$query = $this->db->get_where('tb_template', array('id'=>$id));
		return $query->row_array();
	}
	public function updatetemplate($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_template',$data);
	}
	public function deletetemplate($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_template');
	}
	public function insertservice($datax){
		return $this->db->insert('tb_service',$datax);
	}
	public function getidservice($id){
		$query = $this->db->get_where('tb_service',array('id'=>$id));
		return $query->row_array();
	}
	public function updateservice($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_service',$data);
	}
	public function deleteservice($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_service');
	}

	// Model Halaman Admin Course
	public function insertcourse($datax){
		$query = $this->db->insert('tb_course',$datax);	
	}
	public function getidcourse($id){
		$query = $this->db->get_where('tb_course', array('id'=>$id));
		return $query->row_array();
	}
	public function editcourse($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_course',$data);
	}
	public function deletecourse($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_course');
	}

	public function insertusers($datax){
		$query = $this->db->insert('tb_users',$datax);
	}
	public function getidusers($id){
		$query = $this->db->get_where('tb_users',array('id' => $id));
		return $query->row_array();
	}
	public function deleteusers($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_users');
	}
	public function editusers($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_users',$datax);
	}

	// Model Halaman Admin Komentar
	public function deletekomentar($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_komentar');
	}

	public function insertgaleri($datax){
		return $this->db->insert('tb_galeri',$datax);
	}
	public function idgaleri($id){
		$query = $this->db->get_where('tb_galeri',array('id' =>$id));
		return $query->row_array();
	}
	public function updategaleri($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_galeri',$datax);
	}
	public function deletegaleri($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_galeri');
	}

	public function insertorganisasi($datax){
			return $this->db->insert('tb_organisasi',$datax);
		}
		public function idorganisasi($id){
			$query = $this->db->get_where('tb_organisasi',array('id' =>$id));
			return $query->row_array();
		}
		public function updateorganisasi($datax,$id){
			$this->db->where('id',$id);
			return $this->db->update('tb_organisasi',$datax);
		}
		public function deleteorganisasi($id){
			$this->db->where('id',$id);
			return $this->db->delete('tb_organisasi');
		}

		public function insertprestasi($datax){
			return $this->db->insert('tb_prestasi',$datax);
		}
		public function idprestasi($id){
			$query = $this->db->get_where('tb_prestasi',array('id' =>$id));
			return $query->row_array();
		}
		public function updateprestasi($datax,$id){
			$this->db->where('id',$id);
			return $this->db->update('tb_prestasi',$datax);
		}
		public function deleteprestasi($id){
			$this->db->where('id',$id);
			return $this->db->delete('tb_prestasi');
		}

}
?>