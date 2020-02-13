<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Wilayah_model', 'Wilayah');
	}

	public function index(){
		$data["Wilayah"] = $this->Wilayah->get_all();
		$this->load->view('Wilayah/index',$data);

	}


	function add(){
		$data = array(
			'button' => 'Tambah',
			'judul' => 'wilayah',
			'id_wilayah' => set_value('id_wilayah'),
			'nama_wilayah' => set_value('nama_wilayah'),
			'action' => site_url('wilayah/addsave'),
			'wilayah' => set_value('wilayah'),
			'data_wilayah' => set_value('data_wilayah'),
			'keterangan' => set_value('keterangan'),
			);
		$this->load->view('wilayah/form' ,$data);

	}
	
	public function addsave(){
		//$this->_rules();
		//if ($this->form_validation->run() == FALSE) {
		//	$this->add();
		//}else {
			$data = array(
				'id_wilayah' => $this->input->post('id_wilayah'),
				'nama_wilayah' => $this->input->post('nama_wilayah'),
				'wilayah' => $this->input->post('wilayah'),
				'data_wilayah' => $this->input->post('data_wilayah'),
				// 'data_wilayah' => $this->_uploadImage(), 
				'keterangan' => $this->input->post('keterangan')
		);
			//echo()
			//print_r($data);
			$insert = $this->Wilayah->insert($data);
			redirect(site_url('wilayah'));

	}

	//  private function _uploadImage(){
	//  	$config['upload_path']	= './assets/upload/';
	//  	$config['allowed_types'] = 'gif|jpg|png';
	//  	$config['overwrite'] =true;
	//  	$config['max_size']	= 1824;

	//  	$this->load->library('upload', $config);
	//  	if ($this->upload->do_upload('icon')) {
	//  		return $this->upload->data("file_name");
	//  	}
	//  	return "icon.png";
	//  }

	 public function delete($id){
	 	//$this->_deleteImage($id);
	 	$this->Wilayah->delete($id);
	 	redirect("wilayah");

	 }

	//  private function _deleteImage($id){
	//  	$kategori = $this->kategori->getById($id);
	//  	if($kategori->icon != "icon.png"){
	//  		$filename = explode(".", $kategori->icon)[0];
	//  		return array_map('unlink', glob(FCPATH."assets/upload/$filename.*"));
	//  	}
	//  }

	 public function update($id)
	 {
	 	$row = $this->Wilayah->getById($id);
	 	if ($row) {
	 		$data = array(
	 			'button' => 'Ubah',
	 			'action' => site_url('wilayah/updatesave'),
	 			'id_wilayah' => set_value('id_wilayah', $row->id_wilayah),
	 			'nama_wilayah' => set_value('nama_wilayah', $row->nama_wilayah),
	 			'wilayah' => set_value('wilayah', $row->wilayah),
	 			'data_wilayah' => set_value('data_wilayah', $row->data_wilayah),
	 			'keterangan' => set_value('keterangan',$row->keterangan),
	 			);
	 	$this->load->view('wilayah/form', $data);
	 	}
	 }

	 public function updatesave()
	 {
	 	$data = array(
				'nama_wilayah' => $this->input->post('nama_wilayah', TRUE),
				'wilayah' => $this->input->post('wilayah', TRUE),
				'data_wilayah' => $this->input->post('data_wilayah', TRUE),
				// 'icon' => $this->_uploadImage(), 
				'keterangan' => $this->input->post('keterangan', TRUE)
		);
		$this->Wilayah->update($this->input->post('id_wilayah',TRUE), $data);
		redirect(site_url('wilayah/index'));
	 }
}	

 ?>