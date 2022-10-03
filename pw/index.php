<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_a_203040029_pw");

// ambil dari tabel film / query
$result = mysqli_query($conn, "SELECT * FROM buku");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung ke variabel buku
$buku = $rows;
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

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Harga</th>

    </tr>
    <?php $i = 1; ?>
    <?php foreach ($buku as $row) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="gambar/<?= $row["gambar"]; ?>" alt="" width="100"></td>
        <td><?= $row["nama"]; ?> </td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["penerbit"]; ?> </td>
        <td><?= $row["harga"]; ?> </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>