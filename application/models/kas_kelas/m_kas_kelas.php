<?php 

class M_kas_kelas extends CI_Model{
	function tampil_data(){
		$this->db->order_by('tanggal', 'ASC');
		return $this->db->get('kas_kelas');
		return $this->db->get('kas_ganjil');
	}

	function cek_input($table,$where){		
		return $this->db->get_where($table,$where);
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
 
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}