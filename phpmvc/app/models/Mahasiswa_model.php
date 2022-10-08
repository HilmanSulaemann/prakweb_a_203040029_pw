<?php
class Mahasiswa_model
{
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }


  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM mahasiswa ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
}

  // private $mhs = [
  //  //[
  //  "nama" => "Hilman Sulaeman",
  //  "nrp" => "203040029",
  //  "email" => "hilmansulaeman0504@gmail.com",
  //  "jurusan" => "Teknik Informatika"
  //],
  //[
  //  "nama" => "Muhammad Fajriansyah",
  //  "nrp" => "203040033",
  //  "email" => "muhammadfajriansyah@gmail.com",
  //  "jurusan" => "Teknik Informatika"
  //]
  //];