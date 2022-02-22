<?php
function check_already_login()
{
    $CI = &get_instance();
    $user_session = $CI->session->userdata('userid');
    if ($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $CI = &get_instance();
    $user_session = $CI->session->userdata('userid');
    if (!$user_session) {
        redirect('auth/login');
    }
}

function indo_date($date)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $date);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
