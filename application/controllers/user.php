<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
    	parent::__construct();
    	$this->load->library('email');
    	$this->load->model('model_user', 'mu');
    }

	public function index() {
		if (!$this->session->userdata('user_id')) {
			redirect('user/login');
		}

		$data['user_header'] = 'user/user_header';
		$data['user_social'] = 'user/user_social';
		$data['content'] = 'user/user_home';
		$this->load->view('index', $data);
	}

	public function logout() {
		if ($this->mu->user_logout()) {
			redirect('/');
		}
	}

	public function login() {
		if ($this->session->userdata('user_id')) {
			redirect('user');
		}

		$data['msg'] = null;		
		$this->load->view('user_login', $data);
	}

	public function ajax_login() {
		if ($this->input->is_ajax_request()) {
			$username = $this->input->post('user_name');
			$password = $this->input->post('user_password');
			$dataUser = $this->mu->get_data_user($username, $password);
			$result = null;
			if (count($dataUser) > 0){
				if ($dataUser->role_id == 3 && $dataUser->status_user == 1) {
					if ($this->mu->save_session($dataUser)) {
						$result = true;
					} else {
						$result = 'Tidak dapat menyimpan session user';
					}
				} else {
					$result = 'Anda tidak dapat login menggunakan akun tersebut';
				}
			} else {
				$result = 'Username atau password tidak sesuai';
			}

			echo json_encode($result);
		}
	}

	public function register() {
		$data['msg'] = null;
		$this->load->view('user_register', $data);
	}

	public function ajax_register() {
		if ($this->input->is_ajax_request()) {
			$username = $this->input->post('user_name');
			$email = $this->input->post('email');
			$password = $this->input->post('user_password');

			$dataUser = $this->mu->get_data_user($username, $password);
			$result = null;
			if ($dataUser) {
				$result = 'User telah tersedia, silahkan login atau coba username lain';
			} else {
				$arrUser = array(
					'username' => $username,
					'email' => $email,
					'password' => md5($password),
					'status_user' => 1,
					'role_id' => 3
				);

				$data_result = $this->mu->save_user($arrUser);
				if ($data_result) {
					$send_mail = $this->send_email($email, 'PSB Online Registration');
					if ($send_mail == true) {
						$result = true;
					} else {
						$result = $send_mail;
					}
				} else {
					$result = 'User tidak dapat didaftarkan, silahkan ulangi';
				}
			}

			echo json_encode($result);
		}
	}

	public function test_email() {
		$this->send_email('mhd.cucu@gmail.com', 'Test Email');
	}

	public function send_email($to, $subject) {
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_user'] = 'mhd.z3r0th1nk@gmail.com';
		$config['smtp_pass'] = 'z3r0th1nk';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$this->email->initialize($config);

		$this->email->from('mhd.z3r0th1nk@gmail.com', 'PSB Online');
        $this->email->to($to); 
        $this->email->subject($subject);
        $this->email->message('Testing the email class.');
        if ($this->email->send()) {
        	return true;
        } else {
        	show_error($this->email->print_debugger());
        }

	}
}

/* End of file home.php */
/* Location: ./application/controllers/user.php */