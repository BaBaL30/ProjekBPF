<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Auth
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Auth extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Cart_Model');
  }

  public function index()
  {
    $data['judul'] = "Login";
		$data['cart'] = $this->Cart_Model->get();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/section2', $data);
		$this->load->view('Auth/login', $data);
		$this->load->view('layout/footer', $data);
  }
  public function registrasi()
  {
    $data['judul'] = "Registration";
		$this->load->view('layout/header', $data);
		$this->load->view('layout/section2', $data);
		$this->load->view('Auth/regis', $data);
		$this->load->view('layout/footer', $data);
  }
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */