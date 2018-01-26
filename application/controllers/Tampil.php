<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil extends CI_Controller {

	public function index()
	{
		$this->load->model('Tampil_Model');
		$data['customer']=$this->Tampil_Model->TampilData();
		$this->load->view('/admin/tampil', $data);
	}
}
