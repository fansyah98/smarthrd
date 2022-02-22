<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('*');
        $this->db->from('p_kontrak');
        $this->db->join('karyawan', 'karyawan.id_karyawan = p_kontrak.name');
        if ($id != null) {
            $this->db->where('id_kontrak', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_kontrak', $id);
        $this->db->delete('p_kontrak');
    }

    public function add($post)
    {
        $params = [

            'name' => $post['pegawai'],
            'tgl_mulai' =>   $post['tgl_mulai'],
            'status'  => $post['status'],
            'lama_kontrak' => $post['lama_kontrak'],
            'tgl_selesai' => $post['tgl_selesai'],

        ];
        $this->db->insert('p_kontrak', $params);
    }


    public function edit($post)
    {
        $data = [

            'name' => $post['pegawai'],
            'tgl_mulai' => $post['tgl_mulai'],
            'status' => $post['status'],
            'lama_kontrak'  => $post['lama_kontrak'],
            'tgl_selesai' => $post['tgl_selesai'],
        ];
        $this->db->where('id_kontrak', $post['id']);
        $this->db->update('p_kontrak', $data);
    }

    public function kontrak()
    {
        $this->db->form('p_kontrak');
        $this->db->where("status=", "kontrak ");
        return $this->db->kontrak();
    }

    public function tetap()
    {
        $this->db->from('p_kontrak');
        $this->db->where("status=", "Tetap ");
        return $this->db->tetap();
    }
}


/* End of file Kontrak_m.php */
