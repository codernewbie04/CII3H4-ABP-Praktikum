<?php
//Variabel

$nim = "1301204188";
$nama = "Akmal Muhamad Firdaus";
//Tampilkan Variabel
echo "NIM : ".$nim."<br>". "Nama : ".$nama;

define("NAMA", "Akmal Muhamad Firdaus");
define("NIM", "1301204188");
echo "NIM : ".NIM."<br>". "Nama : ".NAMA;

echo "<br><br><br>";

//belajar if else
$nilai = 70;
if ($nilai >= 60) {
    echo "Nilai Anda $nilai, Anda Lulus";
} else {
    echo "Nilai Anda $nilai, Anda Tidak Lulus";
}

//belajar looping
echo "<br><br><br>";
for ($i=1; $i <= 10; $i++) { 
    echo "Perulangan ke-$i <br>";
}

//belajar array
echo "<br><br><br>";
$nama = array("Akmal", "Muhamad", "Firdaus");
echo $nama[0]."<br>";
echo $nama[1]."<br>";
echo $nama[2]."<br>";



