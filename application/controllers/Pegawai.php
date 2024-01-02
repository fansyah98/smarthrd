<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model(['pegawai_m', 'departemen_m', 'cabang_m', 'pendidikan_m']);
	}

	// ini adalah function load pertama
	public function index()
	{

		$data['pegawai'] = $this->pegawai_m->get();
		$this->template->load('template', 'pegawai/data_pegawai', $data);
	}

	public function del($id)
	{
		$this->pegawai_m->del($id);
		$error = $this->db->error();
		if ($error['code']  != 0) {
			$this->session->set_flashdata('warning', 'Data Sudah berelasi dengan tabel lain ');
		} else {
			$this->session->set_flashdata('success', 'Data berhasil di hapus  ');
		}
		redirect('pegawai');
	}

	public function add()
	{
		$pegawai = new stdClass();
		$pegawai->id_karyawan = null;
		$pegawai->name = null;
		$pegawai->jenis_kelamin = null;
		$pegawai->jabatan = null;
		$pegawai->status = null;
		$pegawai->nik = null;
		$pegawai->ttl = date('Y-m-d 00:00:00', strtotime($this->input->post('tanggal_lahir')));
		$pegawai->Kota_asal = null;
		$pegawai->alamat = null;
		$pegawai->wn = null;
		$pegawai->golongan_darah = null;
		$pegawai->no_hp = null;
		$pegawai->id_jabatan = null;
		$pegawai->kota = null;


		$query_departemen = $this->departemen_m->get();
		$departemen[null] = '- pilih data - ';
		foreach ($query_departemen->result() as $dpm) {
			$departemen[$dpm->id_jabatan] = $dpm->name;
		}


		$query_cabang = $this->cabang_m->get();
		$cabang[null] = '- pilih data - ';
		foreach ($query_cabang->result() as $cbg) {
			$cabang[$cbg->id_cabang] = $cbg->name;
		}

		$data = array(
			'page'    => 'add',
			'pegawai' => $pegawai,
			'departemen' => $departemen, 'selecteddepartemen' => null,
			'cabang' => $cabang, 'selectedcabang' => null
		);
		$this->template->load('template', 'pegawai/add_form_pegawai', $data);
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($post['add'])) {
			$this->pegawai_m->add($post);
		} else if (isset($post['edit'])) {
			$this->pegawai_m->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil di simpan ');
			redirect('pegawai');
		}
	}

	public function edit($id)
	{

		$query = $this->pegawai_m->get($id);


		$query_departemen = $this->departemen_m->get();
		$departemen[null] = '- pilih data - ';
		foreach ($query_departemen->result() as $dpm) {
			$departemen[$dpm->id_jabatan] = $dpm->name;
		}

		$query_cabang = $this->cabang_m->get();
		$cabang[null] = '- pilih data - ';
		foreach ($query_cabang->result() as $cbg) {
			$cabang[$cbg->id_cabang] = $cbg->name;
		}

		if ($query->num_rows() > 0) {
			$pegawai = $query->row();
			$data = array(
				'page'    => 'edit',
				'pegawai' => $pegawai,
				'departemen' => $departemen, 'selecteddepartemen' => $pegawai->id_jabatan,
				'cabang' => $cabang, 'selectedcabang' => $pegawai->id_cabang,

			);
			$this->template->load('template', 'pegawai/add_form_pegawai', $data);
		} else {
			$this->session->set_flashdata('warning', 'Data Sudah berelasi dengan tabel lain ');
			redirect('pegawai');
		}
	}

	public function detail($id)
	{
		$data['pegawai'] = $this->pegawai_m->get($id);
		$this->template->load('template', 'pegawai/detail_pegawai', $data);
	}

	public function barcode_qrcode($id)
	{
		$data['row'] = $this->pegawai_m->get($id)->row();
		$this->template->load('template' ,'pegawai/barcode_qrcode', $data);
	}

	
}
