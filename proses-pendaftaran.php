<?php

// Sertakan file config.php
include("config.php");

// Cek apakah tombol 'daftar' sudah diklik
if(isset($_POST['daftar'])){

    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];

    // Siapkan query SQL untuk menyimpan data
    $sql = $db->prepare("INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama) VALUES (?, ?, ?, ?)");
    
    // Bind parameter ke query
    $sql->bind_param("ssss", $nama, $alamat, $jk, $agama);

    // Eksekusi query
    if ($sql->execute()) {
        // Jika berhasil, alihkan (redirect) ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // Jika gagal, alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

    // Tutup statement
    $sql->close();

} else {
    die("Akses dilarang...");
}

// Tutup koneksi
$db->close();

?>