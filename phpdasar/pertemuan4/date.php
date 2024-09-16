<?php 
// Build-in function


    // menampilkan tanggal dengan format tertentu
    
    // echo date("l, d-M-Y");

   // time
//    Unix TimeSatamp 
// detik yg berlalu dari 1970
//  echo time();

// echo date("l, d M Y",time() + 60*60*24*100);

//mkTime
// membuat detik sendiri
// echo date("l",mktime(0,0,0,23,04,2004));
// jam, menit, detik, bulan, tanggal, tahun

// echo date("l, d M Y",mktime(0,0,0,04,23,2004));

// strtotime
echo date("l, d M Y",strtotime("11 juni 2004"));

//str dan mk time hanya dibalik saja 




//var_dump
/*
Fungsi var_dump() digunakan untuk mengecek isi variabel dan menampilkan informasi tentang variabel tersebut.
 */
$nama = "Budi";
$umur = 30;

var_dump($nama);
var_dump($umur);



// empty
/*
Fungsi empty() digunakan untuk memeriksa apakah suatu variabel kosong atau tidak.
 */
$nama = "";
$umur = 30;

if (empty($nama)) {
  echo "Variabel $nama kosong.\n";
} else {
  echo "Variabel $nama berisi nilai.\n";
}

if (empty($umur)) {
  echo "Variabel $umur kosong.\n";
} else {
  echo "Variabel $umur berisi nilai.\n";
}




//isset
/*
Fungsi isset() digunakan untuk memeriksa apakah suatu variabel telah dideklarasikan dan diinisialisasi. Fungsi ini mengembalikan TRUE jika variabel telah dideklarasikan dan diinisialisasi, dan FALSE jika variabel tidak ada atau belum diinisialisasi.
 
 */
$nama = "Budi";

if (isset($nama)) {
  echo "Variabel $nama telah dideklarasikan dan diinisialisasi.\n";
} else {
  echo "Variabel $nama tidak ada atau belum diinisialisasi.\n";
}



//die
/*
Fungsi die() digunakan untuk menghentikan proses PHP dan menampilkan pesan error atau pesan kesalahan.
 */
if ($umur < 18) {
    die("Maaf, Anda harus berusia 18 tahun atau lebih untuk mengakses halaman ini.");
  }
  echo "Selamat datang!";
  





  //sleep
  /*  
  sleep  digunakan untuk menunda eksekusi skrip PHP selama beberapa detik. Fungsi ini sering digunakan untuk memberikan jeda antar proses atau untuk mensimulasikan waktu tunggu.
  */
  echo "Menunggu 5 detik...\n";
sleep(5);
echo "Selesai menunggu.\n";

?>