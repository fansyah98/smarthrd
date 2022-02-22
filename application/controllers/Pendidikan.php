<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendidikan extends CI_Controller {

	function __construct()
	{
		parent :: __construct();
		check_not_login();
		$this->load->model(['pendidikan_m' ,  'pegawai_m']);
	}

	// ini adalah function load pertama
	public function index()
	{
		
		$data['pendidikan'] = $this->pendidikan_m->get();
		$this->template->load( 'template' ,'pendidikan/data_pendidikan' , $data);
	}

	public function del($id)
	{
		$this->pendidikan_m->del($id);
		$error = $this->db->error();
		if($error['code']  != 0){
			$this->session->set_flashdata('warning', 'Data Sudah berelasi dengan tabel lain ');
		}
		else{
			$this->session->set_flashdata('success', 'Data berhasil di hapus  ');
        }
		redirect('pendidikan');
	}

	public function add(){
        $pendidikan = new stdClass ();
        $pendidikan -> id_pendidikan = null ;
        $pendidikan -> karyawan_id = null ; 
        $pendidikan -> tingkat = null ;
        $pendidikan -> jurusan = null ; 
        $pendidikan -> sekolah = null ; 
        $pendidikan -> lokasi = null ; 
        $pendidikan -> tahun_lulus = null ; 

		$query_pegawai = $this->pegawai_m->get();
		$pegawai[null] = '- pilih data - ';
		foreach($query_pegawai->result() as $pgw ) {
			$pegawai[$pgw->id_karyawan] = $pgw->name ;
		}

        $data = array (
			'page'    => 'add',
            'pendidikan' => $pendidikan,
			'pegawai' => $pegawai , 'selectedpegawai' => null 
        );
		$this->template->load( 'template' ,'pendidikan/form_pendidikan', $data);
    }

	public function process()
	{
		$post = $this->input->post( null , TRUE );
		if(isset($post['add'])){
			$this->pendidikan_m->add($post);
		}else if(isset($post['edit'])){
			$this->pendidikan_m->edit($post);
		}
		if($this->db->affected_rows() > 0 ){
			$this->session->set_flashdata('success', 'Data Berhasil di simpan');
			redirect('pendidikan');
		}
	}

	public function edit($id){
		
		$query = $this->pendidikan_m->get($id);

        $query_pegawai = $this->pegawai_m->get();
		$pegawai[null] = '- pilih data - ';
		foreach($query_pegawai->result() as $pgw ) {
			$pegawai[$pgw->id_karyawan] = $pgw->name ;
		}

		if($query->num_rows() > 0 ){
			$pendidikan = $query->row();
			$data = array(
				'page'    => 'edit',
				'pendidikan' => $pendidikan,
				'pegawai' => $pegawai , 'selectedpegawai' => $pendidikan->id_karyawan, 
			);
			$this->template->load( 'template' ,'pendidikan/form_pendidikan' , $data);
		}else{
			$this->session->set_flashdata('warning', 'Data Sudah berelasi dengan tabel lain ');
			redirect('pendidikan');
		}
	}
	
}