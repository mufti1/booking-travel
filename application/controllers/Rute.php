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
			redirect('Rute','refresh');
		}elseif ($hai == "otomatis" && $setiap == "day") {
			$this->Rute_Model->tambah_per_hari();
			redirect('Rute','refresh');
		}elseif ($hai == "otomatis" && $setiap == "week") {
			$this->Rute_Model->tambah_per_minggu();
			redirect('Rute','refresh');
		}
	}
}