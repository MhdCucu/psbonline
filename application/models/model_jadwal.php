<?php
class model_jadwal extends CI_Model {
	public $table = 'master_infojadwal';

	public function __construct() {
    	parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getJadwalById($id) {
    	$this->db->where('id_jadwal', $id);
    	return $this->db->get($this->table)->row();
    }

    public function search_jadwal ($keyword = null, $search = null) {
    	if ($keyword) {
    		if ($keyword == 'periode') {
	    		$this->db->like('period', $search);
	    	} else if ($keyword == 'kegiatan') {
	    		$this->db->like('kegiatan', $search);
	    	}
    	}    	

    	$query = $this->db->get($this->table);
    	return $query->result();
    }

    public function saveJadwal($data) {
    	return $this->db->insert($this->table, $data);
    }

    public function updateJadwal($data, $id) {
    	$this->db->where('id_jadwal', $id);
    	return $this->db->update($this->table, $data);
    }

    public function deleteJadwal($id) {
    	$this->db->where('id_jadwal', $id);
    	return $this->db->delete($this->table);
    }
}
?>