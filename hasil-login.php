<?php
echo "<center>Nama :".$_POST['nama']."</center><br>";
echo "<center>Email :".$_POST['email']."</center><br>";
echo "<center>Jam :".$_POST['jam']."</center><br>";
echo "<center>Hari :".$_POST['hari']."</center><br>";
echo "<center>Tanggal :".$_POST['tanggal']."</center><br>";

if (empty($_POST['nama']) && empty($_POST['email'])){
    header("Location:kosong.php");
} elseif (empty($_POST['nama'])){
    header("Location:tidak-lengkap.php");
} elseif (empty($_POST['email'])){
    header("Location:tidak-lengkap.php");
}

?>