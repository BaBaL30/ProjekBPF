<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Cart_Model_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Cart_Model extends CI_Model {

  // ------------------------------------------------------------------------

  public $table = 'cart';
    public $id = 'cart.id_cart';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id_cart', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        // return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where('cart.id_cart', $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

  // ------------------------------------------------------------------------

}

/* End of file Cart_Model_model.php */
/* Location: ./application/models/Cart_Model_model.php */