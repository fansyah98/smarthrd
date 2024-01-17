<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_shift extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        check_not_login();  
        $this->load->model('jadwal_shift_m');
    }
    


    public function  index()
    {
        $data['jadwal'] = $this->jadwal_shift_m->get();
        $this->template->load('template' , 'jadwal_shift/data_shift_pegawai', $data);
    }

}?>