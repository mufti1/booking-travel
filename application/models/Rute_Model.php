<?php 

/**
* 
*/
class Rute_Model extends CI_Model
{

	function view_trans(){
		$this->db->select('id_transportation, armada');
		return $this->db->get('transportation')->result();
	}

	function tambah(){
		$mulai = strtotime($this->input->post('depart_date'));
		$akhir = strtotime($this->input->post('arrive_date'));
		$wmulai = $this->input->post('depart_time');
		$wakhir = $this->input->post('arrive_time');

		$depart_at = date('Y-m-d', $mulai).' '.$wmulai;
		$arrive = date('Y-m-d', $akhir).' '.$wakhir;
		$data=array(
			'depart_at' => $depart_at,
			'rute_from' => $this->input->post('rute_from'),
			'rute_to' => $this->input->post('rute_to'),
			'arrival' => $arrive,
			'price' => $this->input->post('price'),
			'id_transportation' => $this->input->post('id_transportation')
		);

		$this->db->insert('rute', $data);
	}

	function tambah_per_hari(){
		$mulai = $this->input->post('dari');
		$akhir = $this->input->post('sampai');
		$wmulai = $this->input->post('depart_time_period');
		$wakhir = $this->input->post('arrive_time_period');

		for($i = strtotime($mulai); $i <= strtotime($akhir); $i = strtotime('+1 day', $i)){
			$depart_at['berangkat']= date('Y-m-d', $i).' '.$wmulai;
			$arrive['sampai']= date('Y-m-d', $i).' '.$wakhir;

			$data=array(
				'depart_at' => $depart_at['berangkat'],
				'rute_from' => $this->input->post('rute_from'),
				'rute_to' => $this->input->post('rute_to'),
				'arrival' => $arrive['sampai'],
				'price' => $this->input->post('price'),
				'id_transportation' => $this->input->post('id_transportation')
			);

			$this->db->insert('rute', $data);
		}
	}

	function tambah_per_minggu(){
		$mulai = $this->input->post('dari');
		$akhir = $this->input->post('sampai');
		$wmulai = $this->input->post('depart_time_period');
		$wakhir = $this->input->post('arrive_time_period');

		for($i = strtotime($mulai); $i <= strtotime($akhir); $i = strtotime('+1 week', $i)){
			$depart_at['berangkat']= date('Y-m-d', $i).' '.$wmulai;
			$arrive['sampai']= date('Y-m-d', $i).' '.$wakhir;

			$data=array(
				'depart_at' => $depart_at['berangkat'],
				'rute_from' => $this->input->post('rute_from'),
				'rute_to' => $this->input->post('rute_to'),
				'arrival' => $arrive['sampai'],
				'price' => $this->input->post('price'),
				'id_transportation' => $this->input->post('id_transportation')
			);

			$this->db->insert('rute', $data);
		}
	}

	function view_rute(){
		$this->db->order_by('id_rute', 'desc');
		return $this->db->get('rute')->result();
	}

	function hapus($id){
		$this->db->where('id_rute', $id);
		$this->db->delete('rute');
	}

	function view_edit($id){
		$this->db->where('id_rute', $id);
		$this->db->join('transportation', 'rute.id_transportation = transportation.id_transportation');
		return $this->db->get('rute')->row();
	}

	function edit($id){
		$data=array(
			'depart_at' => $this->input->post('depart_date'),
			'arrival' => $this->input->post('arrive_date'),
			'rute_from' => $this->input->post('rute_from'),
			'rute_to' => $this->input->post('rute_to'),
			'price' => $this->input->post('price'),
			'id_transportation' => $this->input->post('id_transportation')
		);

		$this->db->where('id_rute', $id);

		$this->db->update('rute', $data);
	}
}