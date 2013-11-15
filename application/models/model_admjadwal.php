<?php
class model_admjadwal extends CI_Model {
	public $table = 'master_infojadwal';

	public function __construct() {
    	parent::__construct();
    }

    public function get_all_data() {
    	$query = $this->db->get($this->table);
        return $query->result();
    }

    /*public function update_info($data, $id) {
        $this->db->where('id_info', $id);
    	return $this->db->update($this->table, $data);
    }*/
}
?>