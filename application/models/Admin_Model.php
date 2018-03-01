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
		$this->db->order_by('id_reservation', 'desc');
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

	function hitung_tiket(){
		$this->db->select('count(id_reservation) as tiket');
		$this->db->where('status', 2);
		return $this->db->get('reservation')->row();
	}

	function penghasilan(){
		$a = date("Y-m-d");
		$b = date("Y-m-01", strtotime($a));
		$c = date("Y-m-t", strtotime($a));
		$this->db->select('distinct(reservation_code), sum(price) as hasil');
		$this->db->where('status', 2);
		$this->db->where('reservation_date >=', $b);
		$this->db->where('reservation_date <=', $c);
		return $this->db->get('reservation')->row();
	}

	function hitung_user(){
		$this->db->select('count(id_user) as user');
		return $this->db->get('user')->row();
	}

	function hitung_cust(){
		$this->db->select('count(id_customer) as cust');
		return $this->db->get('customer')->row();
	}

	function banner(){
		$config['upload_path'] = './assets/img';
		$config['allowed_types'] = 'jpg|png|jpeg|pdf';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;

			$this->load->library('upload', $config); // Load konfigurasi uploadnyasss

			if($this->upload->do_upload('file1')){
				$file1 = array('result' => 'success', 'files' => $this->upload->data(), 'error' => '');
			}
			else{
				$this->session->set_flashdata('error_msg',$this->upload->display_errors());
				redirect('admin');	
			}
			if ($this->upload->do_upload('file2')) {
				$file2 = array('result' => 'success', 'files' => $this->upload->data(), 'error' => '');
			}
			else{
				$this->session->set_flashdata('error_msg',$this->upload->display_errors());
				redirect('admin');	
			}
			if ($this->upload->do_upload('file3')) {
				$file3 = array('result' => 'success', 'files' => $this->upload->data(), 'error' => '');
			}
			else{
				$this->session->set_flashdata('error_msg',$this->upload->display_errors());
				redirect('admin');	
			}
			
			$data = array(
				"banner1" => $file1['files']['file_name'],
				"banner2" => $file2['files']['file_name'],
				"banner3" => $file3['files']['file_name']
			);
			$this->db->insert('banner', $data);
		}
	}
