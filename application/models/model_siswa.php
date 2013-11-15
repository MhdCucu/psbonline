<?php
class model_siswa extends CI_Model {
	public $table = 'master_siswa';

	public function __construct() {
    	parent::__construct();
    }

    public function get_data_by_status($status) {
        $this->db->where('status_siswa', $status);
        $query = $this->db->get($this->table);
        return $query->result();
    }
}
?>