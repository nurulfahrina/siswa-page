<?php
require_once("koneksi.php");

// Periksa apakah form telah dikirimkan
if (isset($_POST['submit'])) {
    $id = $_POST['id'];

    // Query untuk hapus data siswa berdasarkan id
    $hapus = "DELETE FROM datasiswa WHERE id='$id'";
    mysqli_query($db, $hapus);

    // Redirect ke halaman pendaftar.php setelah data dihapus
    header("location: pendaftar.php");
}

// Ambil data siswa dari database berdasarkan id yang diterima dari halaman pendaftar.php
$id = $_GET['id'];
$query = "SELECT * FROM datasiswa WHERE id = '$id'";
$result = mysqli_query($db, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Siswa</title>
    <!-- Link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link ke Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Hapus Siswa</h1>
        </header>
        <p></p>
        <form action="hapus.php" method="post">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama']; ?>" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $data['jenis_kelamin']; ?>" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="agama" id="agama" value="<?php echo $data['agama']; ?>" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="sekolahAsal" class="col-sm-2 col-form-label">Sekolah Asal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sekolahAsal" id="sekolahAsal" value="<?php echo $data['sekolahAsal']; ?>" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i> Hapus</button>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        </form>
    </div>

    <!-- Link ke file JavaScript Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
