<?php 

/**
* 
*/
class User_Model extends CI_Model
{
	function view_user(){
		return $this->db->get('user')->result();
	}

	function view_by($id){
		$this->db->where('id_user', $id);
		return $this->db->get('user')->row();
	}

	function hapus($id){
		$this->db->where('id_user', $id);
		$this->db->delete('user');
	}

	function edit($id){
		$data=array(
			'username' => $this->input->post('username'),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'),
			
		);
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}

	function view_kode(){
		$this->db->select_max('id_user');
		return $this->db->get('user')->row();
	}

	function tambah(){
		$data=array(
			'id_user' => $this->input->post('id_user'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level'),
			'fullname' => $this->input->post('fullname')
		);

		$this->db->insert('user', $data);
	}
}