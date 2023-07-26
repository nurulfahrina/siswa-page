<?php
require_once("koneksi.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolahAsal = $_POST['sekolahAsal'];

    // Query untuk mengupdate data siswa berdasarkan id
    $update = "UPDATE datasiswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolahAsal='$sekolahAsal' WHERE id='$id'";
    mysqli_query($db, $update);

    // Redirect ke halaman pendaftar.php setelah data diubah
    header("location: pendaftar.php");
}
?>
