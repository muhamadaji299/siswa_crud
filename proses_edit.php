<?php
include 'koneksi.php';

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

if ($_FILES['foto']['name']) {
    $foto = $_FILES['foto']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($foto);
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

    $sql = "UPDATE tbl_siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat', foto='$foto' WHERE id=$id";
} else {
    $sql = "UPDATE tbl_siswa SET nis='$nis', nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat' WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();