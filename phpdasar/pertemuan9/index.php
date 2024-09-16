
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

<style>
 body {
     background-color: #6EC4C0;
     text-align:center;
 } 
 .table {
    margin:auto;
    background-color: #024959;
    color: #F2EEED;
 }

 .trOne {
     background-color: #038C8C;
     color: #F2EEED;
 }
  
 .ubah {
    color: yellow;
    text-decoration: none;
 }
 .ubah:hover {
    color: black;
    background-color: yellow;
 }
 .hapus {
    color: red;
    text-decoration: none;
 }
 .hapus:hover {
    color: #F2EEED;
    background-color: red;
 }
</style>


</head>
<body >
    <h1> Daftar Mahasiswa</h1>

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
                <a href="" class="ubah">Ubah</a> |
                <a href="" class="hapus">Hapus</a>
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