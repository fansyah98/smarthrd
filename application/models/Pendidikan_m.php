<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan_m extends CI_Model 
{
    public function get($id = null )
    {
        $this->db->select('*');
        $this->db->join('karyawan', 'karyawan.id_karyawan = p_pendidikan.karyawan_id');
        $this->db->from('p_pendidikan');
        if($id != null ){
            $this->db->where('id_pendidikan', $id);
        }
        $query= $this->db->get();
        return $query;
    }

    public function del($id)
    {
        $this->db->where('id_pendidikan' , $id );
        $this->db->delete('p_pendidikan');
    }

    public function add($post)
    {
        $params = [
            'karyawan_id' => $post['pegawai'],
            'tingkat'     => $post['tingkat'],
            'jurusan'     => $post['jurusan'],
            'sekolah'     => $post['sekolah'],
            'lokasi'      => $post['lokasi'],
            'tahun_lulus' => $post['date'],
        ];    
        $this->db->insert('p_pendidikan' , $params);
    }

    public function edit($post)
    {
        $params = [
            'karyawan_id' => $post['pegawai'],
            'tingkat'     => $post['tingkat'],
            'jurusan'     => $post['jurusan'],
            'sekolah'     => $post['sekolah'],
            'lokasi'      => $post['lokasi'],
            'tahun_lulus' => $post['date'],
        ];
        $this->db->where('id_pendidikan'  , $post['id']);
        $this->db->update('p_pendidikan' , $params );
    }
}

/* End of file ModelName.php */
