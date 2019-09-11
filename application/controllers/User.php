<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){ redirect(base_url().'welcome?message=notloggedin');
		}
	}
	
	function index(){
		$data['customers'] = $this->db->query("select * from customers order by id desc limit 10")->result();
		$data['products'] = $this->db->query("select * from products order by id desc limit 10")->result();
		$data['categories'] = $this->db->query("select * from categories order by id desc limit 10")->result();
		$this->load->view('user/header');
		$this->load->view('user/index',$data);
		$this->load->view('user/footer');
	}

	function logout(){ 
		$this->session->sess_destroy(); redirect(base_url().'welcome?message=loggedout'); 
	}

	function customer(){ 
		$data['customers'] = $this->m_pos->get_data('customers')->result();
		 $this->load->view('user/header'); 
		 $this->load->view('user/customer',$data); 
		 $this->load->view('user/footer'); 
	}

	function product(){ 
		$data['products'] = $this->m_pos->get_data('products')->result(); 
		$this->load->view('user/header'); 
		$this->load->view('user/product',$data); 
		$this->load->view('user/footer'); 
	}

	function category(){ 
		$data['categories'] = $this->m_pos->get_data('categories')->result(); 
		$this->load->view('user/header'); 
		$this->load->view('user/category',$data); 
		$this->load->view('user/footer'); 
	}
}