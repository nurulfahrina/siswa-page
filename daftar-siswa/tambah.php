<?php
require_once("koneksi.php");

// Periksa apakah form telah dikirimkan
if (isset($_POST['submit'])) {
  // Ambil data dari form
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $sekolahAsal = $_POST['sekolahAsal'];

  // Validasi data (jika diperlukan)
  // ...

  // Simpan data pendaftar ke database
  // Query untuk tambah data siswa
    $tambah = "INSERT INTO datasiswa (nama, alamat, jenis_kelamin, agama, sekolahAsal) VALUES ('$nama','$alamat','$jenis_kelamin','$agama','$sekolahAsal')";
    mysqli_query($db, $tambah);

    // Tampilkan pesan menggunakan JavaScript
    echo "<script>alert('Data berhasil ditambah');</script>";

    // Redirect ke halaman pendaftar.php setelah data ditambahkan
    header("location: pendaftar.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Baru</title>
  <!-- Link ke file CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <header>
      <br>
      <h1>Formulir Pendaftaran Siswa Baru</h1>
      <br>
    </header>
    <form action="tambah.php" method="post">
      <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama" id="nama">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="alamat" id="alamat">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis kelamin </label>
        <div class="col-sm-10">
          <input type="radio" class="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki">
          <label>Laki-Laki</label>
          <input type="radio" class="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">
          <label>Perempuan</label>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
        <div class="col-sm-10">
          <select class="form-control" name="agama" id="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="sekolahAsal" class="col-sm-2 col-form-label">Sekolah Asal</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="sekolahAsal" id="sekolahAsal">
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Link ke file JavaScript Bootstrap dan jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
