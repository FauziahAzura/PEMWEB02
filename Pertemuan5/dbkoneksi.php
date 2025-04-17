<?php
// 1) variable untuk koneksi database
$host = "localhost";
$dbname = "dbhospital";
$username = "root";
$password = "";
$charset = "utf8mb4";

// 2) buat DSN dan opsi akses database
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// 3) buat objek koneksi ke database

try {
    $dbh = new PDO($dsn, $username, $password, $options);

$dbh = new PDO($dsn, $username, $password, $options);
} catch (\Throwable) {
    //throw $th;
    echo "Koneksi gagal" . $th;
}////;load koneksi
?>