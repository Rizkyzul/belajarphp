<?php 

$studens = [
[
    "joko", "56517","kuatdudu@gmail.com","teknik Informatika"
],
[
    "ridwan", "56518","ridwan@gmail.com","teknik Informatika",
],
[
    "samsul", "56519","samsul@gmail.com","teknik Informatika",
],
[
    "mulyadi",'56520',"mulyadi@gmail.com","teknik Informatika",
]

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


<?php foreach($studens as $studen) : ?>
    
    <ul>
        <li>Nama : <?=  $studen[0];?></li>
        <li>Nim : <?=  $studen[1];?></li>
        <li>Email : <?=  $studen[2];?></li>
        <li>Jurusan : <?=  $studen[3];?></li>
    </ul>
  <?php endforeach; ?>  
</body>
</html>