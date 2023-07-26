<?php require_once("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Pendaftaran Siswa Baru</title>
  <!-- Link ke file CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">DIGITALENT JWD - A</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">Daftar Baru</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pendaftar.php">Pendaftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Pendaftaran Siswa</h3>
          </div>
          <div class="card-body">
            <p class="text-center">Pilih salah satu menu di bawah ini:</p>
            <ul class="list-group">
              <li class="list-group-item"><a href="tambah.php">Daftar Baru</a></li>
              <li class="list-group-item"><a href="pendaftar.php">Pendaftar</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Link ke file JavaScript Bootstrap dan jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
