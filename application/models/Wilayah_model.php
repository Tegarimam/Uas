<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah_model extends CI_Model{

	public $tabel = 'wilayah';
	public $id = 'id_wilayah';
	public $order = 'ASC';
	

	function get_all(){
		$this->db->order_by($this->id, $this->order);
		return $this->db->get($this->tabel)->result();
	}
		//tambah data
	function insert($data){
		$this->db->insert($this->tabel, $data);
	}

		//update date
	function update($id, $data){

		$this->db->where($this->id, $id);
		$this->db->update($this->tabel, $data);
	}

		//hapus data
	function delete($id){

		$this->db->where($this->id, $id);
		$this->db->delete($this->tabel);
	}

	public function getById($id){
		return $this->db->get_where($this->tabel, ["id_wilayah" => $id])
		->row();
	}


}
 ?>