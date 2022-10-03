<?php
// inheritance dengan problem nya
class Produk
{
  public $nama,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain,
    $tipe;

  public function __construct($nama = "nama", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe")
  {
    $this->nama = $nama;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }
  public function getLabel()
  {
    return "$this->penulis,$this->penerbit";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->nama} | {$this->getLabel()} (Rp. {$this->harga}) ";
    if ($this->tipe == "komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ($this->tipe == "game") {
      $str .= " ~ {$this->waktuMain} Jam.";
    }
    return $str;
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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shueisha", 30000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
