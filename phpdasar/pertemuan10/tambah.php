<?php 


require 'functions.php' ; //memanggil functions.php';
//cek apakah tombol submit sudah ditekan

if( isset($_POST["submit"]) ) {

    //cek apakah data berhasil ditambahkan atau tidak   
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo 
        "<script>
        alert('data gagal ditambahkan');
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
    <title>tambah data mahasiswa</title>
    <link rel="stylesheet" href="styletambah.css">
</head>
<body>
    <h1 class="tambah">Form Tambah Data Mahasiswa</h1>

    <form action="tambah.php" method="post">
     <label for="nim">
         Nim :
         <input type="text" name="nim" placeholder="Nim Anda" autofocus required maxlength="8" minlength="8">
     </label>
     <br> <br>
    <label for="nama">
        Nama :
        <input type="text" name="nama" placeholder="Nama Anda">
    </label>
    <br> <br>
     <label for="email">
         Email :
         <input type="email" name="email" placeholder="Email Anda">
     </label>
     <br> <br>
     <label for="jurusan"></label>
         Jurusan :
         <input type="text" name="jurusan" placeholder="Jurusan Anda">
     </label>
     <br> <br>
     <label for="gambar">
        gambar :
        <br> <br>
        <input type="file" name="gambar">
        <br> <br>
        <input type="text" name="gambar" placeholder="kirim gambar dengan nama file">
    </label>

    <br> <br>
    <button type="submit" name="submit" class="btn">Simpan</button>
    </form>
  

</body>
</html>