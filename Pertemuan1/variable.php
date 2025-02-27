<?php

$nama_depan = "Choi";
$nama_belakang = "Seungcheol";
$umur = 29;
$tb = 178;
$bb = 65;

echo $nama_depan . " " . $nama_belakang;
echo "<br>Nama Saya adalah $nama_depan dan saya berumur $umur";

echo "<br /><br />";

// variabel system
echo 'Dokumen Root' . $_SERVER
['DOCUMENT_ROOT'];

// variabel constant
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r * $r;

echo "Lingkaran dengan jari-jari {$r}cm memiliki luas {$luas}cm2";