<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Catalog_Model');
    }
    public function index()
    {
        $data['judul'] = "Admin";
        $data['Admin'] = $this->Catalog_Model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/section2', $data);
        $this->load->view('Admin/tambah', $data);
        $this->load->view('Admin/catalog', $data);
        $this->load->view('layout/footer', $data);
    }
    public function upload()
    {
        $config['upload_path'] = './assets/images/admin/'; // Sesuaikan dengan path yang Anda inginkan
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048; // 2MB max size
        $config['width'] = '10%';
        $config['height'] = '11.5%';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar_barang')) {
            $data = $this->upload->data();

            // Data untuk dimasukkan ke dalam database
            $data_to_insert = [
                'nama_barang' => $this->input->post('nama_barang'),
                'harga_barang' => $this->input->post('harga_barang'),
                'stok_barang' => $this->input->post('stok_barang'),
                'deskripsi_barang' => $this->input->post('deskripsi_barang'),
                'ukuran_barang' => $this->input->post('ukuran_barang'),
                'gambar_barang' => $data['file_name'] // Nama file yang diunggah
            ];

            // Masukkan data ke dalam database
            $this->Catalog_Model->insert($data_to_insert);

            // Redirect ke halaman admin atau ke halaman lain jika diperlukan
            redirect('admin');
        } else {
            $error = $this->upload->display_errors();
            echo $error;
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Admin";
        $data['Admin'] = $this->Catalog_Model->getById($id);
        $this->load->view('layout/header', $data);
        $this->load->view('layout/section2', $data);
        $this->load->view('Admin/tambah', $data);
        $this->load->view('Admin/catalog', $data);
        $this->load->view('layout/footer', $data);
    }
    function update()
    {
        $data = [
            'gambar_barang ' => $this->input->post('gambar_barang'),
            'harga_barang' => $this->input->post('harga_barang'),
            'stok_barang' => $this->input->post('stok_barang'),
            'deskripsi_barang' => $this->input->post('deskripsi_barang'),
            'ukuran_barang' => $this->input->post('ukuran_barang'),
            'nama_barang' => $this->input->post('nama_barang')
        ];
        $id = $this->input->post('id_catalog');
        $this->Catalog_Model->update(['id_catalog' => $id], $data);
        redirect('Admin');
    }
}
