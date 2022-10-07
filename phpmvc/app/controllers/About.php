<?php

class About extends Controller
{
  public function index($nama = 'Edward', $pekerjaan = 'Ui UX Design', $umur = 24)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('tamplates/header', $data);
    $this->view('about/index', $data);
    $this->view('tamplate/footer');
  }
  public function page()
  {
    $data['judu'] = 'Pages';
    $this->view('tamplates/header', $data);
    $this->view('about/page');
    $this->view('tamplates/footer');
  }
}
