<?php
class M_skppegawai extends CI_Model{

	public function cekuser($data){
		return $query = $this->db->get_where('tb_datapegawai',$data);
	}
	public function cekadmin($datax){
		return $query = $this->db->get_where('tb_users',$datax);
	}
	// Model Untuk Data Pegawai
	public function insertpegawai($datax){
		$this->db->insert('tb_datapegawai',$datax);
	}
	public function getiddatapegawai($id){
		$query = $this->db->get_where('tb_datapegawai',array('id' => $id ));
		return $query->row_array();
	}
	public function updatedatapegawai($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_datapegawai',$datax);
	}
	public function deletedatapegawai($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_datapegawai');
	}

	// Model Untuk Data Laporan Harian
	public function insertdtharian($datax){
		$this->db->insert('tb_laporanharian',$datax);
	}
	public function getiddtharian($id){
		$query = $this->db->get_where('tb_laporanharian',array('id' => $id ));
		return $query->row_array();
	}
	public function updatedtharian($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_laporanharian',$datax);
	}
	public function deletedtharian($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_laporanharian');
	}

	//model manajemen data kontrak kerja
	public function insertdatakontrakkerja($datax){
		$this->db->insert('tb_kontrakkerja',$datax);
	}
	public function getiddatakontrakkerja($id){
		$query = $this->db->get_where('tb_kontrakkerja',array('id' => $id ));
		return $query->row_array();
	}
	public function updatedatakontrakkerja($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_kontrakkerja',$datax);
	}
	public function deletedatakontrakkerja($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_kontrakkerja');
	}

	//model manajemen data kontrak kerja tambahan
	public function insertdatapengukurancapaianplus($datax){
		$this->db->insert('tb_nilaitambahan',$datax);
	}
	public function getiddatapengukurancapaianplus($id){
		$query = $this->db->get_where('tb_nilaitambahan',array('id' => $id ));
		return $query->row_array();
	}
	public function updatedatapengukurancapaianplus($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_nilaitambahan',$datax);
	}
	public function deletedatapengukurancapaianplus($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_nilaitambahan');
	}
	
	//Model untuk penilaian pegawai oleh atasan
	public function insertdatapenilaianpegawai($datax){
		$this->db->insert('tb_penilaian', $datax);
	}
	public function getiddatapenilaianpegawai($id){
		$query = $this->db->get_where('tb_penilaian', array('id' => $id));
		return $query->row_array();
	}
	public function updatedatapenilaianpegawai($datax, $id){
		$this->db->where('id',$id);
		return $this->db->update('tb_penilaian', $datax);
	}
	public function deletedatapenilaianpegawai($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_penilaian');
	}

	// Model Untuk Faktor Pegawai
	public function insertfaktor($datax){
		$this->db->insert('tb_faktorpegawai',$datax);
	}
	public function getidfaktorpegawai($id){
		$query = $this->db->get_where('tb_faktorpegawai',array('id' => $id ));
		return $query->row_array();
	}
	public function updatefaktorpegawai($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_faktorpegawai',$datax);
	}
	public function deletefaktorpegawai($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_faktorpegawai');
	}

	// Model Untuk Nilai Pegawai
	public function insertrank($datax){
		$this->db->insert('tb_ranknilai',$datax);
	}
	public function getidranknilai($id){
		$query = $this->db->get_where('tb_ranknilai',array('id' => $id ));
		return $query->row_array();
	}
	public function updateranknilai($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_ranknilai',$datax);
	}
	public function deleteranknilai($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_ranknilai');
	}

	// Model Untuk Manajemen Berita
	public function insertberita($datax){
		$this->db->insert('tb_berita',$datax);
	}
	public function getidberita($id){
		$query = $this->db->get_where('tb_berita',array('id' => $id ));
		return $query->row_array();
	}
	public function updateberita($datax,$id){
		$this->db->where('id',$id);
		return $this->db->update('tb_berita',$datax);
	}
	public function deleteberita($id){
		$this->db->where('id',$id);
		return $this->db->delete('tb_berita');
	}

	// Model Untuk Manajemen Berita
	public function insertkomentar($datax){
		$this->db->insert('tb_komentar',$datax);
	}
	public function getidkomentar($id){
		$query = $this->db->get_where('tb_komentar',array('id' => $id ));
		return $query->row_array();
	}
}
?>