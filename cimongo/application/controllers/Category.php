<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


	function __construct()
    {
		parent::__construct();
		$this->load->model('category_model');
		$this->load->model('product_model');
    }
	
	



	public function index($category_id)
	{
		
		$data['category'] = $this->category_model->findAll();
		$condition = array(
			'category' => $this->mongo_db->create_document_id($category_id)
		);
		$data['product'] = $this->product_model->findAll($condition);
		$this->load->view('layout/index');
		$this->load->view('layout/left-menu',$data);
		$this->load->view('category/content',$data);
		$this->load->view('layout/footer');
	}
}
