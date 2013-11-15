<?php
class model_user extends CI_Model {
	public $table = 'master_user';

    public $status = array(
        '0' => 'Non Active',
        '1' => 'Active',
        '2' => 'Blocked'
    );

	public function __construct() {
    	parent::__construct();
    }

    public function get_data_user($user, $pwd) {
        $this->db->where('username', $user)->where('password', md5($pwd));
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function getAllUser() {
        $this->db->select('*')->from($this->table)->join('roles', 'roles.id = '. $this->table .'.role_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function save_session($result) {
    	if (count($result) > 0) {
            if ($result->role_id == 1) {
                $data = array(
                    'adm_user_id'   => $result->id_user,
                    'adm_username'  => $result->username,
                    'adm_role'      => $result->role_id
                );
            } else {
                $data = array(
                    'user_id'   => $result->id_user,
                    'username'  => $result->username,
                    'role'      => $result->role_id
                );
            }
    		
            $this->session->set_userdata($data);
            return true;
    	}
    	return false;
    }

    public function save_user($data) {
        return $this->db->insert($this->table, $data);
    }

    public function user_logout() {
    	$this->session->sess_destroy();
    	return true;
    }

    public function getAllStatus(){
        asort($this->status);
        $arrData = array();
        foreach ($this->status as $key => $value) {
            $arrData[$key] = $value;
        }

        return $arrData;
    }

    public function getStatusById($id) {
        $arrStatus = array();
        foreach ($this->status as $key => $value) {
            if ($key = $id) {
                $arrStatus[$key] = $value;
            }
        }
        return $arrStatus;
    }

    public function getUserById($id) {
        $this->db->where('id_user', $id);
        return $this->db->get($this->table)->row();
    }

    public function updateUser($data, $id) {
        $this->db->where('id_user', $id);
        return $this->db->update($this->table, $data);
    }

    public function deleteUser($id) {
        $this->db->where('id_user', $id);
        return $this->db->delete($this->table);
    }
}
?>