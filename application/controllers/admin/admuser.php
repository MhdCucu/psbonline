<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdmUser extends CI_Controller {

	public function __construct() {
    	parent::__construct();
    	$this->load->model('model_user', 'mu');
    	$this->load->model('model_role', 'mr');
    }

	public function index() {
		if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

		$data['content'] = 'admin/user/index';
		$this->load->view('admin/admin_index', $data);
	}

	public function logout() {
		if ($this->mu->user_logout()) {
			redirect('admin/admuser');
		}
	}

	public function login() {
		if ($this->session->userdata('adm_user_id')) {
			redirect('admin/admuser');
		}

		$data['msg'] = null;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_name', 'Username', 'trim|required');
		$this->form_validation->set_rules('user_password', 'Password', 'trim|required');

		if ($this->form_validation->run()) {
			$username = $this->input->post('user_name');
			$password = $this->input->post('user_password');

			$dataUser = $this->mu->get_data_user($username, $password);
			
			if (count($dataUser) > 0){
				if ($dataUser->role_id != 3 && $dataUser->status_user == 1) {
					if ($this->mu->save_session($dataUser)) {
						redirect('admin/admuser', 'refresh');
					} else {
						$data['msg'] = 'Tidak dapat menyimpan session user';
					}
				} else {
					$data['msg'] = 'Anda tidak dapat login menggunakan akun tersebut';
				}
			} else {
				$data['msg'] = 'Username atau password tidak sesuai';
			}
		}
		
		$this->load->view('login', $data);
	}

	public function manage($msg = null) {
		if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

		$data['msg'] = !empty($msg) ? str_replace('%20', ' ', $msg) : null;		
		$data['arrStatus'] = $this->mu->getAllStatus();
		$data['users'] = $this->mu->getAllUser();
		$data['content'] = 'admin/user/manage';
		$this->load->view('admin/admin_index', $data);
	}

	public function add() {
		if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

		$arrStatus = $this->mu->getAllStatus();
		$arrRoles = $this->mr->getListRole();
		$data['msg'] = null;
		$data['status'] = $arrStatus;
		$data['roles'] = $arrRoles;
    	$data['content'] = 'admin/user/add';
				

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('status_user', 'status_user', 'trim|required');
		$this->form_validation->set_rules('role_id', 'role_id', 'trim|required');


		if ($this->form_validation->run()) {
			$arrData['username'] = $this->input->post('username');
			$arrData['email'] = $this->input->post('email');
			$arrData['password'] = $this->input->post('password');
			$arrData['status_user'] = $this->input->post('status_user');
			$arrData['role_id'] = $this->input->post('role_id');


			if ($this->mu->save_user($arrData)) {
				redirect('admin/admuser/manage');
			} else {
				$data['msg'] = 'No result found';
			}			
		}

		$this->load->view('admin/admin_index', $data);
    }

    public function profile($msg = null) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$id = $this->session->userdata('adm_user_id');
    	$arrUser = $this->mu->getUserById($id);
    	$data['arrStatus'] = $this->mu->getAllStatus();
    	$data['arrRoles'] = $this->mr->getRoleById($arrUser->role_id);
    	$data['arrUser'] = $arrUser;
    	$data['msg'] = (!empty($msg)) ? str_replace('%20', ' ', $msg) : null;
    	$data['content'] = 'admin/user/profile';

    	$this->load->view('admin/admin_index', $data);
    }

    public function ajax_currentPassword() {
		if ($this->input->is_ajax_request()) {
			$id = $this->session->userdata('adm_user_id');
			$password = $this->input->post('password');

			$dataUser = $this->mu->getUserById($id);

			$result = false;

			if (md5($password) == $dataUser->password) {
				$result = true;
			}

			echo json_encode($result);
		}
	}

	public function change_password() {
		if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

		if ($_POST) {
			$arrData['password'] = md5($this->input->post('newpassword'));
			$id_user = $this->input->post('id_user');
			if ($this->mu->updateUser($arrData, $id_user)) {
				$msg = 'Password has been updated';
			} else {
				$msg = 'Password can\'t updated';
			}
			redirect('admin/admuser/profile/'. $msg);
		} else {
			$msg = 'Null references';
			redirect('admin/admuser/profile/'. $msg);
		}
	}

	public function delete($id = null) {
		if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}
		
    	if ($this->mu->deleteUser($id)) {
    		$msg = 'User has been deleted' ;
    	} else {
    		$msg = 'Couldn\'t delete data' ;
    	}

    	redirect('admin/admuser/manage/'. $msg);
	}

	public function edit($id) {
    	if (!$this->session->userdata('adm_user_id')) {
			redirect('admin/admuser/login');
		}

    	$data['arrUser'] = $this->mu->getUserById($id);
    	$arrStatus = $this->mu->getAllStatus();
		$arrRoles = $this->mr->getListRole();
		$data['msg'] = null;
		$data['status'] = $arrStatus;
		$data['roles'] = $arrRoles;

    	if ($_POST) {
			$arrData['username'] = $this->input->post('username');
			$arrData['email'] = $this->input->post('email');
			$arrData['status_user'] = $this->input->post('status_user');
			$arrData['role_id'] = $this->input->post('role_id');
			$id_user = $this->input->post('id_user');

			if ($result = $this->mu->updateUser($arrData, $id_user)) {
				redirect('admin/admuser/manage');
			} else {
				$data['msg'] = 'User failed to updated';
			}			
		}

    	$data['content'] = 'admin/user/edit';
    	$this->load->view('admin/admin_index', $data);
    }

}

/* End of file admuser.php */
/* Location: ./application/controllers/admin/admuser.php */