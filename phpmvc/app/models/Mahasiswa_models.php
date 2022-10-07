<?php

class Mahasiswa_model
{
  private $dbh; // database handler
  private $stmt;


  public function __construct() //jika jangan menggunakan ini, pakai apa pak untuk kedepannya(jangan menyimpan US & PW Databasenya) 
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    $this->stmt = $this->dbh->prepare('SELECT*FROM mahasiswa');
    $this->stmt->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

//[
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