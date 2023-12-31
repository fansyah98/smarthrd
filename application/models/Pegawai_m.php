<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_m extends CI_Model {
    
    

    public function get($id = null )
    {
        $this->db->select('karyawan.*  , p_cabang.name as cabang_perusahaan , departemen.name as level_jabatan');
        $this->db->join('p_cabang' , 'p_cabang.id_cabang = karyawan.id_cabang');
        $this->db->join('departemen', 'departemen.id_jabatan  = karyawan.id_jabatan');
        $this->db->from('karyawan');
        if ($id != null) {
            $this->db->where('id_karyawan', $id);
        }
        $this->db->order_by('nip', 'asc ');
        $query = $this->db->get();
        return $query;
    }



    public function add($post){
        $params = [
            'nik' => $post['nik'],
            'name' => $post['name'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'ttl'   => $post['date'],
            'Kota_asal' => $post['kota_asal'],
            'kota' => $post['kota'],
            'wn' => $post['wn'],
            'golongan_darah' => $post['gologan_darah'],
            'no_hp'  => $post['no_hp'],
            'ttl'        => $post['date'],
            'id_jabatan' => $post['departemen'],
            'id_cabang'  => $post['cabang'],
           
        ];
        $this->db->insert('karyawan' , $params);
    }

    public function edit($post){
        $params = [
        
            'nik' => $post['nik'],
            'name' => $post['name'],
            'jabatan' => $post['jabatan'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'alamat' => $post['alamat'],
            'ttl'   => $post['date'],
            'Kota_asal' => $post['kota_asal'],
            'kota' => $post['kota'],
            'wn' => $post['wn'],
            'golongan_darah' => $post['gologan_darah'],
            'no_hp'  => $post['no_hp'],
            'ttl'        => $post['date'],
            'id_jabatan' => $post['departemen'],
            'id_cabang'  => $post['cabang'],
        ];
        $this->db->where('id_karyawan' , $post['id']);
        $this->db->update('karyawan' , $params);
    }

    public function del($id)
    {
        $this->db->where('id_karyawan' , $id);
        $this->db->delete('karyawan');
    }

    

}