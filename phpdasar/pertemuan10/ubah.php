<?php 


require 'functions.php' ; //memanggil functions.php';
//cek apakah tombol submit sudah ditekan
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = '$id' ")[0];

if( isset($_POST["submit"]) ) {

    //cek apakah data berhasil diubah atau tidak   
    if(ubah($_POST, $id) > 0 ) {
        echo "
        <script>
        alert('data berhasil diupdate');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo 
        "<script>
        alert('data gagal diupdate');
        document.location.href = 'index.php';
        </script>
        ";
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubah data mahasiswa</title>
    <link rel="stylesheet" href="styletambah.css">
</head>
<body>
<h1>Form Ubah Data Mahasiswa</h1>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $mhs['id']; ?>">

    <label for="nim">
        Nim:
        <input type="text" name="nim" placeholder="Nim Anda" id="nim" required value="<?= $mhs['nim']; ?>">
    </label>
    <br> <br>

    <label for="nama">
        Nama:
        <input type="text" name="nama" placeholder="Nama Anda" id="nama" required value="<?= $mhs['nama']; ?>">
    </label>
    <br> <br>

    <label for="email">
        Email:
        <input type="email" name="email" placeholder="Email Anda" id="email" required value="<?= $mhs['email']; ?>">
    </label>
    <br> <br>

    <label for="jurusan">
        Jurusan:
        <input type="text" name="jurusan" placeholder="Jurusan Anda" id="jurusan" required value="<?= $mhs['jurusan']; ?>">
    </label>
    <br> <br>

    <label for="gambar">
        Gambar:
        <br> <br>
        <input type="file" name="gambar" value="<?= $mhs['gambar']; ?>">
        <br> <br>
        <input type="text" name="gambar" placeholder="Kirim gambar dengan nama file" value="<?= $mhs['gambar']; ?>">
    </label>

    <br> <br>

    <button type="submit" name="submit" class="btn">Simpan</button>
</form>

</body>
</html>