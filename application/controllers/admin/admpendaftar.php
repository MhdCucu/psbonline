<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdmPendaftar extends CI_Controller {
	public function __construct() {
    	parent::__construct();
    	$this->load->model('model_pendaftar', 'mp');
    }

    public function index() {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['pendaftar'] = $this->mp->get_all_data();
    	$data['options'] = array(
    		'kode_pendaftar' => 'No pendaftaran',
    		'nama_siswa'	=> 'Nama'
    	);
    	$data['msg'] = null;

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('keyword', 'Keyword', 'trim|required');
		$this->form_validation->set_rules('search_key', 'Search keyword', 'trim|required');

		if ($this->form_validation->run()) {
			$keyword = $this->input->post('keyword');
			$search = $this->input->post('search_key');
			$result = $this->ma->searchPendaftar($keyword, $search);

			if ($result) {
				$data['pendaftar'] = $result;
			} else {
				$data['msg'] = 'No data result found';
			}			
		}

    	$data['content'] = 'admin/pendaftar/index';
    	$this->load->view('admin/admin_index', $data);
    }
    
    public function add() {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$this->load->library('form_validation');
		/*$this->form_validation->set_rules('kode_pendaftar', 'No Pendaftaran', 'trim|required');*/
		$this->form_validation->set_rules('nama_siswa', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'trim|required');
		$this->form_validation->set_rules('no_telepon', 'No Telepon', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('pihak_wali', 'Pihak yang dihubungi', 'trim|required');
		$this->form_validation->set_rules('nama_ortu', 'Nama Orangtua', 'trim|required');
		$this->form_validation->set_rules('alamat_ortu', 'Alamat Orangtua', 'trim|required');
		$this->form_validation->set_rules('agama_ortu', 'Agama Orangtua', 'trim|required');
		$this->form_validation->set_rules('pilihan_1', 'Pilihan ke-1', 'trim|required');
		$this->form_validation->set_rules('pilihan_2', 'Pilihan ke-2', 'trim|required');
		$this->form_validation->set_rules('smp', 'Asal Sekolah', 'trim|required');
		$this->form_validation->set_rules('lama_belajar', 'Lama Belajar', 'trim|required');
		$this->form_validation->set_rules('nilai_skhun', 'Nilai SKHUN', 'trim|required');


		if ($this->form_validation->run()) {
			/*$arrData['kode_pendaftar'] = $this->input->post('kode_pendaftar');*/
			$arrData['nama_siswa'] = $this->input->post('nama_siswa');
			$arrData['nama_panggilan'] = $this->input->post('nama_panggilan');
			$arrData['tempat_lahir'] = $this->input->post('tempat_lahir');
			$arrData['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$arrData['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$arrData['agama'] = $this->input->post('agama');
			$arrData['gol_darah'] = $this->input->post('gol_darah');
			$arrData['alamat'] = $this->input->post('alamat');
			$arrData['no_telepon'] = $this->input->post('no_telepon');
			$arrData['email'] = $this->input->post('email');
			$arrData['pihak_wali'] = $this->input->post('pihak_wali');
			$arrData['nama_ortu'] = $this->input->post('nama_ortu');
			$arrData['alamat_ortu'] = $this->input->post('alamat_ortu');
			$arrData['agama_ortu'] = $this->input->post('agama_ortu');
			$arrData['pilihan_1'] = $this->input->post('pilihan_1');
			$arrData['pilihan_2'] = $this->input->post('pilihan_2');
			$arrData['smp'] = $this->input->post('smp');
			$arrData['lama_belajar'] = $this->input->post('lama_belajar');
			$arrData['nilai_skhun'] = $this->input->post('nilai_skhun');

			if ($result = $this->mp->savePendaftar($arrData)) {
				redirect('admin/AdmPendaftar/');
			} else {
				$data['msg'] = 'No result found';
			}			
		}

    	$data['content'] = 'admin/pendaftar/add';
    	$this->load->view('admin/admin_index', $data);
    }
    
    public function edit($id = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['pendaftar'] = $this->mp->getPendaftarById($id);

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('kode_pendaftar', 'No Pendaftaran', 'trim|required');
		$this->form_validation->set_rules('nama_siswa', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		$this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Lengkap', 'trim|required');
		$this->form_validation->set_rules('no_telepon', 'No Telepon', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('pihak_wali', 'Pihak yang dihubungi', 'trim|required');
		$this->form_validation->set_rules('nama_ortu', 'Nama Orangtua', 'trim|required');
		$this->form_validation->set_rules('alamat_ortu', 'Alamat Orangtua', 'trim|required');
		$this->form_validation->set_rules('agama_ortu', 'Agama Orangtua', 'trim|required');
		$this->form_validation->set_rules('pilihan_1', 'Pilihan ke-1', 'trim|required');
		$this->form_validation->set_rules('pilihan_2', 'Pilihan ke-2', 'trim|required');
		$this->form_validation->set_rules('smp', 'Asal Sekolah', 'trim|required');
		$this->form_validation->set_rules('lama_belajar', 'Lama Belajar', 'trim|required');
		$this->form_validation->set_rules('nilai_skhun', 'Nilai SKHUN', 'trim|required');

		if ($this->form_validation->run()) {
			$arrData['kode_pendaftar'] = $this->input->post('kode_pendaftar');
			$arrData['nama_siswa'] = $this->input->post('nama_siswa');
			$arrData['nama_panggilan'] = $this->input->post('nama_panggilan');
			$arrData['tempat_lahir'] = $this->input->post('tempat_lahir');
			$arrData['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$arrData['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$arrData['agama'] = $this->input->post('agama');
			$arrData['gol_darah'] = $this->input->post('gol_darah');
			$arrData['alamat'] = $this->input->post('alamat');
			$arrData['no_telepon'] = $this->input->post('no_telepon');
			$arrData['email'] = $this->input->post('email');
			$arrData['pihak_wali'] = $this->input->post('pihak_wali');
			$arrData['nama_ortu'] = $this->input->post('nama_ortu');
			$arrData['alamat_ortu'] = $this->input->post('alamat_ortu');
			$arrData['agama_ortu'] = $this->input->post('agama_ortu');
			$arrData['pilihan_1'] = $this->input->post('pilihan_1');
			$arrData['pilihan_2'] = $this->input->post('pilihan_2');
			$arrData['smp'] = $this->input->post('smp');
			$arrData['lama_belajar'] = $this->input->post('lama_belajar');
			$arrData['nilai_skhun'] = $this->input->post('nilai_skhun');

			if ($result = $this->mp->updatePendaftar($arrData, $arrData['kode_pendaftar'])) {
				redirect('admin/AdmPendaftar/');
			} else {
				$data['msg'] = 'No result found';
			}			
		}

    	$data['content'] = 'admin/pendaftar/edit';
    	$this->load->view('admin/admin_index', $data);
    }

    public function delete($id = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}
		
    	if ($this->mp->deletePendaftar($id)) {
    		redirect('admin/AdmPendaftar/');
    	} else {
    		$data['msg'] = 'Couldn\'t delete data' ;
    		$data['content'] = 'admin/pendaftar/index';
    		$this->load->view('admin/admin_index', $data);
    	}
    }

    public function view($id = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['pendaftar'] = $this->mp->getPendaftarById($id);
    	$data['msg'] = null ;
    	$data['content'] = 'admin/pendaftar/view';
    	$this->load->view('admin/admin_index', $data);
    }
	
}