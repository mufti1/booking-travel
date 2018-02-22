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
			$this->db->like('depart_at', $this->input->get('depart_at'));
			$this->db->join('transportation', 'rute.id_transportation = transportation.id_transportation');
			return $this->db->get()->result();
		}

		function sisa(){
			$this->db->select('count(id_reservation) as uhuy');
			$this->db->from('rute');
			$this->db->where('rute_from', $this->input->get('rute_from'));
			$this->db->where('rute_to', $this->input->get('rute_to'));
			$this->db->like('reservation.depart_at', $this->input->get('depart_at'));
			$this->db->join('reservation', 'rute.id_rute = reservation.id_rute');
			return $this->db->get()->row();
		}

		function payment($kode){
			$this->db->select('*');
			$this->db->from('reservation');
			$this->db->where('reservation_code', $kode);
			$this->db->join('rute', 'reservation.id_rute = rute.id_rute');
			$this->db->join('transportation', 'reservation.id_transportation = transportation.id_transportation');
			return $this->db->get()->row();
		}

		function hitung_penumpang($kode){
			$this->db->select('count(*) AS "penumpang"');
			$this->db->from('reservation');
			$this->db->where('reservation_code', $kode);
			return $this->db->get()->row();
		}

		function send_payment(){
			$data=array(
				'price' => $this->input->post('price'),
				'status' => 2
			);
			$this->db->where('reservation_code', $this->input->post('rcode'));
			$this->db->update('reservation', $data);
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
			for ($i=0; $i < $this->input->post('penumpang') ; $i++) { 
				
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
					'seat_code' => $this->input->post('seat_code['.$i.']'),
					'status' => 0
				);

				$this->db->insert('reservation', $data);

				$cust=array(
					'id_customer' => $this->input->post('id_customer['.$i.']'),
					'name' => $this->input->post('name['.$i.']'),
					'address' => $this->input->post('address['.$i.']'),
					'phone' => $this->input->post('phone['.$i.']'),
					'gender' => $this->input->post('gender['.$i.']'),
					'kebutuhan' => $this->input->post('kebutuhan['.$i.']')
				);

				$this->db->insert('customer', $cust);
			}
		}

		function kode_cust(){
			$this->db->select_max('id_customer');
			return $this->db->get('customer')->row();
		}

		function setting($config, $ids){
			$this->db->select('*');
			$this->db->where('id_user', $ids);
			$this->db->join('rute',  'reservation.id_rute = rute.id_rute');
			$this->db->join('customer', 'reservation.id_customer = customer.id_customer');
			$this->db->order_by('id_reservation', 'desc');
			$hasilquery=$this->db->get('reservation', $config['per_page'], $this->uri->segment(4));

			if ($hasilquery->num_rows() > 0) {
				foreach($hasilquery->result() as $value){
					$data[]=$value;
				}
				return $data;
			}
		}

		function print_tiket($id_customer){
			$this->db->select('*');
			$this->db->from('reservation');
			$this->db->where('customer.id_customer', $id_customer);
			$this->db->join('customer', 'reservation.id_customer = customer.id_customer');
			$this->db->join('rute', 'reservation.id_rute = rute.id_rute');
			return $this->db->get()->row();
		}
	}