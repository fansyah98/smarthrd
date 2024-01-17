<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller {

	function __construct()
	{
		parent :: __construct();
		check_not_login();
		$this->load->model('departemen_m');
	}

	// ini adalah function load pertama
	public function index()
	{
		$data['departemen'] = $this->departemen_m->get();
		$this->template->load( 'template' ,'departemen/data_departemen' , $data);
	}

	//fungsi untuk menghapus data
	public function del($id)
    {
    
      $this->departemen_m->del($id);
      if($this->db->affected_rows() > 0 ){
       $this->session->set_flashdata('success' ,'Data berhasil di hapus');
    }
    redirect('departemen');
    }

	public function add(){
        $departemen = new stdClass ();
        $departemen -> id_jabatan  = null ;
        $departemen -> name = null  ; 
		$departemen -> kode = null  ;
        $data = array (
			'page'    => 'add',
            'departemen' => $departemen
        );
		$this->template->load( 'template' ,'departemen/form_departemen' , $data);
    }

	public function prosess(){
		$post = $this->input->post(null , TRUE );
		if(isset($_POST['add'])){
			$this->departemen_m->add($post);
		}else if(isset($post['edit'])){
			$this->departemen_m->edit($post);
		}
		if($this->db->affected_rows() > 0 ){
			$this->session->set_flashdata('success', 'Data Berhasil di simpan');		  
        }
        redirect('departemen');
	}

	public function edit($id){
		$query = $this->departemen_m->get($id);
		if($query->num_rows() > 0 ){
			$departemen = $query->row();
			$data = array(
				'page' => 'edit',
				'departemen' => $departemen
			);
			$this->template->load( 'template' ,'departemen/form_departemen' , $data);
		}else{
			$this->session->set_flashdata('warning', 'Data tidak di temukan ');
            redirect('departemen/form_departemen');
		}
	}

	
}
