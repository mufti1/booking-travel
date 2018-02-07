<?php

/**
* 
*/
class Login_Model extends CI_Model
{
	function kode(){
		$this->db->select_max('id_user');
		return $this->db->get('user')->row();
	}

	function register($user){
		$this->db->insert('user', $user);
	}

	function username_check($username){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$query = $this->db->get();

		if ($query->num_rows()>0) {
			return false;
		}
		else{
			return true;
		}
	}

	function login_user($username, $password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);

		if ($query=$this->db->get()) {
			return $query->row_array();
		}
		else{
			return false;
		}
	}
}