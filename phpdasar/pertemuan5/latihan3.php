<?php 
$studens =
[
     ["Iki", "898997", "Teknik Informatika", "kyzk23@gmail.com"],
     ["Budi", "8922127", "Teknik Informatika", "k3@gmail.com"],    
     ["Iman", "8922997", "Teknik Informatika", "kyao3@gmail.com"],
     ["Ikooi", "898327", "Teknik Informatika", "dsghgh@gmail.com"]




];





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach($studens as $studen) : ?>
            <li>Nama :<?= $studen[0] ?></li>
            <li>Nim :<?= $studen[1] ?></li>
            <li>Jurusan : <?= $studen[2] ?></li>
            <li> Email :<?= $studen[3] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>