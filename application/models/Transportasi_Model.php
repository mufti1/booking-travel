<?php 

/**
* 
*/
class Transportasi_Model extends CI_Model
{
	
	function view_kode(){
		$this->db->select_max('id_transportation');
		return $this->db->get('transportation')->row();
	}

	function view(){
		return $this->db->get('transportation')->result();
	}

	function view_by($id){
		$this->db->where('id_transportation', $id);
		return $this->db->get('transportation')->row();
	}

	function tambah(){
		$data=array(
			'id_transportation' => $this->input->post('id_transportation'),
			'code' => $this->input->post('code'),
			'armada' => $this->input->post('armada'),
			'seat_qty' => $this->input->post('seat_qty')
		);
		$this->db->insert('transportation', $data);
	}

	function hapus($id){
		$this->db->where('id_transportation', $id);
		$this->db->delete('transportation');
	}

	function edit($id){
		$data=array(
			'code' => $this->input->post('code'),
			'armada' => $this->input->post('armada'),
			'seat_qty' => $this->input->post('seat_qty')
		);

		$this->db->where('id_transportation', $id);
		$this->db->update('transportation', $data);
	}
	
}