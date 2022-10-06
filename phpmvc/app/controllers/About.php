<?php

class About
{
  public function index($nama = 'Edward', $pekerjaan = 'Ui UX Design')
  {
    echo "Halo, Nama Saya $nama, saya adalah seorang $pekerjaan";
  }
  public function page()
  {
    echo 'About/page';
  }
}
