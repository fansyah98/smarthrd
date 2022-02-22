<?php
Class Fungsi {

    protected $CI;
    
    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function user_login()
    {
        $this->CI->load->model('user_m');
        $user_id = $this->CI->session->userdata('userid');
        $user_data = $this->CI->user_m->get($user_id)->row();
        return $user_data;
    }

    public function count_pegawai()
    {
        $this->CI->load->model('pegawai_m');
        return $this->CI->pegawai_m->get()->num_rows();
    }
    public function count_magang()
    {
        $this->CI->load->model('magang_m');
        return $this->CI->magang_m->get()->num_rows();
    }

    public function count_unit()
    {
        $this->CI->load->model('departemen_m');
        return $this->CI->departemen_m->get()->num_rows();
    }

    public function count_cabang()
    {
        $this->CI->load->model('cabang_m');
        return $this->CI->cabang_m->get()->num_rows();
    }

    public function count_absen()
    {
        $this->CI->load->model('absensi_m');
        return $this->CI->absensi_m->get()->num_rows();
    }

    public function count_kontrak()
    {
        $this->CI->load->model('kontrak_m');
        return $this->CI->kontrak_m->get()->num_rows();
    }

    





}