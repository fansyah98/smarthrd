<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen_m extends CI_Model {
    
    

    public function get($id = null){
        $this->db->select('*');
        $this->db->from('tb_divisi');
        if($id != null ){
           $this->db->where('id_jabatan' , $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $data = [
            'name' => $post['name'],
            'kode' => $post['kode'],
        ];
        $this->db->insert('tb_divisi' , $data);
    }

    public function edit($post){
        $data = [
            'name' => $post['name'],
            'kode' => $post['kode']
        ];
        $this->db->where('id_jabatan' , $post['id']);
        $this->db->update('tb_divisi' , $data );
    }

    
    

    public function del($id){
        $this->db->where('id_jabatan' , $id);
        $this->db->delete('tb_divisi');
    }
}