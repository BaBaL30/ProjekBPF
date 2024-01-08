<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['judul'] = "Shop";
		$this->load->view('layout/header', $data);
		$this->load->view('layout/section2', $data);
		$this->load->view('catalog/catalog', $data);
		$this->load->view('layout/footer', $data);
	}
}
