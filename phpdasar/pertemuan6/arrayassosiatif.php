<?php 
//array assosiatif sama seperti array numerik yang keynya berupa string
$Students =[
    
    ["nama" => "C Ronaldo", "npm" => "001", "email" => "ronaldo@gmail", "jurusan" => "Teknik Informatika", "gambar" => "cr7.jpg"],
    ["nama" => "Ronaldo Botak" , "npm" => "002", "email" => "ronaldobotak@gmail", "jurusan" => "Teknik Informatika", "gambar" => "r9.jpg"],
    ["nama" => "jude", "npm" => "003", "email" => "jude@gmail", "jurusan" => "Teknik Informatika", "gambar" => "jude.jpg"],
    ["nama" => "inzhagi", "npm" => "004", "email" => "inzhagi@gmail", "jurusan" => "Teknik Informatika","gambar" => "inzhagi.jpg"]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <H1>Daftar Mahasiswa</H1>


<?php foreach ($Students as $student) : ?>
    <ul>
        <li><img src="img/<?= $student["gambar"];?>" alt=""></li>
        <li>Nama : <?=  $student["nama"];?></li>
        <li>Nim : <?=  $student["npm"];?></li>
        <li>Email : <?=  $student["email"];?></li>
        <li>Jurusan : <?=  $student["jurusan"];?></li>
    </ul>
  <?php endforeach; ?>  
</body>
</html>