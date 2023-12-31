<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {
    
    
    public function login($post){
        $this->db->select('*');
        $this->db->from('user' , 'dec');
        $this->db->where('username' , $post['username']);
        $this->db->where('password' , sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null ){
        $this->db->select('*');
        $this->db->from('user');
        if($id != null ){
            $this->db->where('user_id' , $id) ;
        }
        $query = $this->db->get();
        return $query;
    }

    public function del($id){
        $this->db->where('user_id' , $id);
        $this->db->delete('user');
    }

    public function add($post)
    {
        $data['username'] = $post['username'];
        $data['password'] = sha1($post['password']);
        $data['name'] = $post['name'];
        $data['address']  = $post['alamat'] != '' ? $post['alamat'] : null ;
        $data['level'] = $post['level'] ;
        $this->db->insert('user' , $data);
    }

    public function edit($post)

    {  
        $data['username'] = $post['username'];
        if(!empty($post['passwrod'])){
            $data['password'] = sha1($post['password']);
        }
        $data['name'] = $post['name'];
        $data['address']  = $post['alamat'] != "" ? $post['alamat'] : null ;
        $data['level'] = $post['level'] ;
        $this->db->where('user_id' , $post['id']);
        $this->db->update('user' , $data);
    }

    

}