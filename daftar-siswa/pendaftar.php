<?php
require_once("koneksi.php");

// Proses tambah data siswa jika form dikirimkan
if (isset($_POST['submit'])) {
  // Ambil data dari form
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $agama = $_POST['agama'];
  $sekolahAsal = $_POST['sekolahAsal'];

  // Query untuk tambah data siswa
  $tambah = "INSERT INTO datasiswa (nama, alamat, jenis_kelamin, agama, sekolahAsal) VALUES ('$nama','$alamat','$jenis_kelamin','$agama','$sekolahAsal')";
  mysqli_query($db, $tambah);
  

  // Redirect ke halaman pendaftar.php setelah data ditambahkan
  header("location:tambah.php");
}
// Mode Edit - Saat tombol Edit di pilih
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    header("location: edit.php?id=$edit_id");
}

// Mode Hapus - Saat tombol Hapus di pilih
if (isset($_GET['hapus_id'])) {
    $hapus_id = $_GET['hapus_id'];
    header("location: hapus.php?id=$hapus_id");
}



// Ambil data siswa dari database
$sql = "SELECT * FROM datasiswa";
$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <!-- Link ke file CSS Bootstrap --> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
  /* Ikon hapus menjadi merah */
  .hapus-icon {
    color: red;
  }

  /* Ikon edit menjadi hijau */
  .edit-icon {
    color: green;
  }
</style>

</head>
<body>
<body>
    <div class="container">
        <header>
            <h1>Data Siswa</h1>
        </header>
        <a href="tambah.php">[+] Tambah Siswa</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Action</th> <!-- Kolom untuk menu edit dan hapus -->
                </tr>
            </thead>
            <tbody>
                <?php
                // Menampilkan data siswa dalam tabel
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['alamat'] . "</td>";
                    echo "<td>" . $row['jenis_kelamin'] . "</td>";
                    echo "<td>" . $row['agama'] . "</td>";
                    // Menu Edit
                    echo '<td><a href="pendaftar.php?edit_id=' . $row['id'] . '"><i class="fas fa-edit edit-icon"></i></a> | <a href="pendaftar.php?hapus_id=' . $row['id'] . '"><i class="fas fa-trash-alt hapus-icon"></i></a></td>';
                    echo "</tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Link ke file JavaScript Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
