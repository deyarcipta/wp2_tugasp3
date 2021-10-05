<?php
// defined('BASEPATH') or exit('no direct script access allowed');

namespace App\Controllers;

class Web extends BaseController
{
  public function index()
  {
    $data['judul'] = "Halaman Depan";
    echo view('web/v_header', $data);
    echo view('web/v_index', $data);
    echo view('web/v_footer', $data);
  }
}
