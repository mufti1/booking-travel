<?php 

/**
* 
*/
class User extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_Model');
		$level = $this->session->userdata('level');
		if ($level != "muftiganteng") {
			redirect('/','refresh');
		}
	}

	public function index(){
		$data['user'] = $this->User_Model->view_user();
		$this->load->view('/template/header');
		$this->load->view('/template/sidebar');
		$this->load->view('admin/user', $data);
		$this->load->view('/template/footer');
	}

	public function view_edit($id){
		$data['user'] = $this->User_Model->view_by($id);
		$this->load->view('/template/header');
		$this->load->view('/template/sidebar');
		$this->load->view('admin/user-edit', $data);
		$this->load->view('/template/footer');
	}

	function hapus($id){
		$this->User_Model->hapus($id);
		redirect('user','refresh');
	}

	function edit($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->User_Model->edit($id);
			$this->session->set_flashdata('success', 'Berhasil diedit');
			redirect('user','refresh');
		}
	}

	function tambah(){
		$data=array();
		if ($this->input->post('submit')) {
			$this->User_Model->tambah();
			redirect('user','refresh');
		}else{
			$data['user'] = $this->User_Model->view_kode();
			$this->load->view('/template/header');
			$this->load->view('/template/sidebar');
			$this->load->view('admin/user-tambah', $data);
			$this->load->view('/template/footer');
		}
	}
	
}