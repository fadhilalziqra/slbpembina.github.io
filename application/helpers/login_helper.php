<?php
function is_logged_in() //membatasi akses ke halaman admin
{
    $ci = get_instance();
        if (!$ci->session->userdata('username')) {
        redirect('auth/login');
    } else {
        $role_id = $ci->session->userdata('role_id');
        if ($role_id != "1") {
        redirect('admin');
        }   
    }
}


