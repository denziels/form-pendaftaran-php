<?php

$server = "localhost";
$user = "root"; // Username default XAMPP
$password = "root"; // Password default XAMPP (kosong)
$nama_database = "db_pendaftaran_siswa"; // Sesuai yang kita buat tadi

// Menggunakan MySQLi (Object-Oriented)
$db = new mysqli($server, $user, $password, $nama_database);

// Cek koneksi
if ($db->connect_error) {
    die("Koneksi database gagal: " . $db->connect_error);
}

?>