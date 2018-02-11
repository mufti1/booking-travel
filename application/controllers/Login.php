<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_Model');
	}
	public function index()
	{
		$this->load->view('/template/header');
		$this->load->view('auth/login');
		$this->load->view('/template/footer');
	}

	public function register(){
		$data['user'] = $this->Login_Model->kode();
		$this->load->view('/template/header');
		$this->load->view('auth/register',$data);
		$this->load->view('/template/footer');
	}

	public function register_aksi(){
		$user=array(
			'id_user' => $this->input->post('id_user'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'fullname' => $this->input->post('fullname'),
			'level' => "1"
		);

		$username_check = $this->Login_Model->username_check($user['username']);

		if ($username_check) {
			$this->Login_Model->register($user);
			redirect('login','refresh');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Username Sudah Ada');
			redirect('login/register','refresh');
		}
	}

	public function auth(){
		$data_login=array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);

		$data=$this->Login_Model->login_user($data_login['username'], $data_login['password']);

		if ($data) {
			$lv = $data['level'];
			$this->session->set_userdata('id_user', $data['id_user']);
			$this->session->set_userdata('username', $data['username']);
			$this->session->set_userdata('level', $data['level']);
			if ($lv = 'muftiganteng') {
				
				redirect('admin');
			}elseif($lv = '1'){
				redirect('/','refresh');
			}
		}
		else{
			echo("error");
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/','refresh');
	}
}
