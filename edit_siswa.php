<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM tbl_siswa WHERE id=$id";
$result = $conn->query($sql); 
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
</head>

<body>
    <h1>Edit Data Siswa</h1>
    <form action="proses_edit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">

        <label for="nis">NIS:</label><br>
        <input type="text" id="nis" name="nis" value="<?= $row['nis']; ?>"><br><br>

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="<?= $row['nama']; ?>"><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki_laki" <?= $row['jenis_kelamin'] =='Laki-laki' ? 'selected' : ''; ?>>Laki-Laki</option>
            <option value="Perempuan" <?= $row['jenis_kelamin'] =='Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
        </select><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $row['tanggal_lahir']; ?>"><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"><?= $row['alamat']; ?></textarea><br><br>

        <label for="foto">Upload Foto:</label><br>
        <input type="file" id="foto" name="foto"><br><br>
        <img src="upload/<?= $row['foto']; ?>" width="100"><br><br>

        <input type="submit" value="Update">
</form>
</body>
</html>

<?php
$conn->close();
?>