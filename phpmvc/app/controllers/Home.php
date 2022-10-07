<?php

class Home extends Controller
{
  public function index()
  {
    $data['judul'] = 'home';
    $this->view('tamplates/header', $data);
    $this->view('home/index', $data);
    $this->view('tamplates/footer');
  }
}
