<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Magang extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('magang_m');
	}

	//ini adalah function load pertama
	public function index()
	{
		$data['row'] = $this->magang_m->get();

		$this->template->load('template', 'mahasiswa/data_magang', $data);
	}

	public function add()
	{
		$magang = new stdClass();
		$magang->id_magang = null;
		$magang->nama = null;
		$magang->nim = null;
		$magang->semester = null;
		$magang->gender  = null;
		$magang->universitas = null;
		$magang->jurusan = null;
		$data = array(
			'page' => 'add',
			'magang' => $magang
		);
		$this->template->load('template', 'mahasiswa/from_mahasiswa', $data);
	}

	public function prosess()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {
			$this->magang_m->add($post);
		} else if (isset($post['edit'])) {
			$this->magang_m->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil di simpan ');
		}
		redirect('magang');
	}

	public function del($id)
	{
		$this->magang_m->del($id);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil di hapus ');
		}
		redirect('magang');
	}

	public function edit($id)
	{
		$query = $this->magang_m->get($id);
		if ($query->num_rows() > 0) {
			$magang = $query->row();
			$data = array(
				'page' => 'edit',
				'magang' => $magang
			);
			$this->template->load('template', 'mahasiswa/from_mahasiswa', $data);
		} else {
			echo "<script>alert('Data yang anda cari tidak ada ');</script>";
			echo "window.location='" . site_url('mahasiswa/from_mahasiswa') . "';";
		}
	}
}
