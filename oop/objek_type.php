<?php

class Produk
{
  public $nama,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($nama = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->nama = $nama;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function getLabel()
  {
    return "$this->penulis,$this->penerbit";
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->nama} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
