<?php
session_start();

require 'php/functions.php';
$buku = query("SELECT * FROM buku");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <h1>Daftar Buku Mahasiswa Unpas</h1>

  <a href="php/tambah.php">Tambah Buku</a>
  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Harga</th>
      <th>#</th>

    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $bk) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="gambar/<?= $bk["gambar"]; ?>" alt="" width="100"></td>
        <td><?= $bk["nama"]; ?> </td>
        <td><?= $bk["penulis"]; ?></td>
        <td><?= $bk["penerbit"]; ?> </td>
        <td><?= $bk["harga"]; ?> </td>
        <td>
          <center>
            <a href="php/ubah.php?id=<?= $bk["id"]; ?>" onclick="return confirm('Ubah Data??')" class="btn btn-primary mt-4">Ubah</a>
            <a href="php/hapus.php?id=<?= $bk["id"]; ?>" onclick="return confirm('Hapus Data??')" class="btn btn-danger mt-3">Hapus</a>
          </center>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>

</body>

</html>