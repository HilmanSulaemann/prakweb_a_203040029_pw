<?php

class About extends Controller
{
  public function index($nama = 'Hilman Sulaeman', $pekerjaan = 'Mahasiswa Teknik Informatika', $umur = 21)
  {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';

    $this->view('templates/header', $data);
    $this->view('about/index', $data);
    $this->view('templates/footer');
  }
  public function page()
  {
    $data['judul'] = 'Pages';
    $this->view('templates/header', $data);
    $this->view('about/page', $data);
    $this->view('templates/footer');
  }
}
