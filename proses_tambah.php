<?php
include 'koneksi.php';

$nis = $_POST ['nis'];
$nama = $_POST ['nama'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$tanggal_lahir = $_POST ['tanggal_lahir'];
$alamat = $_POST ['alamat'];
$foto = $_FILES  ['foto']['name'];
 
//codingan upload foto
$target_dir = "upload/";
$target_file = $target_dir . basename($foto);
move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

/////codingan input data agar masuk ke dalam database
$sql = "INSERT INTO tbl_siswa (nis, nama, jenis_kelamin, tanggal_lahir, alamat, foto)
VALUES ('$nis', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$foto')";

/////codingan untuk kondisi atau case atau masalah
if($conn->query($sql) === TRUE){
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->Error;
}

$conn->close();