<?php

class Produk
{
  public $nama,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $nama;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function getLabel()
  {
    return "$this->penulis,$this->penerbit";
  }
}
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
