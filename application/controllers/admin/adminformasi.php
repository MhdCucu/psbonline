<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdmInformasi extends CI_Controller {
	public function __construct() {
    	parent::__construct();
    	$this->load->model('model_informasi', 'mi');
    }

    public function index() {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}
		
    	$data['informasi'] = $this->mi->get_all_data();
    	$data['msg'] = null;
    	$data['content'] = 'admin/admin_informasi';

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('period', 'Periode', 'trim|required');
		$this->form_validation->set_rules('info_beranda', 'Info Beranda', 'trim|required');
		$this->form_validation->set_rules('info_sekolah', 'Info Sekolah', 'trim|required');

		if ($this->form_validation->run()) {
			$id_info = $this->input->post('id_info');
			$arrData['period'] = $this->input->post('period');
			$arrData['info_beranda'] = $this->input->post('info_beranda');
			$arrData['info_sekolah'] = $this->input->post('info_sekolah');

			if ($this->mi->update_info($arrData, $id_info)) {
				$data['msg'] = 'has been updated';
				redirect('admin/adminformasi');
			} else {
				$data['msg'] = 'unable to update';
			}			
		}

    	$this->load->view('admin/admin_index', $data);
    }

}