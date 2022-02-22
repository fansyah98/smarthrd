<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

  
    function __construct(){
        parent :: __construct(); 
        check_not_login();  
        $this->load->model('cabang_m');
    }
    
    public function index()
    { 
        $data['cabang'] = $this->cabang_m->get();
        $this->template->load('template' , 'cabang_perusahaan/data_cabang' , $data);
    }

    public function add(){

        $cabang = new stdClass ();
        $cabang -> id_cabang = null ;
        $cabang -> name  = null ;
        
        $data = array (
            'page' => 'add',
            'cabang' => $cabang,
           
        );
		$this->template->load( 'template' ,'cabang_perusahaan/form_cabang' , $data);
    }

    public function prosess(){
        $post = $this->input->post( null , TRUE );
        if(isset($post['add'])){
            $this->cabang_m->add($post);
        }else if (isset($post['edit'])){
            $this->cabang_m->edit($post);
        }
        if($this->db->affected_rows() > 0 ){
             $this->session->set_flashdata('success', 'Data Berhasil di simpan ');
        }
        redirect('cabang');
    }

    public function del($id)
    {
    
      $this->cabang_m->del($id);
      if($this->db->affected_rows() > 0 ){
       $this->session->set_flashdata('success' ,'Data berhasil di hapus');
    }
    redirect('cabang');
    }

    public function edit($id)
    {
        $query = $this->cabang_m->get($id);
        if($query->num_rows() > 0 ) {
            $cabang = $query->row();
            $data = array (
                'page' => 'edit' , 
                'cabang' => $cabang

            );
            $this->template->load('template' ,'cabang_perusahaan/form_cabang' , $data);
        }else{
            echo "<script>alert('Data yang anda cari tidak ada ');</script>";
			echo"window.location='".site_url('cabang_perusahaan/form_departemen')."';";

        }

    }
}

/* End of file Controllername.php */
