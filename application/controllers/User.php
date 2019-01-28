<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('User_Model');
	}
	public function index(){

		$data['konten']="home";
		$this->load->view('template',$data);
	}

	public function Profil(){
		$data['konten']="v_profil";
		$this->load->view('template', $data);
	}
	public function gallery(){
		$data['konten']="gallery";
		$this->load->view('template', $data);
	}
	public function event(){
		$data['konten']="event";
		$this->load->view('template', $data);
	}
	public function login(){
		$this->form_validation->set_rules('Username','Username','trim|required');
		$this->form_validation->set_rules('Password','Password','trim|required');

		if ($this->form_validation->run() == TRUE) {
			if ($this->User_Model->CekUser() == TRUE) {
				redirect(base_url('index.php/Pelanggan'));
			}else {
				$this->session->set_flashdata('notif',"username atau password salah");
				redirect(base_url('index.php/User/FormLogin'));
			}
		}else {
			$this->session->set_flashdata('notif',validasi_errors());
			redirect(base_url(index.php/User/FormLogin));
		}
	}
	public function Logout()
	{
		$this->session->sess_destroy();
		$this->load->view('login');
	}
}
?>
