<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdmAturan extends CI_Controller {
	public function __construct() {
    	parent::__construct();
    	$this->load->model('model_aturan', 'ma');
    }

    public function index() {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['aturan'] = $this->ma->get_all_data();
    	$data['options'] = array(
    		'periode' => 'Periode',
    		'status'	=> 'Status'
    	);
    	$data['msg'] = null;

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('keyword', 'Keyword', 'trim|required');
		$this->form_validation->set_rules('search_key', 'Search keyword', 'trim|required');

		if ($this->form_validation->run()) {
			$keyword = $this->input->post('keyword');
			$search = $this->input->post('search_key');
			$result = $this->ma->searchAturan($keyword, $search);

			if ($result) {
				$data['aturan'] = $result;
			} else {
				$data['msg'] = 'No data result found';
			}			
		}

    	$data['content'] = 'admin/aturan/index';
    	$this->load->view('admin/admin_index', $data);
    }

    public function add() {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('period', 'Periode', 'trim|required');
		$this->form_validation->set_rules('aturan', 'Aturan', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run()) {
			$arrData['period'] = $this->input->post('period');
			$arrData['aturan'] = $this->input->post('aturan');
			$arrData['status'] = $this->input->post('status');

			if ($result = $this->ma->saveAturan($arrData)) {
				redirect('admin/AdmAturan/');
			} else {
				$data['msg'] = 'No result found';
			}			
		}

    	$data['content'] = 'admin/aturan/add';
    	$this->load->view('admin/admin_index', $data);
    }
    
    public function edit($id = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['aturan'] = $this->ma->getAturanById($id);

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('period', 'Periode', 'trim|required');
		$this->form_validation->set_rules('aturan', 'Aturan', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run()) {
			$arrData['id_aturan'] = $this->input->post('id_aturan');
			$arrData['period'] = $this->input->post('period');
			$arrData['aturan'] = $this->input->post('aturan');
			$arrData['status'] = $this->input->post('status');

			if ($result = $this->ma->updateAturan($arrData, $arrData['id_aturan'])) {
				redirect('admin/AdmAturan/');
			} else {
				$data['msg'] = 'No result found';
			}			
		}

    	$data['content'] = 'admin/aturan/edit';
    	$this->load->view('admin/admin_index', $data);
    }

    public function delete($id = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}
		
    	if ($this->ma->deleteAturan($id)) {
    		redirect('admin/AdmAturan/');
    	} else {
    		$data['msg'] = 'Couldn\'t delete data' ;
    		$data['content'] = 'admin/aturan/index';
    		$this->load->view('admin/admin_index', $data);
    	}
    }

    public function view($id = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['aturan'] = $this->ma->getAturanById($id);
    	$data['msg'] = null ;
    	$data['content'] = 'admin/aturan/view';
    	$this->load->view('admin/admin_index', $data);
    }

}