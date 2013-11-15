<?php
class model_role extends CI_Model {
	public $table = 'roles';

	public function __construct() {
    	parent::__construct();
    }

    public function getListRole() {
    	$query = $this->db->get($this->table)->result();
    	$roles = array();
    	if (count($query) > 0) {
    		$i = 1;
			foreach ($query as $key => $value) {
				$roles[$i] = $value->name;
				$i++;
			}
    	}
    	return $roles;
    }

    public function getListRoleById($id) {
    	$query = $this->db->get($this->table)->result();
    	$roles = array();
    	if (count($query) > 0) {
			foreach ($query as $key => $value) {
				if ($key = $id) {
					$roles[$key] = $value->name;
				}
			}
    	}
    	return $roles;
    }

    public function getRoleById($id) {
        $this->db->where('id', $id);
        return $this->db->get($this->table)->row();
    }
}
?>