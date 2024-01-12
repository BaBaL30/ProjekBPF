<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Cart
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

class Cart extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Cart_Model');
  }

  public function index()
  {
    $data['judul'] = "Cart";
		$data['cart'] = $this->Cart_Model->get();
    $data['catalog'] = $this->Cart_Model->get();
    $this->load->view('layout/header', $data);
    $this->load->view('layout/section2', $data);
    $this->load->view('cart/cart', $data);
    $this->load->view('layout/footer', $data);
  }
  public function checkout()
  {
    $data['judul'] = "Checkout";
		$data['cart'] = $this->Cart_Model->get();
    $data['catalog'] = $this->Cart_Model->get();
    $this->load->view('layout/header', $data);
    $this->load->view('layout/section2', $data);
    $this->load->view('checkout/checkout', $data);
    $this->load->view('layout/footer', $data);
  }
  public function upload()
  {
    // Data untuk dimasukkan ke dalam database
    $data = [
      'nama_barang' => $this->input->post('nama_barang'),
      'harga_cart' => $this->input->post('harga_barang'),
      'kuantitas' => $this->input->post('kuantitas'),
      'gambar_cart' => $this->input->post('gambar_barang'),
      'total' => $this->input->post('harga_barang') * $this->input->post('kuantitas')
    ];

    $this->Cart_Model->insert($data);
    redirect('Cart');
  }
  public function hapus($id)
    {
        $this->Cart_Model->delete($id);
        redirect('Cart');
    }
}


/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */