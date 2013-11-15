<?php
class model_informasi extends CI_Model {
	public $table = 'master_info';

	public function __construct() {
    	parent::__construct();
    }

    public function get_all_data() {
    	return $this->db->get($this->table)->row();
    }

    public function update_info($data, $id) {
        $this->db->where('id_info', $id);
    	return $this->db->update($this->table, $data);
    }
}
?>