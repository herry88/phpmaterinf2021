<?php
//deklarasikan nama form
//untuk variabel POST :
// $name = $_POST['name'];
// $alamat = $_POST['alamat'];
// $jk = $_POST['jk'];

//Untuk Variabel GET :
$name = $_GET['name'];
$alamat = $_GET['alamat'];
$jk = $_GET['jk'];

echo "<h2>Selamat Anda Terdaftar Sebagai Member:<br>
    Nama         :    $name<br>
    Alamat       :    $alamat<br>
    Jenis Kelamin:    $jk
    </h2>";
?>