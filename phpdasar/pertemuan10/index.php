
<?php 
require 'functions.php' ; //memanggil functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman ADMIN</title>

  <link rel="stylesheet" href="style.css">


</head>
<body >
    <h1 class="mhs"> Daftar Mahasiswa</h1>

<a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>

    <table border="1" cellpadding="10" spasing="0" class="table" >

        <tr class="trOne">
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>


     <?php $i = 1; ?>
<?php foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $mhs['id'] ; ?>" class="ubah">Ubah</a> |
                <a href="hapus.php?id=<?= $mhs["id"]; ?>" class="hapus">Hapus</a>
            </td>
            <td><img src="img/<?= $mhs["gambar"]; ?>" width="50" alt=""></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?> </td>
        </tr>
     <?php $i++; ?>
     <?php endforeach; ?>



    </table>
</body>
</html>