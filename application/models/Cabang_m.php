<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang_m extends CI_Model {
    
    

    public function get($id = null ){
        $this->db->select('*');
        $this->db->from('tb_cabang');
        if($id != null ){
            $this->db->where('id_cabang' , $id) ;
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id){
        $this->db->where('id_cabang' , $id);
        $this->db->delete('tb_cabang');
    }


    public function add($post){
           $data = [
                'name' => $post['name'],
           ];
           $this->db->insert('tb_cabang' , $data);
    }

    public function edit($post){
        $data = [
             'name' => $post['name'],
        ];
        $this->db->where('id_cabang' , $post['id']);
        $this->db->update('tb_cabang' , $data);
 }

 

}