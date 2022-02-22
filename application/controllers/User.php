<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('user_m');
        //load form validation bawaan dari CI

    }

    // ini adalah function load pertama
    public function index()
    {
        $data['user'] = $this->user_m->get();
        $this->template->load('template', 'user/user_data', $data);
    }

    //fungsi untuk menghapus data
    public function del()
    {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('danger', 'Data Anda berhasil di hapus');
        }
        redirect('user');
    }

    // fungsi  yang di gunakan untuk menambah data
    public function add()
    {
        //mendeklarasikan from validation
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|min_length[5]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[5]');
        $this->form_validation->set_rules(
            'passconf',
            'passconf',
            'required|min_length[5]|matches[password]',
            array('matches' => '%s Password tidak sesuai ')
        );
        $this->form_validation->set_rules('level', 'level', 'required');

        //jika form di jalan kan nilai nya salah maka 
        if ($this->form_validation->run() == FALSE) {
            //load kemabali template  nya
            $this->template->load('template', 'user/form_add_user');
            //jika nilai nya benar 
        } else {

            //maka buat variabel post dan nilai nya benar
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);
            //jika data benar maka data di extrac 
            if ($this->db->affected_rows() > 0) {
                // dan di tampilkan pesan sukses
                $this->session->set_flashdata('success', 'Data berhasil di tambah');
            }
            //dan di arahkan lagi ke menu data user
            redirect('user');
        }
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required|min_length[5]|callback_username_check');
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'password', 'required|min_length[5]');
        }
        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules(
                'passconf',
                'passconf',
                'required|min_length[5]|matches[password]',
                array('matches' => '%s Password tidak sesuai ')
            );
        }


        $this->form_validation->set_rules('level', 'level', 'required');

        $this->form_validation->set_message('required', '%s masih kosong silakan isi');
        $this->form_validation->set_message('mint_length', '{feild} Minimal 5 karakter ');
        $this->form_validation->set_message('is_uniqe', '{feild} username isi sudah di pakai silakan ganti');

        if ($this->form_validation->run() == FALSE) {
            $query = $this->user_m->get($id);
            if ($query->num_rows() > 0) {
                $data['user'] = $query->row();
                $this->template->load('template', 'user/form_user_edit', $data);
            } else {
                $this->session->set_flashdata('warning', 'data tidak bisa di simpan');
                redirect('user');
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data berhasil di  edit');
            }
            redirect('user');
        }
    }

    function username_check()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM users WHERE username = '$post[username]' AND user_id != '$post[id]' ");
        if ($this->db->affected_rows() > 0) {
            $this->form_validation->set_message('username_check', '{feild} ini sudah di pakai ganti ');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
