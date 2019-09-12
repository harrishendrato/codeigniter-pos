<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){ 
		parent::__construct(); 
		$this->load->model('m_pos');
	}
	
	public function index() {
		$this->load->view('login');
	}
	
	function login(){
		$email = $this->input->post('email'); 
		$password = $this->input->post('password'); 
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() != false){ 
			$where = array( 
				'email' => $email, 
				'password' => md5($password) 
			);
			$data = $this->m_pos->edit_data($where,'users'); 
			$d = $this->m_pos->edit_data($where,'users')->row();
			$cek = $data->num_rows();
			if($cek > 0){
				$session = array( 
					'id'=> $d->id, 
					'name'=> $d->name, 
					'status' => 'login' 
				); 
				$this->session->set_userdata($session); 
				redirect(base_url().'user'); 
			}else{ 
				redirect(base_url().'welcome?message=failed'); 
			} 
		}else{ 
			$this->load->view('login'); 
		} 
	}
}
