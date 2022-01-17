<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{
  public function register($data)
  {
    $this->db->insert('tbl_pelanggan', $data);
  }

  public function total_pelanggan()
  {
    return $this->db->get('tbl_pelanggan')->num_rows();
  }
}

/* End of file M_pelanggan.php */
