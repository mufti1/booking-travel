<?php 
	/**
	* 
	*/
	class Home_Model extends CI_Model
	{
		function rute_from(){
			$this->db->select("rute_from");
			$this->db->distinct("rute_from");
			$this->db->from('rute');
			return $this->db->get()->result();
		}

		function rute_to(){
			$this->db->select("rute_to");
			$this->db->distinct("rute_to");
			$this->db->from('rute');
			return $this->db->get()->result();
		}

		function cari(){
			$this->db->select('*');
			$this->db->from('rute');
			$this->db->where('rute_from', $this->input->get('rute_from'));
			$this->db->where('rute_to', $this->input->get('rute_to'));
			$this->db->where('seat_qty >=', $this->input->get('penumpang'));
			$this->db->like('depart_at', $this->input->get('depart_at'));
			$this->db->join('transportation', 'rute.id_transportation = transportation.id_transportation');
			return $this->db->get()->result();
		}

		function view_booking(){
			$this->db->select('*');
			$this->db->from('rute');
			$this->db->where('rute_from', $this->input->get('rute_from'));
			$this->db->where('rute_to', $this->input->get('rute_to'));
			$this->db->where('depart_at', $this->input->get('depart_at'));
			$this->db->where('id_rute', $this->input->get('id_rute'));
			$this->db->join('transportation', 'rute.id_transportation = transportation.id_transportation');
			return $this->db->get()->row();
		}
	}