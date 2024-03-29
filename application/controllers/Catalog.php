<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Catalog_Model');
		$this->load->model('Cart_Model');
	}
	public function index()
	{
		$data['judul'] = "Beranda";
		$data['catalog'] = $this->Catalog_Model->get();
		$data['cart'] = $this->Cart_Model->get();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/section1', $data);
		$this->load->view('catalog/catalog', $data);
		$this->load->view('layout/footer', $data);
	}

	public function detail($id)
	{
		$data['judul'] = "Product Details ";
		$data['catalog'] = $this->Catalog_Model->getById($id);
		$data1['catalog'] = $this->Catalog_Model->get();
		$data['cart'] = $this->Cart_Model->get();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/section3', $data);
		$this->load->view('catalog/detail', $data);
		$this->load->view('catalog/catalog', $data1);
		$this->load->view('layout/footer', $data);
	}

	public function cart()
	{
		$data['judul'] = "Cart";
		$this->load->view('layout/header', $data);
		$this->load->view('layout/section2', $data);
		$this->load->view('catalog/cart', $data);
		$this->load->view('layout/footer', $data);
	}
	
	public function edit($id)
	{
		$data['judul'] = "laundry";
		$data['produk'] = $this->Catalog_Model->getById($id);
		$this->load->view('layout/header');
		$this->load->view('karyawan/edit', $data);
		$this->load->view('layout/footer');
	}
	public function hapus($id)
	{
		$this->Catalog_Model->delete($argumen);
		redirect('produk');
	}
}
