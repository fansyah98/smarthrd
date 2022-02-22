<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Magang_m extends CI_Model {
    
    

    public function get($id = null){
        $this->db->select('*');
        $this->db->from('magang');
        if($id != null ){
           $this->db->where('id_magang' , $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $data = [
            'nama' => $post['nama'],
            'nim'  => $post['nim'],
            'semester' => $post['semester'],
            'gender' => $post['gender'],
            'universitas'=> $post['universitas'],
            'jurusan' => $post['jurusan']
        ];
        $this->db->insert('magang' , $data);
    }

    public function edit($post){
        $data = [
            
            'nama' => $post['nama'],
            'nim' => $post['nim'],
            'semester' => $post['semester'],
            'gender'  => $post['gender'],
            'universitas'=> $post['universitas'],
            'jurusan' => $post['jurusan']
        ];
        $this->db->where('id_magang' , $post['id']);
        $this->db->update('magang' , $data );
    }

    public function del($id){
        $this->db->where('id_magang' , $id);
        $this->db->delete('magang');
    }



}