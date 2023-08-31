<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mobile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cek_versi()
    {
        $data['versi'] = "1.1";
        $data['ready'] = true;
        $data['message'] = "Aplikasi siap digunakan";
        echo json_encode($data);
    }
    public function download()
    {
        $data['versi'] = "1.1";
        $data['ready'] = true;
        $data['message'] = "Aplikasi siap digunakan";
        echo json_encode($data);
    }
}
