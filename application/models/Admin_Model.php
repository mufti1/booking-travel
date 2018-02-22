<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function kode_cust(){
		$this->db->select_max('id_customer');
		return $this->db->get('customer')->row();
	}

	public function simpan(){
		$data=array(
			'id_customer' => $this->input->post('id_customer'),
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'gender' => $this->input->post('gender')
		);
		$this->db->insert('customer', $data);
	}

	public function view_customer($config){
		$hasilquery=$this->db->get('customer', $config['per_page'], $this->uri->segment(3));

		if ($hasilquery->num_rows() > 0) {
			foreach($hasilquery->result() as $value){
				$data[]=$value;
			}
			return $data;
		}
	}

	public function hapus_customer($id_customer){
		$this->db->where('id_customer', $id_customer);
		$this->db->delete('customer');
	}

	public function view_id_customer($id_customer){
		$this->db->where('id_customer', $id_customer);
		return $this->db->get('customer')->row();
	}

	public function edit_customer($id_customer){
		$data=array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'gender' => $this->input->post('gender')
		);
		$this->db->where('id_customer', $id_customer);
		$this->db->update('customer', $data);
	}

	public function search_customer($nama){
		$this->db->like('name', $nama);
		return $this->db->get('customer')->result();
	}

	function tiket(){
		$this->db->where('status', 2);
		$this->db->join('customer', 'reservation.id_customer = customer.id_customer');
		return $this->db->get('reservation')->result();
	}

	function terima($kode){
		$data=array(
			'status' => 3
		);

		$this->db->where('reservation_code', $kode);
		$this->db->update('reservation', $data);
		redirect('Admin','refresh');
	}

	function batal($kode){
		$data=array(
			'status' => 0
		);

		$this->db->where('reservation_code', $kode);
		$this->db->update('reservation', $data);
		redirect('Admin','refresh');
	}
}
