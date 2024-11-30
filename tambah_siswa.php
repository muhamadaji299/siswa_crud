<!DOCTYPE html>
<html Lang="en">

<head>
    <meta charset="UTF-8">
    <tittle>Tambah Data Siswa</tittle>
</head>

<body>
    <h1>Tambah Data Siswa</h1>
    <form action="proses_tambah.php" method="post" enctype="multipart/form-data">
        <label for="nis">NIS:</label><br>
        <input type="text" id="nis" name="nis"><br><br>

        <label for="nama">Nama:</laber><br>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
</select><br><br>

        <laber for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat"></textarea><br><br>

        <label for="foto">Upload Foto:</label><br>
        <input type="file" id="foto" name="foto"><br><br>

        <input type="submit" value="Tambah">
    </form>
</body>

</html>