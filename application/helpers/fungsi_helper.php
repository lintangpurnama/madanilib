<?php

function check_already_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');

    if ($user_session) {
        redirect('admin');
        // echo 'test';
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');

    if (!$user_session) {
        redirect('auth');
        // echo 'login dulu';
    }
}
