<?php 

/**
* 
*/
class Rute extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Rute_Model');
	}
	public function index(){
		$data['judul'] = "Tambah Rute";
		$data['trans'] = $this->Rute_Model->view_trans();
		$this->load->view('/template/header',$data);
		$this->load->view('/template/sidebar');
		$this->load->view('admin/rute-tambah', $data);
		$this->load->view('/template/footer');
	}

	public function tambah(){
		$data=array();
		$hai = $this->input->post('aksi');
		$setiap = $this->input->post('setiap');
		if ($hai == "manual") {
			$this->Rute_Model->tambah();
			redirect('Rute/view','refresh');
		}elseif ($hai == "otomatis" && $setiap == "day") {
			$this->Rute_Model->tambah_per_hari();
			redirect('Rute/view','refresh');
		}elseif ($hai == "otomatis" && $setiap == "week") {
			$this->Rute_Model->tambah_per_minggu();
			redirect('Rute/view','refresh');
		}
	}

	public function view(){
		$data['judul'] = "Data Rute";
		$data['rute'] = $this->Rute_Model->view_rute();
		$this->load->view('/template/header',$data);
		$this->load->view('/template/sidebar');
		$this->load->view('admin/rute');
		$this->load->view('/template/footer');
	}

	function hapus($id){
		$this->Rute_Model->hapus($id);
		redirect('rute/view','refresh');
	}

	function view_edit($id){
		$data['rute'] = $this->Rute_Model->view_edit($id);
		$data['trans'] = $this->Rute_Model->view_trans();
		$data['judul'] = "Data Rute";
		$this->load->view('/template/header',$data);
		$this->load->view('/template/sidebar');
		$this->load->view('admin/rute-edit', $data);
		$this->load->view('/template/footer');
	}

	function edit($id){
		$data=array();
		if ($this->input->post('submit')) {
			$this->Rute_Model->edit($id);
			$this->session->set_flashdata('success', 'Berhasil diedit');
			redirect('rute/view','refresh');
		}
	}
}