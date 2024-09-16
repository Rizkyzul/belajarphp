<?php 
function salam($nama = "Admin") {
  $jamSekarang = date("H:i");

  if($jamSekarang >= "06:00" && $jamSekarang < "09.59") {
    $waktu = "pagi";
} else if ($jamSekarang >= "10:00" && $jamSekarang < "14.59") {
    $waktu = "siang";
} else if ($jamSekarang >= "15:00" && $jamSekarang < "17.59") {
    $waktu = "sore";
} else{
    $waktu = "malam";
}
    return "Selamat $waktu, $nama !";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1><?= salam("Panjul"); ?></h1>
</body>
</html>