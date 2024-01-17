<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_shift_m extends CI_Model {

    public function get()
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal_shift');
        $this->db->order_by('id_shift', 'desc');
        $data = $this->db->get();
        return $data;
    }



}?>

<!-- /*End of file Jadwal_shift_m.php */ -->
