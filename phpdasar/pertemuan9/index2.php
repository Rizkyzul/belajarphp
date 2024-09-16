
<?php 
//koneksi ke database
$db = mysqli_connect('localhost', 'root', '', 'phpdasar');


//ambil data dari tabel mahasiswa (query)
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($db, $query);


//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row() //mengembalikan array numerik contoh penggunaan ($mhs[0])
//mysqli_fetch_assoc() //mengembalikan array associative ($mhs['nim'])
//mysqli_fetch_array() // gabungan row da assoc
//mysqli_fetch_object() //mengembalikan objek


// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// };






?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman ADMIN</title>
</head>
<body style="background-color:powderblue; text-align:center;">
    <h1> Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" spasing="0" >

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>


     <?php $i = 1; ?>
     <?php while ($mhs = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $mhs["gambar"]; ?>" width="50" alt=""></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?> </td>
        </tr>
     <?php $i++; ?>
     <?php endwhile; ?>



    </table>
</body>
</html>