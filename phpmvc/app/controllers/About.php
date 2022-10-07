<?php

class About extends Controller
{
  public function index($nama = 'Edward', $pekerjaan = 'Ui Ux Design', $umur = 32)
  {
    echo "Halo, nama Saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun.";
  }
  public function page()
  {
    echo 'About/page';
  }
}
