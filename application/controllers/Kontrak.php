<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontrak extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model(['kontrak_m', 'pegawai_m']);
  }

  public function index()
  {
    $stardate = $this->input->get('stardate', TRUE);
    $enddate = $this->input->get('enddate', TRUE);
    $filter = $this->kontrak_m->get(array($stardate, $enddate));
    $data = array(
      'row' => $filter,
    );

    $this->template->load('template', 'kontrak/data_kontrak', $data);
  }



  public function add()
  {
    $kontrak = new stdClass();

    $kontrak->id_kontrak = null;
    $kontrak->name = null;
    $kontrak->tgl_mulai = null;
    $kontrak->status = null;
    $kontrak->lama_kontrak = null;
    $kontrak->tgl_selesai = null;


    $query_pegawai = $this->pegawai_m->get();
    $pegawai[null] = ' - pili data -  ';
    foreach ($query_pegawai->result() as $pgw) {
      $pegawai[$pgw->id_karyawan] = $pgw->name;
    }

    $data = array(
      'page' => 'add',
      'kontrak' => $kontrak,
      'pegawai' => $pegawai, 'selectedpegawai' => null
    );
    $this->template->load('template', 'kontrak/add_form_kontrak', $data);
  }



  public function del($id)
  {
    $this->kontrak_m->del($id);
    if ($this->db->affected_rows()) {
      $this->session->set_flashdata('info', 'Data Berhasil di Hapus ');
    }
    redirect('kontrak');
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($post['add'])) {
      $this->kontrak_m->add($post);
    } else if (isset($post['edit'])) {
      $this->kontrak_m->edit($post);
    }
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data Berhasil di simpan ');
    }
    redirect('kontrak');
  }

  public function edit($id)
  {
    $query_pegawai = $this->pegawai_m->get();
    $pegawai[null] = ' - pili data -  ';
    foreach ($query_pegawai->result() as $pgw) {
      $pegawai[$pgw->id_karyawan] = $pgw->name;
    }


    $query = $this->kontrak_m->get($id);
    if ($query->num_rows() > 0) {
      $kontrak = $query->row();
      $data = array(
        'page' => 'edit',
        'kontrak' => $kontrak,
        'pegawai' => $pegawai, 'selectedpegawai' => $kontrak->id_karyawan,
      );
      $this->template->load('template', 'kontrak/add_form_kontrak', $data);
    } else {
      echo "<script>alert('Data yang anda cari tidak ada ');</script>";
      echo "window.location='" . site_url('kontrak/add_form_kontrak') . "';";
    }
  }
}
