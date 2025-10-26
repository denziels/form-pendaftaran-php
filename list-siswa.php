<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftar Siswa Baru | SMK Coding</title>
</head>
<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = $db->query($sql);
        $no = 1; // Untuk nomor urut

        if ($query->num_rows > 0) {
            // Tampilkan data selama masih ada baris di hasil query
            while($siswa = $query->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$siswa['nama']."</td>";
                echo "<td>".$siswa['alamat']."</td>";
                echo "<td>".$siswa['jenis_kelamin']."</td>";
                echo "<td>".$siswa['agama']."</td>";
                echo "<td>";
                echo "<a href='#'>Edit</a> | "; // Nanti kita buat
                echo "<a href='#'>Hapus</a>"; // Nanti kita buat
                echo "</td>";
                echo "</tr>";
            }
        } else {
            // Jika tidak ada data
            echo "<tr><td colspan='6'>Tidak ada pendaftar</td></tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo $query->num_rows; ?></p>

</body>
</html>