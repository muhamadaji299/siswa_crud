<?php
include 'koneksi.php';

$sql = "SELECT * FROM tbl_siswa";
$result = $conn->query($sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
</head>
<body>
<h1>Data Siswa</h1>
<table border="1">
    <tr>
        <th>nis</th>
        <th>nama</th>
        <th>jenis_kelamin</th>
        <th>tanggal_lahir</th>
        <th>alamat</th>
        <th>foto</th>
        <th>aksi</th>
</tr>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td>     <?= $row['nis']; ?>  </td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row ['jenis_kelamin']; ?></td>
                    <td><?= $row['tanggal_lahir']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td> <img src="upload/<?= $row['foto']; ?>"
                     width="100"></td>
                    <td>
                    <a href="edit_siswa.php?id=<?= $row['id']; ?>"> Edit</a>
                    <a href="hapus_siswa.php?id=<?= $row['id']; ?>" onclick="return> confirm ('yakin hapus?')">Hapus"</a>
                    </td>
                </tr>
            <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No data available</td>
            </tr>
            <?php endif; ?>
            </table>
            <br>
            <a href="tambah_siswa.php">Tambah Data</a>
            </body>
            </html>
            
            <?php
            $conn->close();
            ?>           