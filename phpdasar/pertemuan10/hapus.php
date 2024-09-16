<?php 

require 'functions.php' ; //memanggil functions.php';

$id = $_GET["id"];

// if(hapus($id) > 0 ) {
//     echo "
//     <script>                                                                                                
//     confirm('Data ini akan Dihapus!');
//     document.location.href = 'index.php';
//     </script>
//     ";      
// } else {
//     echo "
//     <script>
//     alert('data gagal dihapus');
//     document.location.href = 'index.php';
//     </script>
//     ";
// };



$id = $_GET["id"];

if (isset($_POST['confirm'])) {
    if (hapus($id) > 0) {
        echo "<script>alert('Data berhasil dihapus'); document.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus'); document.location.href = 'index.php';</script>";
    }
} else {
    // Tampilkan form konfirmasi
    echo "<form method='post' style='background-color: #6EC4C0; margin-top: 50vh; text-align: center '>
            <input type='hidden' name='id' value='$id'>
            <p>Apakah Anda yakin ingin menghapus data?</p>
            <button type='submit' name='confirm' style='background-color: red'>Ya</button>
            <button type='button' onclick='history.back()' style='background-color: yellow'>Tidak</button>
        </form>";
}

















?>