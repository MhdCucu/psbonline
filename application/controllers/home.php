<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
    	parent::__construct();
    	$this->load->model('model_aturan', 'ma');
    	$this->load->model('model_jadwal', 'mj');
    	$this->load->model('model_pendaftar', 'mp');
    	$this->load->model('model_siswa', 'ms');
    }

	public function index() {
		$data['content'] = 'home';
		$this->load->view('index', $data);
	}

	public function aturan() {
		$data['umum'] = $this->ma->get_data_by_status('umum');
		$data['syarat'] = $this->ma->get_data_by_status('syarat');
		$data['tatacara'] = $this->ma->get_data_by_status('tatacara');

		$data['content'] = 'aturan';
		$data['menu'] = 'Aturan & Prosedur';
		$data['title'] = 'ATURAN&PROSEDUR';
		$this->load->view('index', $data);
	}

	public function jadwal() {
		$data['jadwal'] = $this->mj->get_all_data();

		$data['content'] = 'jadwal';
		$data['menu'] = 'Jadwal Pelaksanaan';
		$data['title'] = 'JADWAL';
		$this->load->view('index', $data);
	}

	public function formulir_pendaftaran() {
		$data['content'] = 'formulir';
		$data['menu'] = 'Formulir Pendaftaran';
		$data['title'] = 'FORMULIR';
		$this->load->view('index', $data);
	}

	public function data_pendaftar() {
		$data['pendaftar'] = $this->mp->get_all_data();

		$data['content'] = 'pendaftar';
		$data['menu'] = 'Data Pendaftar';
		$data['title'] = 'PENDAFTAR';
		$this->load->view('index', $data);
	}

	public function pengumuman() {
		$data['pengumuman'] = $this->ms->get_data_by_status('1');

		$data['content'] = 'pengumuman';
		$data['menu'] = 'Pengumuman';
		$data['title'] = 'PENGUMUMAN';
		$this->load->view('index', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */