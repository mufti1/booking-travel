<?php 

/**
* 
*/
class Transportasi extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Transportasi_Model');
	}
	public function index(){
		$data['transportasi'] = $this->Transportasi_Model->view();
		$this->load->view('/template/header');
		$this->load->view('/template/sidebar');
		$this->load->view('admin/transportasi', $data);
		$this->load->view('/template/footer');
	}

	public function tambah(){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Transportasi_Model->tambah();
			$this->session->set_flashdata('success', 'Berhasil Menambahkan');
			redirect('transportasi','refresh');
		}else{
			$data['kode'] = $this->Transportasi_Model->view_kode();
			$this->load->view('/template/header');
			$this->load->view('/template/sidebar');
			$this->load->view('admin/transportasi-tambah', $data);
			$this->load->view('/template/footer');
		}
	}

	public function hapus($id){
		$this->Transportasi_Model->hapus($id);
		$this->session->set_flashdata('success', 'Berhasil Menghapus');
		redirect('Transportasi','refresh');
	}

	public function view_edit($id){
		$data['transportasi'] = $this->Transportasi_Model->view_by($id);
		$this->load->view('/template/header');
		$this->load->view('/template/sidebar');
		$this->load->view('admin/transportasi-edit', $data);
		$this->load->view('/template/footer');
	}

	function edit($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Transportasi_Model->edit($id);
			$this->session->set_flashdata('success', 'Berhasil diedit');
			redirect('Transportasi','refresh');
		}
	}
}