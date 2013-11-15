<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdmJadwal extends CI_Controller {
	public function __construct() {
    	parent::__construct();
    	$this->load->model('model_jadwal', 'mj');
    }

    public function index() {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['jadwal'] = $this->mj->get_all_data();
    	$data['options'] = array(
    		'periode' => 'Periode',
    		'kegiatan'	=> 'Kegiatan'
    	);
    	$data['msg'] = null;

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('keyword', 'Keyword', 'trim|required');
		$this->form_validation->set_rules('search_key', 'Search keyword', 'trim|required');

		if ($this->form_validation->run()) {
			$keyword = $this->input->post('keyword');
			$search = $this->input->post('search_key');
			$result = $this->mj->search_jadwal($keyword, $search);

			if ($result) {
				$data['jadwal'] = $result;
			} else {
				$data['msg'] = 'No data result found';
			}			
		}

    	$data['content'] = 'admin/admin_jadwal';
    	$this->load->view('admin/admin_index', $data);
    }

    public function add() {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('period', 'Periode', 'trim|required');
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'trim|required');

		if ($this->form_validation->run()) {
			$arrData['period'] = $this->input->post('period');
			$arrData['kegiatan'] = $this->input->post('kegiatan');
			$arrData['tanggal'] = $this->input->post('tanggal');
			$arrData['tempat'] = $this->input->post('tempat');

			if ($result = $this->mj->saveJadwal($arrData)) {
				redirect('admin/admjadwal/');
			} else {
				$data['msg'] = 'No result found';
			}			
		}

    	$data['content'] = 'admin/jadwal/add';
    	$this->load->view('admin/admin_index', $data);
    }

    public function edit($id = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['jadwal'] = $this->mj->getJadwalById($id);

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('period', 'Periode', 'trim|required');
		$this->form_validation->set_rules('kegiatan', 'Kegiatan', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'trim|required');
		$this->form_validation->set_rules('tempat', 'Tempat', 'trim|required');

		if ($this->form_validation->run()) {
			$arrData['id_jadwal'] = $this->input->post('id_jadwal');
			$arrData['period'] = $this->input->post('period');
			$arrData['kegiatan'] = $this->input->post('kegiatan');
			$arrData['tanggal'] = $this->input->post('tanggal');
			$arrData['tempat'] = $this->input->post('tempat');

			if ($result = $this->mj->updateJadwal($arrData, $arrData['id_jadwal'])) {
				redirect('admin/admjadwal/');
			} else {
				$data['msg'] = 'No result found';
			}			
		}

    	$data['content'] = 'admin/jadwal/edit';
    	$this->load->view('admin/admin_index', $data);
    }

    public function delete($id = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}
		
    	if ($this->mj->deleteJadwal($id)) {
    		redirect('admin/admjadwal/');
    	} else {
    		$data['msg'] = 'Couldn\'t delete data' ;
    		$data['content'] = 'admin/admin_jadwal';
    		$this->load->view('admin/admin_index', $data);
    	}
    }

    public function view($id = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['jadwal'] = $this->mj->getJadwalById($id);
    	$data['msg'] = null ;
    	$data['content'] = 'admin/jadwal/view';
    	$this->load->view('admin/admin_index', $data);
    }

}