<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
		session_start();
		$this->load->model('m_skppegawai');
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation','session'));
	}
	
	public function index() {
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{
		    $nip = $this->session->userdata('nip');
			if($nip>0){
				$data['pegawai'] = $this->db->query("SELECT * FROM tb_datapegawai where nip = $nip ")->row_array();
			   	$data['page'] = "admin/dashboard_pegawai";
				$this->load->view('admin/index',$data);
			}else{
				$data['page'] = "admin/dashboard";
				$this->load->view('admin/index',$data);
			}
		}
	}
	// Manajemen data pegawai
	public function datapegawai(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{

		$nip = $this->session->userdata('nip');
		if($nip>0){
			$data['pegawai'] = $this->db->query("SELECT * FROM tb_datapegawai where nip = $nip ")->result_array();
		}else{
			$data['pegawai'] = $this->db->query("SELECT * FROM tb_datapegawai order by id desc")->result_array();	
		}
		$data['page'] = "admin/v_datapegawai";

		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$nama = addslashes($this->input->post('nama'));
		$level = addslashes($this->input->post('level'));
		
		$password = addslashes($this->input->post('password'));
		$alamat = addslashes($this->input->post('alamat')); 
		$jabatan = addslashes($this->input->post('jabatan'));
		$unitkerja= addslashes($this->input->post('unitkerja'));
		$nip = addslashes($this->input->post('nip'));
		$nohp = addslashes($this->input->post('nohp')); 
		$email = addslashes($this->input->post('email'));
		$atasan = addslashes($this->input->post('atasan'));
		$atasan1 = addslashes($this->input->post('atasan1'));

		if($link == "insertdatapegawai"){
			$data['page'] = "admin/i_datapegawai";

		}
		else if($link == "setinsertdatapegawai"){
				$config['upload_path'] = './assets/dist/img/pegawai';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				if(empty($this->upload->file_name)){
				$foto = 'notavailable.png';
				$datax['nama'] = $nama;
				$datax['password'] = md5($password);
				$datax['alamat'] = $alamat;
				$datax['jabatan'] = $jabatan;
				$datax['unitkerja'] = $unitkerja;
				$datax['nip'] = $nip;
				$datax['nohp'] = $nohp;
				$datax['email'] = $email;
				$datax['foto'] = $foto;
				$datax['atasan'] = $atasan;
				$datax['pejabat_pnatasan'] = $atasan1;
				$datax['level'] = $level;
				$res = $this->m_skppegawai->insertpegawai($datax);
					redirect('dashboard/datapegawai');
				}else{
				$foto = $this->upload->file_name;
				$datax['nama'] = $nama;
				$datax['password'] =  md5($password);
				$datax['alamat'] = $alamat;
				$datax['jabatan'] = $jabatan;
				$datax['unitkerja'] = $unitkerja;
				$datax['nip'] = $nip;
				$datax['nohp'] = $nohp;
				$datax['email'] = $email;
				$datax['foto'] = $foto;
				$datax['atasan'] = $atasan;
				$datax['pejabat_pnatasan'] = $atasan1;
				$datax['level'] = $level;
				$res = $this->m_skppegawai->insertpegawai($datax);
						redirect('dashboard/datapegawai');
			}
		}

		else if($link == "updatedatapegawai"){
			$data['atasanp'] = $this->db->query("SELECT * FROM tb_datapegawai")->result_array();
			$data['data'] = $this->m_skppegawai->getiddatapegawai($id);
			$data['page'] = "admin/i_datapegawai";
		}
		else if($link == "setupdatedatapegawai"){
			$config['upload_path'] = './assets/dist/img/pegawai';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']	= '2000';
			$config['$file_name'] = url_title($this->input->post('file_upload'));
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			$foto = $this->upload->file_name;
			$filefoto = $this->m_skppegawai->getiddatapegawai($_POST['id']);
			if ($foto == ""){
					$icon = $filefoto['foto'];
			}
			else {
				$delfoto = "./assets/dist/img/pegawai".$filefoto['foto'];
				unlink($delfoto);
				$icon = $foto;
			}
				$datax['nama'] = $nama;
				$pass = $this->input->post('password');
				$idx = $this->db->query("SELECT password FROM tb_datapegawai WHERE nip = '$nip'");
			 	$passwordx = $idx->row()->password;
				if($passwordx == $pass){}
					else{
						$passwordx = addslashes(md5($this->input->post('password')));
				}
				$datax['password'] = $passwordx;
				$datax['alamat'] = $alamat;
				$datax['jabatan'] = $jabatan;
				$datax['unitkerja'] = $unitkerja;
				$datax['nip'] = $nip;
				$datax['nohp'] = $nohp;
				$datax['email'] = $email;
				$datax['atasan'] = $atasan;
				$datax['pejabat_pnatasan'] = $atasan1;
				$datax['level'] = $level;
				$datax['foto'] = $icon;
				$res = $this->m_skppegawai->updatedatapegawai($datax,$_POST['id']);
					if($res>0){
						if($nip = $this->session->userdata('nip')){
							redirect('dashboard');
						}else{
							redirect('dashboard/datapegawai');
						}
				}else{
				echo "ERROR 404";
			}
		}
		else if($link == "deletedatapegawai"){
			$filefoto = $this->m_skppegawai->deletedatapegawai($id);
			$delfoto = "./assets/dist/img/pegawai".$filefoto['foto'];
			unlink($delfoto);
			$this->m_skppegawai->deletedatapegawai($id);
			redirect('dashboard/datapegawai');
		}

		$this->load->view('admin/index',$data);
		}
	}
	
	// Manajemen Laporan Harian
	public function dataharian(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{

		$nip = $this->session->userdata('nip');
		if($nip>0){
			$data['datax'] = $this->db->query("SELECT distinct(tahun) FROM tb_kontrakkerja where nip = $nip ")->result_array();
			//$data['kktahun'] = $this->db->query("SELECT distinct(tanggal) FROM tb_kontrakkerja where nip = $nip ")->result_array();
			$tahunx = date('Y');
			$tahunn = strip_tags($tahunx);
	    	$tahun = substr($tahunn,0,4);
			$data['lpharian'] = $this->db->query("SELECT * FROM tb_laporanharian where nip = $nip and tanggal LIKE '%$tahun%' order by tanggal desc ")->result_array();
		}else{
			$data['lpharian'] = $this->db->query("SELECT * FROM tb_laporanharian order by tanggal desc")->result_array();	
		}
		$data['page'] = "admin/v_lpharian";

		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$nipx = addslashes($this->input->post('nip'));
		$kegiatan = addslashes($this->input->post('kegiatan'));
		$output = addslashes($this->input->post('output')); 
		$volume = addslashes($this->input->post('volume'));
		$satuan = addslashes($this->input->post('satuan'));
		$keterangan = addslashes($this->input->post('keterangan'));
		$tanggal = addslashes($this->input->post('tanggal')); 

		if($link == "insertdataharian"){
			$data['kontrakkerja'] = $this->db->query("SELECT * FROM tb_kontrakkerja where nip = $nip")->result_array();
			$data['page'] = "admin/i_lpharian";
		}
		else if($link == "setinsertdataharian"){
			$config['upload_path'] = './assets/dist/berkas/';
			$config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
			$config['max_size']	= '2000';
			$config['$file_name'] = url_title($this->input->post('file_upload'));
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			if(empty($this->upload->file_name)){
			$datax['nip'] = $nip;
			$datax['kegiatan'] = $kegiatan;
			$datax['output'] = $output;
			$datax['volume'] = $volume;
			$datax['satuan'] = $satuan;
			$datax['keterangan'] = $keterangan;
			$datax['tanggal'] = $tanggal;
			$datax['file'] = 'kosong';
			$res = $this->m_skppegawai->insertdtharian($datax);
			redirect('dashboard/dataharian');
			}else{
				$filex = $this->upload->file_name;
				$datax['nip'] = $nip;
				$datax['kegiatan'] = $kegiatan;
				$datax['output'] = $output;
				$datax['volume'] = $volume;
				$datax['satuan'] = $satuan;
				$datax['keterangan'] = $keterangan;
				$datax['tanggal'] = $tanggal;
				$datax['file'] = $filex;
				$res = $this->m_skppegawai->insertdtharian($datax);
				redirect('dashboard/dataharian');
			}
		}
		else if($link == "updatedataharian"){
			$data['kontrakkerja'] = $this->db->query("SELECT * FROM tb_kontrakkerja where nip = $nip")->result_array();
			$data['data'] = $this->m_skppegawai->getiddtharian($id);
			$data['page'] = "admin/i_lpharian";
		}
		else if($link == "setupdatedataharian"){
			$datax['nip'] = $nipx;
			$datax['kegiatan'] = $kegiatan;
			$datax['output'] = $output;
			$datax['volume'] = $volume;
			$datax['satuan'] = $satuan;
			$datax['keterangan'] = $keterangan;
			$datax['tanggal'] = $tanggal;
			$res = $this->m_skppegawai->updatedtharian($datax,$_POST['id']);
				if($res>0){
				redirect('dashboard/dataharian');
			}else{
				echo "ERROR 404";
			}
		}
		else if($link == "deletedataharian"){
			$this->m_skppegawai->deletedtharian($id);
			redirect('dashboard/dataharian');
		}
		else if($link == "tahun"){
			$tahun = addslashes($this->input->post('tahun')); 
			$data['lpharian'] = $this->db->query("SELECT * FROM tb_laporanharian where nip = $nip and tanggal LIKE '%$tahun%' order by tanggal desc ")->result_array();
			$data['page'] ="admin/v_lpharian";
		}

		$this->load->view('admin/index',$data);
		}
	}

	//Manajemen Kontrak Kerja Pegawai
	public function kontrakkerja(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{
			$nip = $this->session->userdata('nip');
			if($nip>0){
			$tahunsekarang = date('Y');
			$data['kontrakkerja'] = $this->db->query("SELECT * FROM tb_kontrakkerja where nip = $nip AND tahun = '$tahunsekarang' ")->result_array();
			$data['kktahun'] = $this->db->query("SELECT distinct(tahun) FROM tb_kontrakkerja where nip = $nip ")->result_array();
			$data['page'] = "admin/v_kontrakkerja";
			}
			$link = $this->uri->segment(3);
			$id = $this->uri->segment(4);

			$kegiatan_tugas = addslashes($this->input->post('kegiatan_tugas'));
			$AK = addslashes($this->input->post('AK')); 
			$kuant_output = addslashes($this->input->post('kuant_output'));
			$kual_mutu = addslashes($this->input->post('kual_mutu'));
			$masa_waktu = addslashes($this->input->post('masa_waktu'));
			$biaya = addslashes($this->input->post('biaya')); 
			$tahun = addslashes($this->input->post('tahun')); 

			if($link == "insertkontrakkerja"){
				$data['page'] = "admin/i_kontrakkerja";
			}
			else if($link == "setinsertkontrakkerja"){
				$datax['nip'] = $nip;
				$datax['kegiatan_tugas'] = $kegiatan_tugas;
				$datax['AK'] = $AK;
				$datax['kuant_output'] = $kuant_output;
				$datax['kual_mutu'] = $kual_mutu;
				$datax['masa_waktu'] = $masa_waktu;
				$datax['biaya'] = $biaya;
				$datax['tahun'] = date('Y');
				$res = $this->m_skppegawai->insertdatakontrakkerja($datax);
				redirect('dashboard/kontrakkerja');

			}
			else if($link == "updatekontrakkerja"){
				$data['data'] = $this->m_skppegawai->getiddatakontrakkerja($id);
				$data['page'] = "admin/i_kontrakkerja";
			}
			else if($link == "updatex"){
				$lpharian = $this->db->query("SELECT * FROM tb_laporanharian WHERE nip = '$nip' order by id desc limit 1 ");
				$keg = $lpharian->row()->kegiatan;
				$vol = $lpharian->row()->volume;
				$ktkerja = $this->db->query("SELECT * FROM tb_kontrakkerja WHERE nip = '$nip'");
				$klmutu = $ktkerja->row()->kuant_output;
				$klmutubaru = $klmutu + $vol;
				$this->db->query("UPDATE tb_kontrakkerja SET  kuant_output ='$klmutubaru' WHERE kegiatan_tugas = '$keg' ");
				
				redirect('dashboard/kontrakkerja');
			}
			else if($link == "setupdatekontrakkerja"){
				$datax['kegiatan_tugas'] = $kegiatan_tugas;
				$datax['AK'] = $AK;
				$datax['kuant_output'] = $kuant_output;
				$datax['kual_mutu'] = $kual_mutu;
				$datax['masa_waktu'] = $masa_waktu;
				$datax['biaya'] = $biaya;
				$datax['tahun'] = $tahun;
				$res = $this->m_skppegawai->updatedatakontrakkerja($datax,$_POST['id']);
					if($res>0){
					redirect('dashboard/kontrakkerja');
				}else{
					echo "ERROR 404";
				}
			}
			else if($link == "deletekontrakkerja"){
				$this->m_skppegawai->deletedatakontrakkerja($id);
				redirect('dashboard/kontrakkerja');
			}
			else if($link == "tahun"){
				$tahun = addslashes($this->input->post('tahun')); 
				$data['kontrakkerja'] = $this->db->query("SELECT * FROM tb_kontrakkerja where nip = $nip AND tahun = '$tahun' ")->result_array();
				$data['page'] ="admin/v_kontrakkerja";
			}

			$this->load->view('admin/index',$data);
		}
	}
	
	//Manajemen Kontrak Kerja Pegawai Tambahan
	public function kontrakkerjatambahan(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{
			$nip = $this->session->userdata('nip');
			if($nip>0){
				$tahunsekarang = date('Y');
				$data['nilaitambahan'] = $this->db->query("SELECT * FROM tb_nilaitambahan where nip = $nip AND tahun = '$tahunsekarang' ")->result_array();
				$data['kktahun'] = $this->db->query("SELECT distinct(tahun) FROM tb_nilaitambahan where nip = $nip ")->result_array();
			}else{
				$data['nilaitambahan'] = $this->db->query("SELECT * FROM tb_nilaitambahan")->result_array();
			}
			$data['page'] = "admin/v_kontraktambahan";
			$link = $this->uri->segment(3);
			$id = $this->uri->segment(4);

			$kegiatan = addslashes($this->input->post('kegiatan_tambahan'));
			$AK = addslashes($this->input->post('AK')); 
			$kuant_output = addslashes($this->input->post('kuan'));
			$kual_mutu = addslashes($this->input->post('kual'));
			$masa_waktu = addslashes($this->input->post('waktu'));
			$biaya = addslashes($this->input->post('biaya')); 
			$tahun = addslashes($this->input->post('tahun'));

			if ($link == "insertpengukurancapaianplus"){
				$data['nilaitambahan'] = $this->db->query("SELECT * FROM tb_nilaitambahan where nip = $nip")->result_array();
				$data['page'] = "admin/i_pengukurancapaianplus";
			}
			else if($link == "setinsertpengukurancapaianplus"){
				$datax['nip'] = $nip;
				$datax['kegiatan_tambahan'] = $kegiatan;
				$datax['AK'] = $AK;
				$datax['kuan'] = $kuant_output;
				$datax['kual'] = $kual_mutu;
				$datax['waktu'] = $masa_waktu;
				$datax['biaya'] = $biaya;
				$datax['tahun'] = date('Y');
				$res = $this->m_skppegawai->insertdatapengukurancapaianplus($datax);
				redirect('dashboard/kontrakkerjatambahan');

			}
			else if($link == "updatepengukurancapaianplus"){
				$data['data'] = $this->m_skppegawai->getiddatapengukurancapaianplus($id);
				$data['page'] = "admin/i_pengukurancapaianplus";
			}
			else if($link == "setupdatepengukurancapaianplus"){
				$datax['kegiatan_tambahan'] = $kegiatan;
				$datax['AK'] = $AK;
				$datax['kuan'] = $kuant_output;
				$datax['kual'] = $kual_mutu;
				$datax['waktu'] = $masa_waktu;
				$datax['biaya'] = $biaya;
				$datax['biaya'] = $tahun;
				$res = $this->m_skppegawai->updatedatapengukurancapaianplus($datax,$_POST['id']);
				if($res>0){
					redirect('dashboard/kontrakkerjatambahan');
				}else{
					echo "ERROR 404";
				}
			}
			else if($link == "deletepengukurancapaianplus"){
				$this->m_skppegawai->deletedatapengukurancapaianplus($id);
				redirect('dashboard/kontrakkerja');
			}
			else if($link == "tahun"){
				$tahun = addslashes($this->input->post('tahun')); 
				$data['nilaitambahan'] = $this->db->query("SELECT * FROM tb_nilaitambahan where nip = $nip AND tahun = '$tahun' ")->result_array();
				$data['page'] ="admin/v_kontraktambahan";
			}

			$this->load->view('admin/index',$data);
		}
	}

	//Manajemen Pengukuran Nilai Capaian Pegawai
	public function pengukurancapaian(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{
		$nip = $this->session->userdata('nip');
		if($nip>0){
			$tahunsekarang = date('Y');
			$data['kontrakkerja'] = $this->db->query("SELECT * FROM tb_kontrakkerja where nip = $nip AND tahun = '$tahunsekarang' ")->result_array();
			$data['kktahun'] = $this->db->query("SELECT distinct(tahun) FROM tb_kontrakkerja where nip = $nip ")->result_array();
		}else{
			$data['kontrakkerja'] = $this->db->query("SELECT * FROM tb_kontrakkerja")->result_array();	
			//$data['nilaitambahan'] = $this->db->query("SELECT * FROM tb_nilaitambahan")->result_array();
		}

		$data['page'] = "admin/v_pengukurancapaian";

		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$nipx = addslashes($this->input->post('nip'));
		$kegiatan_tugas = addslashes($this->input->post('kegiatan_tugas'));
		$AK = addslashes($this->input->post('AK')); 
		$kuant_output = addslashes($this->input->post('kuant_output'));
		$kual_mutu = addslashes($this->input->post('kual_mutu'));
		$masa_waktu = addslashes($this->input->post('masa_waktu'));
		$biaya = addslashes($this->input->post('biaya')); 
		$kuant = addslashes($this->input->post('kuant_pc')); 
		$kual = addslashes($this->input->post('kual_pc'));
		$waktu = addslashes($this->input->post('waktu_pc'));
		$biaya = addslashes($this->input->post('biaya_pc'));
		$perhit = addslashes($this->input->post('perhit_pc'));
		$nilai = addslashes($this->input->post('nilai_pc')); 
		$kegiatan_tambahan = addslashes($this->input->post('kegiatan_tambahan'));
		$target = addslashes($this->input->post('target'));
		$realisasi = addslashes($this->input->post('realisasi'));
		$nilai_t = addslashes($this->input->post('nilai')); 

		if($link == "insertpengukurancapaian"){
			$data['pengukurancapaian'] = $this->db->query("SELECT * FROM tb_kontrakkerja where nip = $nip")->result_array();
			$data['page'] = "admin/i_pengukurancapaian";
		}
		else if($link == "updatepengukurancapaian"){
			$data['data'] = $this->m_skppegawai->getiddatakontrakkerja($id);
			$data['page'] = "admin/i_pengukurancapaian";
		}
		else if($link == "setupdatepengukurancapaian"){
			$datax['kuant_pc'] = $kuant;
			$datax['kual_pc'] = $kual;
			$datax['waktu_pc'] = $waktu;
			$datax['biaya_pc'] = $biaya;
			$res = $this->m_skppegawai->updatedatakontrakkerja($datax,$_POST['id']);
			if($res>0){
				redirect('dashboard/pengukurancapaian');
			}else{
				echo "ERROR 404";
			}
		}
		else if($link == "updates"){
			$id = $this->uri->segment(4);
			$kegx = addslashes($this->input->post('keg1'));
			$lpharian = $this->db->query("SELECT kegiatan FROM tb_laporanharian WHERE nip='$nip' AND kegiatan='$kegx' ");
			$keg = $lpharian->row()->kegiatan;
			$lap = $this->db->query("SELECT * FROM tb_kontrakkerja WHERE nip='$nip' AND id = '$id' ");
			$kegg = $lap->row()->kegiatan_tugas;

			$this->db->query("update tb_kontrakkerja set kuant_pc = (select sum(volume) from tb_laporanharian where nip='$nip' and kegiatan='$keg') 
				where nip='$nip' and kegiatan_tugas='$kegg'and id ='$id' ");
			if($keg==""){}
			else{
			$ro =  $lap->row()->kuant_pc;
			$to =  $lap->row()->kuant_output;
			$rk =  $lap->row()->kual_pc;
			$tk =  $lap->row()->kual_mutu;
			$rw =  $lap->row()->waktu_pc;
			$tw =  $lap->row()->masa_waktu;
			$uji = 100-(($rw/$tw)*100);
				if($uji<=24){
					$this->db->query("UPDATE tb_kontrakkerja SET perhit_pc = round((((kuant_pc/kuant_output)*100)+((kual_pc/kual_mutu)*100)+((((1.76*masa_waktu)-waktu_pc)/masa_waktu)*100)),2), 
					nilai_pc = round(((((kuant_pc/kuant_output)*100)+((kual_pc/kual_mutu)*100)+((((1.76*masa_waktu)-waktu_pc)/masa_waktu)*100))/3),2)  WHERE nip = '$nip' AND kegiatan_tugas='$kegg'and id ='$id'");
				}else{
					$this->db->query("UPDATE tb_kontrakkerja SET perhit_pc = round(((kuant_pc/kuant_output)*100)+((kual_pc/kual_mutu)*100)+(76-(((((1.76*masa_waktu)-waktu_pc)/masa_waktu)*100)-100)),2), 
					nilai_pc = round(((((kuant_pc/kuant_output)*100)+((kual_pc/kual_mutu)*100)+(76-(((((1.76*masa_waktu)-waktu_pc)/masa_waktu)*100)-100)))/3),2)  WHERE nip = '$nip' AND kegiatan_tugas='$kegg'and id ='$id'");
				}
			
			}
			redirect('dashboard/pengukurancapaian');
		}
		else if($link == "tahun"){
				$tahun = addslashes($this->input->post('tahun')); 
				$data['kontrakkerja'] = $this->db->query("SELECT * FROM tb_kontrakkerja where nip = $nip AND tahun = '$tahun' ")->result_array();
				$data['page'] ="admin/v_pengukurancapaian";
			}

		$this->load->view('admin/index',$data);
		}
	}
	
	//Data Baru Kriteria Pegawai
	public function kriterianilai(){
		$data['faktorpegawai'] = $this->db->query("SELECT * FROM tb_faktorpegawai")->result_array();
		$data['ranknilai'] = $this->db->query("SELECT * FROM tb_ranknilai")->result_array();
		$data['page'] = "admin/v_perilakukerja";

		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$this->load->view('admin/index',$data);
	}

	//Penilaian oleh atasan
	public function penilaianpegawai(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{
	    	$nip = $this->session->userdata('nip');
	    	$idx = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = $nip");
	 		$namaatasan = $idx->row()->nama;
			$data['penilaianpegawai'] = $this->db->query("SELECT * FROM tb_penilaian")->result_array();
			$data['pegawai'] = $this->db->query("SELECT * FROM tb_datapegawai where atasan = '$namaatasan'")->result_array();

			$data['page'] = "admin/v_penilaianpegawai";
			
			$link = $this->uri->segment(3);
			$id = $this->uri->segment(4);

			$nip = addslashes($this->input->post('nip'));
			$nama = addslashes($this->input->post('nama')); 
			$jabatan = addslashes($this->input->post('jabatan'));
			$tahun = addslashes($this->input->post('tahun'));
			$SKP = addslashes($this->input->post('SKP'));
			$orientasipelayanan = addslashes($this->input->post('orientasipelayanan'));
			$integritas = addslashes($this->input->post('integritas'));
			$komitmen = addslashes($this->input->post('komitmen'));
			$disiplin = addslashes($this->input->post('disiplin'));
			$kerjasama = addslashes($this->input->post('kerjasama'));
			$kepemimpinan = addslashes($this->input->post('kepemimpinan'));

			if($link == "insertpenilaianpegawai"){
				$data['page'] = "admin/i_penilaianpegawai";
			}
			else if($link == "setinsertpenilaianpegawai"){
				$datax['nip'] = $nip;
				$datax['nama'] = $nama;
				$datax['jabatan'] = $jabatan;
				$datax['tahun'] = $tahun;
				$datax['SKP'] = $SKP;
				$datax['orientasipelayanan'] = $orientasipelayanan;
				$datax['integritas'] = $integritas;
				$datax['komitmen'] = $komitmen;
				$datax['disiplin'] = $disiplin;
				$datax['kerjasama'] = $kerjasama;
				$datax['kepemimpinan'] = $kepemimpinan;
				$res = $this->m_skppegawai->insertdatapenilaianpegawai($datax);
				redirect('dashboard/penilaianpegawai');

			}
			else if($link == "updatepenilaianpegawai"){
				$data['data'] = $this->m_skppegawai->getiddatapenilaianpegawai($id);
				$data['page'] = "admin/i_penilaianpegawai";
			}
			else if($link == "setupdatepenilaianpegawai"){
				$datax['nip'] = $nip;
				$datax['nama'] = $nama;
				$datax['jabatan'] = $jabatan;
				$datax['tahun'] = $tahun;
				$datax['SKP'] = $SKP;
				$datax['orientasipelayanan'] = $orientasipelayanan;
				$datax['integritas'] = $integritas;
				$datax['komitmen'] = $komitmen;
				$datax['disiplin'] = $disiplin;
				$datax['kerjasama'] = $kerjasama;
				$datax['kepemimpinan'] = $kepemimpinan;
				$res = $this->m_skppegawai->updatedatapenilaianpegawai($datax,$_POST['id']);
					if($res>0){
					redirect('dashboard/penilaianpegawai');
				}else{
					echo "ERROR 404";
				}
			}
			else if($link == "deletepenilaianpegawai"){
				$this->m_skppegawai->deletedatapenilaianpegawai($id);
				redirect('dashboard/penilaianpegawai');
			}

			$this->load->view('admin/index',$data);
		}
	}

	// Manajemen faktor pegawai (Data Baru)
	public function faktorpegawai(){
		$data['faktorpegawai'] = $this->db->query("SELECT * FROM tb_faktorpegawai")->result_array();
		$data['page'] = "admin/v_perilakukerja";

		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$faktor_nilai = addslashes($this->input->post('faktor_nilai')); 

		if($link == "insertfaktorpegawai"){
			$data['page'] = "admin/i_faktorpegawai";

		}
		else if($link == "setinsertfaktorpegawai"){
			$datax['faktor_nilai'] = $faktor_nilai;
			$res = $this->m_skppegawai->insertfaktor($datax);
			redirect('dashboard/kriterianilai');
		}

		else if($link == "updatefaktorpegawai"){
			$data['data'] = $this->m_skppegawai->getidfaktorpegawai($id);
			$data['page'] = "admin/i_faktorpegawai";
		}
		else if($link == "setupdatefaktorpegawai"){
			$datax['faktor_nilai'] = $faktor_nilai;
			$res = $this->m_skppegawai->updatefaktorpegawai($datax,$_POST['id']);
				if($res>0){
				redirect('dashboard/kriterianilai');
			}else{
			echo "ERROR 404";
			}
		}
		else if($link == "deletefaktorpegawai"){
			$this->m_skppegawai->deletefaktorpegawai($id);
			redirect('dashboard/kriterianilai');
		}

		$this->load->view('admin/index',$data);
	}

	// Manajemen rank nilai (Data Baru)
	public function ranknilai(){
		$data['ranknilai'] = $this->db->query("SELECT * FROM tb_ranknilai")->result_array();
		$data['page'] = "admin/v_perilakukerja";

		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$rank_nilai = addslashes($this->input->post('rank_nilai'));
		$nilai_kata = addslashes($this->input->post('nilai_kata')); 

		if($link == "insertranknilai"){
			$data['page'] = "admin/i_ranknilai";

		}
		else if($link == "setinsertranknilai"){
			$datax['rank_nilai'] = $rank_nilai;
			$datax['nilai_kata'] = $nilai_kata;
			$res = $this->m_skppegawai->insertrank($datax);
			redirect('dashboard/kriterianilai');
		}

		else if($link == "updateranknilai"){
			$data['data'] = $this->m_skppegawai->getidranknilai($id);
			$data['page'] = "admin/i_ranknilai";
		}
		else if($link == "setupdateranknilai"){
			$datax['rank_nilai'] = $rank_nilai;
			$datax['nilai_kata'] = $nilai_kata;
			$res = $this->m_skppegawai->updateranknilai($datax,$_POST['id']);
				if($res>0){
				redirect('dashboard/kriterianilai');
			}else{
			echo "ERROR 404";
			}
		}
		else if($link == "deleteranknilai"){
			$this->m_skppegawai->deleteranknilai($id);
			redirect('dashboard/kriterianilai');
		}

		$this->load->view('admin/index',$data);
	}

	//Manajemen Cetak Laporan
	public function cetak(){
		$link = $this->uri->segment(3);

		if($link == "printdatapegawai"){
			$data['data']	= $this->db->query("SELECT * FROM tb_datapegawai ")->result_array(); 
			$this->load->view('admin/p_datapegawai', $data);
		}
		else if($link == "printdatalpharian"){
			$nip = $this->session->userdata('nip');
			$tanggal1		= $this->input->post('tgl1');
			$tanggal2		= $this->input->post('tgl2');	

			if($nip>0){
			$idx = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = $nip");
	 		$atasan = $idx->row()->atasan;
			$data['pejabatpenilai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nama = '$atasan' ")->result_array(); 
			$data['datapegawai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = '$nip' ")->result_array(); 
			if ($tanggal2==""){
				$data['data']	= $this->db->query("SELECT * FROM tb_laporanharian WHERE tanggal = '$tanggal1' AND nip = '$nip' ")->result_array(); 
				$data['tanggal']	= $this->db->query("SELECT * FROM tb_laporanharian WHERE tanggal = '$tanggal1' AND nip = '$nip' limit 1")->result_array(); 
				$data['datapegawai'] = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = '$nip' ")->result_array(); 
				$this->load->view('admin/p_lpharian',$data);
			}else{
				$idx = $this->db->query("SELECT * FROM tb_laporanharian WHERE nip = $nip");
	 			//$tanggal = $idx->row()->tanggal;
	 			$tanggal = addslashes($this->input->post('tanggal')); 
				$data['datax']	= $this->db->query("SELECT distinct(tanggal) from tb_laporanharian where nip ='123' AND tanggal ='$tanggal' ")->result_array(); 
				$data['data']	= $this->db->query("SELECT * FROM tb_laporanharian WHERE tanggal >= '$tanggal1' AND tanggal <= '$tanggal2' AND nip = '$nip' and tanggal ='$tanggal' ")->result_array(); 
				$data['tanggal']	= $this->db->query("SELECT * FROM tb_laporanharian WHERE tanggal >= '$tanggal1' AND tanggal <= '$tanggal2' AND nip = '$nip' limit 1")->result_array(); 
				$data['datapegawai'] = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = '$nip' ")->result_array(); 
				$this->load->view('admin/p_lpharianx',$data);
				}
			}else{
			$data['data']	= $this->db->query("SELECT * FROM tb_laporanharian WHERE tanggal >= '$tanggal1' AND tanggal <= '$tanggal2' ORDER BY id ")->result_array(); 
			$this->load->view('admin/pa_lpharian',$data);
			}
		}
		else if($link == "printdatakontrakkerja"){
			$nip = $this->session->userdata('nip');
			$tahun = addslashes($this->input->post('tahun')); 
			$idx = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = $nip");
	 		$atasan = $idx->row()->atasan;
			$data['pejabatpenilai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nama = '$atasan' ")->result_array(); 
			$data['datapegawai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = '$nip' ")->result_array(); 
			$data['data']	= $this->db->query("SELECT * FROM tb_kontrakkerja WHERE nip = $nip and tahun = '$tahun' ")->result_array(); 
			$this->load->view('admin/p_kontrakkerja',$data);		
		}
		else if($link == "printdatapengukurancapaian"){
			$nip = $this->session->userdata('nip');
			$tahun = addslashes($this->input->post('tahun')); 
			$idx = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = $nip");
			$data['nilai'] = $this->db->query("SELECT * FROM tb_nilaicapai WHERE nip = $nip");
	 		$atasan = $idx->row()->atasan;
			$data['pejabatpenilai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nama = '$atasan' ")->result_array(); 
			$data['nilaitambahan']	= $this->db->query("SELECT * FROM tb_nilaitambahan WHERE nip = '$nip' AND tahun='$tahun' ")->result_array(); 
			$data['nilaicp'] = $this->db->query("SELECT * FROM tb_nilaicapai WHERE nip = '$nip' ")->result_array(); 
			$data['datapegawai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = '$nip' ")->result_array(); 
			$data['data']	= $this->db->query("SELECT * FROM tb_kontrakkerja WHERE nip = '$nip' AND tahun ='$tahun' ")->result_array();
			
			$tam = $this->db->query("SELECT count(kegiatan_tambahan) as nilaitambah from tb_nilaitambahan where nip=$nip");
			$baru = $tam->row()->nilaitambah;
			if($baru>=4){
				$this->db->query("INSERT into tb_nilaicapai (nip,nilaitam,nilaitot,nilairata,hasil,tahun), select $nip, $baru, 
				round((sum(nilai_pc)),2), round(((sum(nilai_pc))/count(nilai_pc)),2), round((((sum(nilai_pc))/count(nilai_pc))+2),2), $tahun
				from tb_kontrakkerja where nip='$nip' AND tahun='$tahun' ");
			}else if($baru==0){
				$this->db->query("INSERT into tb_nilaicapai (nip,nilaitam,nilaitot,nilairata,hasil,tahun) select $nip, $baru, 
				round((sum(nilai_pc)),2), round(((sum(nilai_pc))/count(nilai_pc)),2), round(((sum(nilai_pc))/count(nilai_pc)),2), $tahun
				from tb_kontrakkerja where nip='$nip' AND tahun='$tahun'");
			}else if($baru >= 1 or $baru < 4){
				$this->db->query("INSERT into tb_nilaicapai (nip,nilaitam,nilaitot,nilairata,hasil,tahun) select $nip, $baru, 
				round((sum(nilai_pc)),2), round(((sum(nilai_pc))/count(nilai_pc)),2), round((((sum(nilai_pc))/count(nilai_pc))+1),2), $tahun
				from tb_kontrakkerja where nip='$nip' AND tahun='$tahun'");
			}
			$this->load->view('admin/p_pengukurancapaian',$data);		
		}
		else if($link == "printsasarankerja"){
			$nip = $this->session->userdata('nip');
			$data['datapegawai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = '$nip' ")->result_array(); 
			$idx = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = $nip");
	 		$atasan = $idx->row()->atasan;
	 		$pejabatpnatasan = $idx->row()->pejabat_pnatasan;
			$data['pejabatpenilai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nama = '$atasan' ")->result_array();  
			$data['pejabatpnatasan']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nama = '$pejabatpnatasan' ")->result_array();  
			$this->load->view('admin/p_sasarankerja',$data);		
		}
		else if($link == "printprilakukerja"){
			$nip = $this->session->userdata('nip');
			$data['datapegawai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = '$nip' ")->result_array(); 
			$tahun = date('Y');
			$data['prilakukerja'] = $this->db->query("SELECT * FROM tb_penilaian where nip = '$nip' AND tahun='$tahun' ")->result_array();  
			$idx = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = $nip");
	 		$atasan = $idx->row()->atasan;
			$data['pejabatpenilai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nama = '$atasan' ")->result_array(); 
			$this->load->view('admin/p_prilakukerja',$data);		
		}
		else if($link == "printprestasikerja"){
			$nip = $this->session->userdata('nip');
			$data['datapegawai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = '$nip' ")->result_array();
			$tahun = date('Y');
			$data['prilakukerja'] = $this->db->query("SELECT * FROM tb_penilaian where nip = '$nip' AND tahun='$tahun' ")->result_array();  
			$idx = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = $nip");
	 		$atasan = $idx->row()->atasan;
	 		$pejabatpnatasan = $idx->row()->pejabat_pnatasan;
			$data['pejabatpenilai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nama = '$atasan' ")->result_array();  
			$data['pejabatpnatasan']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nama = '$pejabatpnatasan' ")->result_array();  
			$this->load->view('admin/p_prestasikerja',$data);		
		}
		else if($link == "printcover"){
			$nip = $this->session->userdata('nip');
			$data['datapegawai']	= $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = '$nip' ")->result_array();
			$this->load->view('admin/p_cover',$data);		
		}
	}

	public function admin(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{
	    	$link = $this->uri->segment(3);
	    	$id = $this->uri->segment(4);
	    	$username = addslashes($this->input->post('username'));

	    	$data['admin'] = $this->db->query("SELECT * FROM tb_users")->row_array();

	    	if($link == "update"){
	    		$id = $this->session->userdata('id');
	    		$pass = $this->input->post('password');
				$idx = $this->db->query("SELECT password FROM tb_users WHERE id = '$id'");
			 	$password = $idx->row()->password;
				if($password == $pass){}
					else{
						$password = addslashes(md5($this->input->post('password')));
				}

	    		$this->db->query("UPDATE tb_users SET username = '$username', password = '$password' WHERE id = '$id' ");
	    		redirect('login/logout');
	    	}
	    	$data['page'] = "admin/admin";
	    	$this->load->view('admin/index',$data);
	    }
	}

	//Manajemen Berita
	public function manajemenberita(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{

		$nip = $this->session->userdata('nip');
		if($nip>0){
			$data['berita'] = $this->db->query("SELECT * FROM tb_berita where nip = $nip ")->result_array();
		}else{
			$data['berita'] = $this->db->query("SELECT * FROM tb_berita order by id desc")->result_array();	
		}
		$data['page'] = "admin/v_berita";

		$link = $this->uri->segment(3);
		$id = $this->uri->segment(4);

		$judul = addslashes($this->input->post('judul'));
		$berita = addslashes($this->input->post('berita'));

		if($link == "insertberita"){
			$data['page'] = "admin/i_berita";

		}
		else if($link == "setinsertberita"){
				$config['upload_path'] = './assets/dist/img/berita';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$config['max_size']	= '2000';
				$config['$file_name'] = url_title($this->input->post('file_upload'));
				$this->load->library('upload', $config);
				$this->upload->do_upload();
				if(empty($this->upload->file_name)){
				$foto = 'notavailable.png';
				$datax['judul'] = $judul;
				$datax['berita'] = $berita;
				$datax['foto'] = $foto;
				$res = $this->m_skppegawai->insertberita($datax);
					redirect('dashboard/manajemenberita');
				}else{
				$foto = $this->upload->file_name;
				$datax['judul'] = $judul;
				$datax['berita'] = $berita;
				$datax['foto'] = $foto;

				$res = $this->m_skppegawai->insertberita($datax);
					if($res>0){
						redirect('dashboard/manajemenberita');
					}else{
					echo "ERROR 404";
				}
			}
		}

		else if($link == "updateberita"){
			$data['atasanp'] = $this->db->query("SELECT * FROM tb_berita")->result_array();
			$data['data'] = $this->m_skppegawai->getidberita($id);
			$data['page'] = "admin/i_berita";
		}
		else if($link == "setupdateberita"){
			$config['upload_path'] = './assets/dist/img/berita';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']	= '2000';
			$config['$file_name'] = url_title($this->input->post('file_upload'));
			$this->load->library('upload', $config);
			$this->upload->do_upload();
			$foto = $this->upload->file_name;
			$filefoto = $this->m_skppegawai->getidberita($_POST['id']);
			if ($foto == ""){
					$icon = $filefoto['foto'];
			}
			else {
				$delfoto = "./assets/dist/img/berita".$filefoto['foto'];
				unlink($delfoto);
				$icon = $foto;
			}
				$datax['judul'] = $judul;
				$datax['berita'] = $berita;
				$datax['foto'] = $icon;
				$res = $this->m_skppegawai->updateberita($datax,$_POST['id']);
					if($res>0){
						if($nip = $this->session->userdata('nip')){
							redirect('dashboard/manajemenberita');
						}else{
							redirect('dashboard/manajemenberita');
						}
				}else{
				echo "ERROR 404";
			}
		}
		else if($link == "deleteberita"){
			$filefoto = $this->m_skppegawai->deleteberita($id);
			$delfoto = "./assets/dist/img/berita".$filefoto['foto'];
			unlink($delfoto);
			$this->m_skppegawai->deleteberita($id);
			redirect('dashboard/manajemenberita');
		}

		$this->load->view('admin/index',$data);
		}
	}

	public function datapegawaiatas(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{
			$nip = $this->session->userdata('nip');
			$idx = $this->db->query("SELECT * FROM tb_datapegawai WHERE nip = $nip");
		 	$nama = $idx->row()->nama;
			$data['pegawai'] = $this->db->query("SELECT * FROM tb_datapegawai where pejabat_pnatasan = '$nama' ")->result_array();
			$data['page'] = "admin/v_datapegawaiatas";
			$this->load->view('admin/index',$data);
		}
	}

	public function kontrakkerjaatas(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{
	    	$nip = $this->uri->segment(3);
	    	$link = $this->uri->segment(4);

			$data['kontrakkerja'] = $this->db->query("SELECT * FROM tb_kontrakkerja where nip = $nip ")->result_array();
			$data['page'] = "admin/v_kontrakkerjaatas";

			if($link == "update"){
	    		$this->db->query("UPDATE tb_kontrakkerja SET konf = '0' WHERE nip = '$nip' ");
	    		$data['page'] = "admin/v_kontrakkerja";
	    	}
	    	if($link == "updatex"){
	    		$cek = $this->input->post('cek');
	    		for ($i=0; $i < count($cek) ; $i++) { 
	    			$idx = $cek[$i];
	    			$this->db->query("UPDATE tb_kontrakkerja SET konf = '1' WHERE nip = '$nip' AND id='$idx' ");
	    		}
	    		$data['page'] = "admin/v_kontrakkerjaatas";
	    	}
	    	$this->load->view('admin/index',$data);
		}
	}

	public function komentar(){
		if(!isset($_SESSION['login'])){
			redirect('login');
	    }else{
		    $nip = $this->session->userdata('nip');
			$data['komentar'] = $this->db->query("SELECT * FROM tb_komentar where dari=$nip OR ke=$nip ")->result_array();
			$data['page'] = "admin/v_komentar";

			$link = $this->uri->segment(3);
			$id = $this->uri->segment(4);

			$dari = addslashes($this->input->post('dari'));
			$ke = addslashes($this->input->post('ke'));
			$perihal = addslashes($this->input->post('perihal'));
			$komentar= addslashes($this->input->post('komentar'));

			if($link == "balaskomentar"){
				$data['komentar'] = $this->m_skppegawai->getidkomentar($id);
				$data['page'] = "admin/i_komentar";
			}
			else if($link == "input_komentar"){
		    	$datax['dari'] = $dari;
				$datax['ke'] = $ke;
				$datax['perihal'] = $perihal;
				$datax['komentar'] = $komentar;
				$this->m_skppegawai->insertkomentar($datax);
				redirect('dashboard/komentar');
	    		}
	    	$this->load->view('admin/index',$data);
		}
	}
}
?>