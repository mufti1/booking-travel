<?php 

	/**
	* 
	*/
	class Home extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Home_Model');
		}

		public function index(){
			$data['judul'] = "Home";
			$data['rute'] = $this->Home_Model->rute_from();
			$data['rute_to'] = $this->Home_Model->rute_to();
			$this->load->view('/template/depan_header',$data);
			$this->load->view('/home/flight', $data);
		}

		public function test(){
			$data['judul'] = "Home";
			$this->load->view('/template/depan_header',$data);
			$this->load->view('/home/test');
			$this->load->view('/template/depan_footer',$data);
		}

		public function result(){
			$data['judul'] = "Hasil pencarian";
			
			$data['rute'] = $this->Home_Model->cari();
			$this->load->view('/template/depan_header', $data);
			$this->load->view('/home/result', $data);
			$this->load->view('/template/depan_footer');	
		}

		public function user_booking(){
			$data['book'] = $this->Home_Model->view_booking();
			$data['customer'] = $this->Home_Model->kode_cust();
			$data['seat'] = $this->Home_Model->view_seat();
			$data['judul'] = "Booking";
			$this->load->view('/template/depan_header', $data);
			$this->load->view('/home/book', $data);
			$this->load->view('/template/depan_footer');	
		}

		public function booking(){
			
			$data=array();
			$this->Home_Model->booking();
			// $this->Home_Model->add_cust();

			redirect('home','refresh');
		}
	}