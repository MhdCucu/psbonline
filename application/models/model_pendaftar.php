<?php
class model_pendaftar extends CI_Model {
	public $table = 'master_pendaftar';

	public function __construct() {
    	parent::__construct();
    }

    public function get_all_data() {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    /*public function get_data_by_status($status) {
        $this->db->where('status', $status);
        $query = $this->db->get($this->table);
        return $query->result();
    }
	*/
    public function getPendaftarById($id) {
    	$this->db->where('kode_pendaftar', $id);
    	return $this->db->get($this->table)->row();
    }

    public function searchPendaftar($keyword = null, $search = null) {
    	if ($keyword) {
    		if ($keyword == 'kode_pendaftar') {
	    		$this->db->like('kode_pendaftar', $search);
	    	} else if ($keyword == 'nama_siswa') {
	    		$this->db->like('nama_siswa', $search);
	    	}
    	}    	

    	$query = $this->db->get($this->table);
    	return $query->result();
    }

    public function savePendaftar($data) {
    	return $this->db->insert($this->table, $data);
    }

    public function updatePendaftar($data, $id) {
    	$this->db->where('kode_pendaftar', $id);
    	return $this->db->update($this->table, $data);
    }

    public function deletePendaftar($id) {
    	$this->db->where('kode_pendaftar', $id);
    	return $this->db->delete($this->table);
    }
}
?>