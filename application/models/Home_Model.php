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
			$this->db->where('seat_av >=', $this->input->get('penumpang'));
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

		function view_seat(){
			$this->db->select('seat_code');
			$this->db->from('reservation');
			$this->db->where('id_rute',  $this->input->get('id_rute'));
			return $this->db->get()->result();
		}

		function booking(){
			for ($i=1; $i <= $this->input->post('penumpang') ; $i++) { 
				$data=array(
					'reservation_code' => $this->input->post('reservation_code['.$i.']'),
					'reservation_at' => $this->input->post('reservation_at['.$i.']'),
					'reservation_date' => $this->input->post('reservation_date['.$i.']'),
					'id_customer' => $this->input->post('id_customer['.$i.']'),
					'id_transportation' => $this->input->post('id_transportation['.$i.']'),
					'id_rute' => $this->input->post('id_rute['.$i.']'),
					'depart_at' => $this->input->post('depart_at['.$i.']'),
					'price' => $this->input->post('price['.$i.']'),
					'id_user' => $this->input->post('id_user['.$i.']'),
					'seat_code' => $this->input->post('seat_code['.$i.']')
				);

				$this->db->insert('reservation', $data);

				$cust=array(
					'id_customer' => $this->input->post('id_customer['.$i.']'),
					'name' => $this->input->post('name['.$i.']'),
					'address' => $this->input->post('address['.$i.']'),
					'phone' => $this->input->post('phone['.$i.']'),
					'gender' => $this->input->post('gender['.$i.']')
				);

				$this->db->insert('customer', $cust);

				$t=array(
					'seat_av' => $this->input->post('seat_av')
				);
				$this->db->where('id_transportation', $this->input->post('id_t'));
				$this->db->update('transportation', $t);

			}
		}

		function kode_cust(){
			$this->db->select_max('id_customer');
			return $this->db->get('customer')->row();
		}
	}