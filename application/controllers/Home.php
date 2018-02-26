<?php 

	/**
	* 
	*/
	class Home extends CI_Controller
	{
		public function __construct()
		{

			parent::__construct();
			$this->load->helper('url');
			$this->load->library('pagination');
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
			$data['sisa'] = $this->Home_Model->sisa();

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
			$kode = $this->input->post('reservation_code[0]');
			redirect('/Home/payment/'.$kode,'refresh');
		}

		public function send_payment(){
			$data=array();
			$this->Home_Model->send_payment();

			redirect('/Home','refresh');
		}

		//payment
		public function payment($kode){
			$data['payment'] = $this->Home_Model->payment($kode);
			$data['penumpang'] = $this->Home_Model->hitung_penumpang($kode);
			$this->load->view('/template/depan_header');
			$this->load->view('/home/payment', $data);
			$this->load->view('/template/depan_footer');
		}
		//payment

		//setting

		public function setting($ids){
			$data['judul'] = "My-Account";

			$config['base_url'] = base_url()."Home/setting/$ids/";
			$config['total_rows'] = $this->db->query("SELECT * FROM reservation where id_user ='$ids'")->num_rows();
			$config['per_page']=3;
			$config['num_links'] = 2;
			$config['uri_segment']=4;
		//Tambahan untuk styling
			$config['full_tag_open'] = "<div class='pager'>";
			$config['full_tag_close'] ="</div>";
			$config['num_tag_open'] = '<span>';
			$config['num_tag_close'] = '</span>';
			$config['cur_tag_open'] = "<span>";
			$config['cur_tag_close'] = "</span>";
			$config['next_tag_open'] = "<span>";
			$config['next_tagl_close'] = "</span>";
			$config['prev_tag_open'] = "<span>";
			$config['prev_tagl_close'] = "</span>";
			$config['first_tag_open'] = "<span>";
			$config['first_tagl_close'] = "</span>";
			$config['last_tag_open'] = "<span>";
			$config['last_tagl_close'] = "</span>";

			$config['first_link']='<span> Pertama </span>';
			$config['last_link']='<span> Terakhir </span>';
			$config['next_link']='&gt;';
			$config['prev_link']='&lt;';
			

			$this->pagination->initialize($config);
			$data['reservation']=$this->Home_Model->setting($config, $ids);

			$this->load->view('/template/depan_header', $data);
			$this->load->view('/home/account',$data);
			$this->load->view('/template/depan_footer');
		}

		public function print_tiket($id_customer){
			$data['judul'] = "PRINT TIKET";
			$data['reservation'] = $this->Home_Model->print_tiket($id_customer);
			
			$this->load->view('/template/depan_header', $data);
			$this->load->view('/home/tiket', $data);
			$this->load->view('/template/depan_footer');
		}
	}