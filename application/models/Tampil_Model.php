<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tampil_Model extends CI_Model {
	function TampilData(){
		return $this->db->get('customer')->result();
	}
}
