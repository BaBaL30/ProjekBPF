<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['judul'] = "About";
		$this->load->view('layout/header', $data);
		$this->load->view('layout/section2', $data);
		$this->load->view('About/about', $data);
		$this->load->view('layout/footer', $data);
	}

    public function contact()
	{
		$data['judul'] = "Contact";
		$this->load->view('layout/header', $data);
		$this->load->view('layout/section2', $data);
		$this->load->view('About/contact', $data);
		$this->load->view('layout/footer', $data);
	}
}
