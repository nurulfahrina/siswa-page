<!-- Bagian edit.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
    <!-- Link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Link ke Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>Edit Siswa</h1>
        </header>
        <!-- Form untuk edit data siswa -->
        <form action="proses_edit.php" method="post">
            <!-- Ambil data siswa dari database berdasarkan id yang diterima dari halaman pendaftar.php -->
            <?php
            require_once("koneksi.php");
            $id = $_GET['id'];
            $query = "SELECT * FROM datasiswa WHERE id = '$id'";
            $result = mysqli_query($db, $query);
            $data = mysqli_fetch_assoc($result);
            ?>

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $data['nama']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis kelamin</label>
                <div class="col-sm-10">
                    <input type="radio" class="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki" <?php if ($data['jenis_kelamin'] == 'laki-laki') echo 'checked'; ?>>
                    <label>Laki-Laki</label>
                    <input type="radio" class="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan" <?php if ($data['jenis_kelamin'] == 'perempuan') echo 'checked'; ?>>
                    <label>Perempuan</label>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <select class="form-control" name="agama" id="agama">
                        <option value="Islam" <?php if ($data['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                        <option value="Kristen" <?php if ($data['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                        <option value="Katolik" <?php if ($data['agama'] == 'Katolik') echo 'selected'; ?>>Katolik</option>
                        <option value="Hindu" <?php if ($data['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                        <option value="Buddha" <?php if ($data['agama'] == 'Buddha') echo 'selected'; ?>>Buddha</option>
                        <option value="Konghucu" <?php if ($data['agama'] == 'Konghucu') echo 'selected'; ?>>Konghucu</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="sekolahAsal" class="col-sm-2 col-form-label">Sekolah Asal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sekolahAsal" id="sekolahAsal" value="<?php echo $data['sekolahAsal']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</button>
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
