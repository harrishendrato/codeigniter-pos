<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login")
		{
			redirect(base_url().'welcome?message=notlogin');
		}
	}
	
	function index()
	{
		$data['customers'] = $this->db->query("select * from customers order by id desc limit 10")->result();
		$data['products'] = $this->db->query("select * from products order by id desc limit 10")->result();
		$data['categories'] = $this->db->query("select * from categories order by id desc limit 10")->result();
		$this->load->view('user/header');
		$this->load->view('user/index',$data);
		$this->load->view('user/footer');
	}

	function logout()
	{ 
		$this->session->sess_destroy();
		redirect(base_url().'welcome?message=logout'); 
	}

	function customer()
	{ 
		$data['customers'] = $this->m_pos->get_data('customers')->result();
		$this->load->view('user/header'); 
		$this->load->view('user/customer',$data); 
		$this->load->view('user/footer'); 
	}

	function customer_add()
	{ 
		$this->load->view('user/header'); 
		$this->load->view('user/customer_add'); 
		$this->load->view('user/footer'); 
	}

	function customer_add_act()
	{ 
		$name = $this->input->post('name'); 
		$address = $this->input->post('address'); 
		$created_at = $this->input->post('created_at', timestamp); 
		$updated_at = $this->input->post('updated_at', timestamp);  
		$this->form_validation->set_rules('name','Name','required'); 
		$this->form_validation->set_rules('address','Address','required'); 

		if($this->form_validation->run() != false)
		{ 
			$data = array( 
			'name' => $name, 
			'address' => $address,
			'created_at' => $created_at,
			'updated_at'=> $updated_at 
			);
			$this->m_pos->insert_data($data,'customers'); 
			redirect(base_url().'user/customer'); 
		}
		else
		{ 
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
					'address' => $address,
					'created_at' => $created_at,
					'updated_at'=> $updated_at
				); 
				$this->m_pos->update_data($where,$data,'customers');
				redirect(base_url().'user/customer'); 
			}else{ 
				$where = array( 
					'id' => $id 
				); 
				$data['customers'] = $this->m_pos->edit_data($where,'customers')->result(); 
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

	function product_add(){ 
		$this->load->view('user/header'); 
		$this->load->view('user/product_add'); 
		$this->load->view('user/footer'); 
	}

	function product_add_act(){ 
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$created_at = $this->input->post('created_at');
		$updated_at = $this->input->post('updated_at');
		$this->form_validation->set_rules('name','Name','required'); 
		$this->form_validation->set_rules('price','Price','required'); 

			if($this->form_validation->run() != false){ 
				$data = array( 
				'name' => $name,
				'price' => $price,
				'created_at' => $created_at,
				'updated_at'=> $updated_at
			);
			$this->m_pos->insert_data($data,'products'); 
			redirect(base_url().'user/product'); 
		}else{ 
			$this->load->view('user/header'); 
			$this->load->view('user/product_add');
			$this->load->view('user/footer'); 
		} 
	}

	function product_edit($id){ 
		$where = array( 
			'id' => $id 
		); 
		$data['products'] = 
		$this->m_pos->edit_data($where,'products')->result(); 
		$this->load->view('user/header'); 
		$this->load->view('user/product_edit',$data);
		 $this->load->view('user/footer'); 
	}

	function product_update(){ 
		$id = $this->input->post('id');
		$name = $this->input->post('name'); 
			$price = $this->input->post('price'); 
			$category_id = $this->input->post('category_id'); 
			$created_at = $this->input->post('created_at'); 
			$updated_at = $this->input->post('updated_at'); 
			$this->form_validation->set_rules('name','Name','required'); 
			$this->form_validation->set_rules('price','Price Mobil','required'); 
			if($this->form_validation->run() != false){ 
				$where = array( 
					'id' => $id 
				); 
				$data = array( 
					'name' => $name, 
					'price' => $price, 
					'category_id' => $category_id, 
					'created_id' => $created_at, 
					'updated_id' => $updated_at 
				); 
				$this->m_pos->update_data($where,$data,'products'); redirect(base_url().'user/product'); 
			}else{ 
				$where = array( 
					'id' => $id 
				); 
				$data['products'] = $this->m_pos->edit_data($where,'products')->result(); 
				$this->load->view('user/header');
				 $this->load->view('user/product_edit',$data); 
				 $this->load->view('user/footer'); 
		} 
	}

	function product_delete($id){ 
		$where = array( 
			'id' => $id
			); 
		$this->m_pos->delete_data($where,'products');
		redirect(base_url().'user/product'); 
		} 

	function category(){ 
		$data['categories'] = $this->m_pos->get_data('categories')->result(); 
		$this->load->view('user/header'); 
		$this->load->view('user/category',$data); 
		$this->load->view('user/footer'); 
	}

	function category_add(){ 
		$this->load->view('user/header'); 
		$this->load->view('user/category_add'); 
		$this->load->view('user/footer'); 
	}

	function category_add_act(){ 
		$name = $this->input->post('name'); 
		$created_at = $this->input->post('created_at'); 
		$updated_at = $this->input->post('updated_at'); 
		$this->form_validation->set_rules('name','Name','required');

			if($this->form_validation->run() != false){ 
				$data = array( 
				'name' => $name, 
				'created_at' => $created_at, 
				'updated_at' => $updated_at 
			);
			$this->m_pos->insert_data($data,'categories'); 
			redirect(base_url().'user/category'); 
		}else{ 
			$this->load->view('user/header'); 
			$this->load->view('user/category_add');
			$this->load->view('user/footer'); 
		} 

	function category_edit($id){ 
		$where = array( 
			'id' => $id 
		); 
		$data['categories'] = 
		$this->m_pos->edit_data($where,'categories')->result(); 
		$this->load->view('user/header'); 
		$this->load->view('user/category_edit',$data);
		$this->load->view('user/footer'); 
	}

	function category_update(){ 
		$name = $this->input->post('name');
		$created_at = $this->input->post('created_at'); 
			$updated_at = $this->input->post('updated_at');   
			$this->form_validation->set_rules('name','Name','required');  
			if($this->form_validation->run() != false){ 
				$where = array( 
					'id' => $id 
				); 
				$data = array( 
					'name' => $name,
					'created_at' => $created_at, 
					'updated_at' => $updated_at 
				); 
				$this->m_pos->update_data($where,$data,'categories');
				redirect(base_url().'user/category'); 
			}else{ 
				$where = array( 
					'id' => $id 
				); 
				$data['categories'] = $this->m_pos->edit_data($where,'categories')->result(); 
				$this->load->view('user/header');
				$this->load->view('user/category_edit',$data); 
				$this->load->view('user/footer'); 
		} 
	}

	function category_delete($id){ 
		$where = array( 
			'id' => $id
			); 
		$this->m_pos->delete_data($where,'categories');
		redirect(base_url().'user/category'); 
		} 

		function sale()
		{ 
			$data['sales'] = $this->m_pos->get_data('sales')->result();
			$this->load->view('user/header'); 
			$this->load->view('user/sale',$data); 
			$this->load->view('user/footer'); 
		}

		function sale_add(){ 
			$this->load->view('user/header'); 
			$this->load->view('user/sale_add'); 
			$this->load->view('user/footer'); 
		}
	
		function sale_add_act(){ 
			$customer_id = $this->input->post('customer_id'); 
			$total = $this->input->post('total'); 
			$created_at = $this->input->post('created_at'); 
			$updated_at = $this->input->post('updated_at'); 
			$this->form_validation->set_rules('customer_id','Customer ID','required'); 
			$this->form_validation->set_rules('total','Total','required'); 
	
				if($this->form_validation->run() != false){ 
					$data = array( 
					'customer_id' => $customer_id, 
					'total' => $total, 
					'created_at' => $created_at, 
					'updated_at' => $updated_at
				);
				$this->m_pos->insert_data($data,'sales'); 
				redirect(base_url().'user/sale'); 
			}else{ 
				$this->load->view('user/header'); 
				$this->load->view('user/sale_add');
				$this->load->view('user/footer'); 
			} 
		}
	
		function sale_edit($id){ 
			$where = array( 
				'id' => $id 
			); 
			$data['sales'] = 
			$this->m_pos->edit_data($where,'sales')->result(); 
			$this->load->view('user/header'); 
			$this->load->view('user/sale_edit',$data);
			 $this->load->view('user/footer'); 
		}
	
		function sale_update(){ 
				$id = $this->input->post('id');
				$customer_id = $this->input->post('customer_id'); 
				$total = $this->input->post('total'); 
				$created_at = $this->input->post('created_at'); 
				$updated_at = $this->input->post('updated_at');  
				$this->form_validation->set_rules('customer_id','Customer ID','required'); 
				$this->form_validation->set_rules('total','Total','required'); 
				if($this->form_validation->run() != false){ 
					$where = array( 
						'id' => $id 
					); 
					$data = array( 
						'customer_id' => $customer_id, 
						'total' => $total, 
						'created_at' => $created_at, 
						'updated_at' => $updated_at
					); 
					$this->m_pos->update_data($where,$data,'sales');
					redirect(base_url().'user/sale'); 
				}else{ 
					$where = array( 
						'id' => $id 
					); 
					$data['sales'] = $this->m_pos->edit_data($where,'sales')->result(); 
					$this->load->view('user/header');
					 $this->load->view('user/sale_edit',$data); 
					 $this->load->view('user/footer'); 
			} 
		}
	
		function sale_delete($id){ 
			$where = array( 
				'id' => $id
				); 
			$this->m_pos->delete_data($where,'sales');
			redirect(base_url().'user/sale'); 
			} 

			function customer()
	{ 
		$data['customers'] = $this->m_pos->get_data('customers')->result();
		$this->load->view('user/header'); 
		$this->load->view('user/customer',$data); 
		$this->load->view('user/footer'); 
	}

	function sale_item_add()
	{ 
		$this->load->view('user/header'); 
		$this->load->view('user/sale_item_add'); 
		$this->load->view('user/footer'); 
	}

	function sale_item_add_act()
	{ 
		$price = $this->input->post('price'); 
		$subtotal = $this->input->post('subtotal'); 
		$product_id = $this->input->post('product_id', timestamp); 
		$sale_id = $this->input->post('sale_id', timestamp);  
		$this->form_validation->set_rules('product_id','Product ID','required'); 
		$this->form_validation->set_rules('sale_id','Sale ID','required'); 

		if($this->form_validation->run() != false)
		{ 
			$data = array( 
			'price' => $price, 
			'subtotal' => $subtotal,
			'product_id' => $product_id,
			'sale_id' => $sale_id 
			);
			$this->m_pos->insert_data($data,'sale_items'); 
			redirect(base_url().'user/sale_item'); 
		}
		else
		{ 
			$this->load->view('user/header'); 
			$this->load->view('user/sale_item_add');
			$this->load->view('user/footer'); 
		} 
	}

	function sale_item_edit($id){ 
		$where = array( 
			'id' => $id 
		); 
		$data['sale_items'] = 
		$this->m_pos->edit_data($where,'sale_items')->result(); 
		$this->load->view('user/header'); 
		$this->load->view('user/sale_item_edit',$data);
		$this->load->view('user/footer'); 
	}

	function sale_item_update(){ 
		$id = $this->input->post('id'); 
		$qty = $this->input->post('qty'); 
		$price = $this->input->post('price'); 
		$subtotal = $this->input->post('subtotal'); 
		$product_id = $this->input->post('product_id');
		$sale_id = $this->input->post('sale_id'); 
		$created_at = $this->input->post('created_at'); 
		$updated_at = $this->input->post('updated_at');  
		$this->form_validation->set_rules('product_id','Product ID','required'); 
		$this->form_validation->set_rules('sale_id','Sale ID','required'); 
			if($this->form_validation->run() != false){ 
				$where = array( 
					'id' => $id 
				); 
				$data = array( 
					'qty' => $qty, 
					'price' => $price,
					'subtotal' => $subtotal,
					'product_id' => $product_id,
					'sale_id' => $sale_id,
					'created_at' => $created_at,
					'updated_at' => $updated_at
				); 
				$this->m_pos->update_data($where,$data,'sale_items');
				redirect(base_url().'user/sale_item'); 
			}else{ 
				$where = array( 
					'id' => $id 
				); 
				$data['sale_items'] = $this->m_pos->edit_data($where,'sale_items')->result(); 
				$this->load->view('user/header');
				$this->load->view('user/sale_item_edit',$data); 
				$this->load->view('user/footer'); 
		}
	}

	function sale_item_delete($id){ 
		$where = array( 
			'id' => $id
			); 
		$this->m_pos->delete_data($where,'sale_items');
		redirect(base_url().'user/sale_item'); 
		} 
}
}