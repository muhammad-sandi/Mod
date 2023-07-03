<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model {

    public function getDataKategori(){
		$this->db->select('*');
		$this->db->from('kategori k');
		$this->db->join('content c', 'k.id_content = c.id', 'left');
		$query = $this->db->get()->result_array();
		return $query;
	}
    
    public function getJumlahAplikasi(){
		$this->db->select('*');
		$this->db->from('content');
		$query = $this->db->get()->num_rows();
		return $query;
	}
    
}