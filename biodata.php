<?php
echo "<center><h1>BIODATA &nbsp;" .$_POST['nama']."</h1></center><br>";
echo "<td>Nama &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp: ".$_POST['nama']."<br>";
echo "<td>Umur &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp: ".$_POST['umur']."</td><br>";
echo "<td>Jenis Kelamin : ".$_POST['gender']."</td><br>";
echo "<td>Alamat &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: ".$_POST['alamat']."</td><br>";
echo "<td>Pendidikan &nbsp &nbsp &nbsp: ".$_POST['pendidikan']."</td><br>";
echo "<td>Pekerjaan &nbsp &nbsp &nbsp &nbsp: ".$_POST['pekerjaan']."</td><br>";

//agar inputan tidak ada yang kosong
if (empty($_POST['nama']) 
        && empty($_POST['umur']) 
        && empty($_POST['gender'])
        && empty($_POST['alamat']) 
        && empty($_POST['pendidikan']) 
        && empty($_POST['pekerjaan'])){
    header("Location:kosong.php");
} elseif (empty($_POST['nama'])){
    header("Location:tidak-lengkap.php");
} elseif (empty($_POST['umur'])){
    header("Location:tidak-lengkap.php");
} elseif (empty($_POST['gender'])){
    header("Location:tidak-lengkap.php");
} elseif (empty($_POST['alamat'])){
    header("Location:tidak-lengkap.php");
} elseif (empty($_POST['pendidikan'])){
    header("Location:tidak-lengkap.php");
} elseif (empty($_POST['pekerjaan'])){
    header("Location:tidak-lengkap.php");
}
?>