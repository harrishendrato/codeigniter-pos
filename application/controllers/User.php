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

	function customer_add(){ 
		$this->load->view('user/header'); 
		$this->load->view('user/mobil_add'); 
		$this->load->view('user/footer'); 
	}

	function customer_add_act(){ 
		$name = $this->input->post('name'); 
		$address = $this->input->post('address'); 
		$created_at = $this->input->post('created_at', timestamp); 
		$updated_at = $this->input->post('updated_at', timestamp);  
		$this->form_validation->set_rules('name','Name','required'); 
		$this->form_validation->set_rules('address','Address','required'); 

			if($this->form_validation->run() != false){ 
				$data = array( 
				'name' => $name, 
				'address' => $address 
			);
			$this->m_pos->insert_data($data,'customers'); 
			redirect(base_url().'user/customer'); 
		}else{ 
			$this->load->view('user/header'); 
			$this->load->view('user/customer_add');
			$this->load->view('user/footer'); 
		} 
	}

	function customer_edit($id){ 
		$where = array( 
			'id' => $id 
		); 
		$data['customers'] = 
		$this->m_pos->edit_data($where,'customers')->result(); 
		$this->load->view('user/header'); 
		$this->load->view('user/customer_edit',$data);
		$this->load->view('user/footer'); 
	}

	function customer_update(){ 
		$id = $this->input->post('id'); 
		$name = $this->input->post('name'); 
		$address = $this->input->post('address'); 
		$created_at = $this->input->post('created_at'); 
		$updated_at = $this->input->post('updated_at');  
		$this->form_validation->set_rules('name','Name','required'); 
		$this->form_validation->set_rules('address','Address','required'); 
			if($this->form_validation->run() != false){ 
				$where = array( 
					'id' => $id 
				); 
				$data = array( 
					'name' => $name, 
					'address' => $address 
				); 
				$this->m_pos->update_data($where,$data,'customer');
				redirect(base_url().'user/customer'); 
			}else{ 
				$where = array( 
					'id' => $id 
				); 
				$data['customer'] = $this->m_pos->edit_data($where,'customer')->result(); 
				$this->load->view('user/header');
				$this->load->view('user/customer_edit',$data); 
				$this->load->view('user/footer'); 
		}
	}

	function customer_delete($id){ 
		$where = array( 
			'id' => $id
			); 
		$this->m_pos->delete_data($where,'customer');
		redirect(base_url().'user/customer'); 
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