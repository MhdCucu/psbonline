<?php
class model_aturan extends CI_Model {
	public $table = 'master_aturan';

	public function __construct() {
    	parent::__construct();
    }

    public function get_data_by_status($status) {
        $this->db->where('status', $status);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function get_all_data() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getAturanById($id) {
    	$this->db->where('id_aturan', $id);
    	return $this->db->get($this->table)->row();
    }

    public function searchAturan($keyword = null, $search = null) {
    	if ($keyword) {
    		if ($keyword == 'periode') {
	    		$this->db->like('period', $search);
	    	} else if ($keyword == 'aturan') {
	    		$this->db->like('aturan', $search);
	    	}
    	}    	

    	$query = $this->db->get($this->table);
    	return $query->result();
    }

    public function saveAturan($data) {
    	return $this->db->insert($this->table, $data);
    }

    public function updateAturan($data, $id) {
    	$this->db->where('id_aturan', $id);
    	return $this->db->update($this->table, $data);
    }

    public function deleteAturan($id) {
    	$this->db->where('id_aturan', $id);
    	return $this->db->delete($this->table);
    }
}
?>