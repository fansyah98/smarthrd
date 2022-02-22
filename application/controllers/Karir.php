<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller {

	function __construct()
	{
		parent :: __construct();
		check_not_login();
		$this->load->model(['karir_m' ,'pegawai_m']);
	}

	// ini adalah function load pertama
	public function index()
	{
		
		$data['row'] = $this->karir_m->get();
		$this->template->load( 'template' ,'karir/karir_data' , $data);
	}

	public function del($id)
	{
		$this->karir_m->del($id);
		$error = $this->db->error();
		if($error['code']  != 0){
			$this->session->set_flashdata('warning', 'Data Sudah berelasi dengan tabel lain ');
		}
		else{
			$this->session->set_flashdata('success', 'Data berhasil di hapus  ');
        }
		redirect('karir');
	}

	public function add(){
        $karir = new stdClass ();
        $karir -> id_karir = null ;
        $karir -> karyawan_id = null ; 
        $karir -> perusahaan = null ; 
        $karir -> jenis = null ; 
        $karir -> lokasi = null ; 
        $karir -> departemen = null ; 
        $karir -> jabatan = null ;

		$query_pegawai = $this->pegawai_m->get();
		$pegawai[null] = '- pilih data - ';
		foreach($query_pegawai->result() as $pgw ) {
			$pegawai[$pgw->id_karyawan] = $pgw->name ;
		}

        $data = array (
			'page'    => 'add',
            'karir' => $karir,
			'pegawai' => $pegawai , 'selectedpegawai' => null 
        );
		$this->template->load( 'template' ,'karir/add_form_karir', $data);
    }

	public function prosess()
	{
		$post = $this->input->post( null , TRUE );
		if(isset($post['add'])){
			$this->karir_m->add($post);
		}else if(isset($post['edit'])){
			$this->karir_m->edit($post);
		}
		if($this->db->affected_rows() > 0 ){
			$this->session->set_flashdata('success', 'Data Berhasil di simpan ');
        }
        redirect('karir');

	}

	public function edit($id){
		
		$query = $this->karir_m->get($id);


        $query_pegawai = $this->pegawai_m->get();
		$pegawai[null] = '- pilih data - ';
		foreach($query_pegawai->result() as $pgw ) {
			$pegawai[$pgw->id_karyawan] = $pgw->name ;
		}

		if($query->num_rows() > 0 ){
			$karir = $query->row();
			$data = array(
				'page'    => 'edit',
				'karir' => $karir,
				'pegawai' => $pegawai , 'selectedpegawai' => $karir->karyawan_id, 
			);
			$this->template->load( 'template' ,'karir/add_form_karir' , $data);
		}else{
			$this->session->set_flashdata('warning', 'Data Sudah tidak di temukan');
			redirect('karir');
		}
	}

    public function print()
    {
        $data['row'] = $this->karir_m->get();
        $this->template->load('template' , 'karir/print_data' , $data );
    }
	
}