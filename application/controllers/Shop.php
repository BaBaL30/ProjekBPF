<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Catalog_Model');
        $this->load->model('Cart_Model');
	}
	public function index()
	{
		$data['judul'] = "Shop";
        $data['catalog'] = $this->Catalog_Model->get();
		$data['cart'] = $this->Cart_Model->get();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/section2', $data);
		$this->load->view('catalog/catalog', $data);
		$this->load->view('layout/footer', $data);
	}
}
