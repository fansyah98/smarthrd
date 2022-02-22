<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karir_m extends CI_Model 
{
   public function get( $id = null )
   {
       $this->db->select('*');
       $this->db->join('karyawan', 'karyawan.id_karyawan = p_karir  .karyawan_id');
       $this->db->from('p_karir');
       if($id != null ){
           $this->db->where('id_karir' , $id);
       }
       $query = $this->db->get();
       return $query ;
   }

   public function add($post)
   {
        $params = [
            'karyawan_id' => $post['pegawai'],
            'perusahaan' => $post['perusahaan'],
            'jenis'   => $post['jenis'],    
            'lokasi' => $post['lokasi'],
            'departemen' => $post['departemen'],
            'jabatan'   => $post['jabatan']
        ];
        $this->db->insert('p_karir' , $params);
   }

   public function edit($post)
   {
       $params = [
        'karyawan_id' => $post['pegawai'],
        'perusahaan' => $post['perusahaan'],
        'jenis'   => $post['jenis'],    
        'lokasi' => $post['lokasi'],
        'departemen' => $post['departemen'],
        'jabatan'   => $post['jabatan']
       ];
       $this->db->where('id_karir' , $post['id']);
       $this->db->update('p_karir' , $params);
   }

   public function del($id)
    {
        $this->db->where('id_karir' , $id );
        $this->db->delete('p_karir');
    }


}


/* End of file Kontrak_m.php */
