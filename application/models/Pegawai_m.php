<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_m extends CI_Model {
    
    

    public function get($id = null )
    {
        $this->db->select('tb_karyawan.*  , tb_cabang.name as cabang_perusahaan , tb_divisi.name as level_jabatan , tb_karyawan.name as pegawai');
        $this->db->join('tb_cabang' , 'tb_cabang.id_cabang = tb_karyawan.id_cabang');
        // $this->db->join('tb_user', 'tb_user.user_id  = tb_karyawan.account');
        $this->db->join('tb_divisi', 'tb_divisi.id_jabatan  = tb_karyawan.id_jabatan');
        $this->db->from('tb_karyawan');
        if ($id != null) {
            $this->db->where('id_karyawan', $id);
        }
        $this->db->order_by('nip', 'asc ');
        $query = $this->db->get();
        return $query;
    }

    public function account($post)
    {

        $data['account'] = $post['id_karyawan'];
        $this->db->set('id_karyawan', $post['id_karyawan']);
        $this->db->where('id_karyawan', $post['id_karyawan']);
        $this->db->update('tb_karyawan');
    }


    public function add($post)
    {
        $params = [
            'nik' => $post['nik'],
            'nip' => $post['nip'],
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
        $this->db->insert('tb_karyawan' , $params);
    }

    public function edit($post){
        $params = [
        
            'nik' => $post['nik'],
            'nip' => $post['nip'],
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
            'id_jabatan' => $post['tb_divisi'],
            'id_cabang'  => $post['cabang'],
        ];
        $this->db->where('id_karyawan' , $post['id']);
        $this->db->update('tb_karyawan' , $params);
    }

    public function del($id)
    {
        $this->db->where('id_karyawan' , $id);
        $this->db->delete('tb_karyawan');
    }

    

}