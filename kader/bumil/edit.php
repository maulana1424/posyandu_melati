<?php


require '../../function/function_bumil.php';

$id = $_GET['id_bumil'];
$cam = query("SELECT*FROM bumil WHERE id_bumil=$id");

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di edit');
    document.location.href = 'data_bumil.php';
    </script>";
  } else {
    "<script>
    alert('data gagal di edit');
    </script>";
  }
}


?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Posyandu</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="<?= '../../assets/css/style.css' ?>">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= '../../tema/bootstrap/css/bootstrap.min.css' ?>">
  <!-- font-->
  <link rel="stylesheet" href="../../tema/fontawesome/fontawesome/css/all.min.css">
</head>

<body>
  <!--- navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#"><i class="fas fa-store-alt"></i> POSYANDU MELATI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <div class="text-white">
            <?php echo date('l,d-m-y'); ?>
          </div>
        </ul>
        <br>
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-right-from-bracket"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

              <li><a class="dropdown-item" href="<?= '../../proses/logout.php' ?>" onclick="return confirm('Yakin Keluar?')" role="button">Logout </a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- setdebar-->

  <div class="row mt-4">
    <div class="col-md-2 mt-2 pr-3 pt-4 bg-secondary">
      <!--menu-->
      <ul class="nav flex-column">
        <br>
        <li class="nav-item">
          <a class="nav-link text-white" href="../utama.php"><i class="fas fa-tachometer-alt"></i>
            Dashboard</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="daftar_bumil.php"><i class="fa-solid fa-user-plus"></i>
            Pendaftaran Ibu Hamil</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tabel_periksa.php"><i class="fa-solid fa-stethoscope"></i>
            Pemeriksaan Ibu Hamil</a>
          <hr>
        </li>
    </div>
    <div class="col-md-10 mt-10 pr-5 pt-5">
      <!--konten-->
      <h3><i class="fas fa-users"></i>Edit Data Balita</h3>
      <hr>
      <form method="POST" action="">
        <input type="hidden" class="form-control" value="<?= $cam['id_bumil'] ?>" name="id_bumil">

        <div class="form-group">
          <label for="nik_bumil">NIK Ibu Hamil</label>
          <input type="text" class="form-control" id="nik_bumil" value="<?= $cam['nik_bumil'] ?>" placeholder="NIK Balita" name="nik_bumil" autofocus required autocomplete="off">
        </div>

        <div class="form-group">
          <label for="nama_bumil">Nama Ibu Hamil</label>
          <input type="text" class="form-control" id="nama_bumil" value="<?= $cam['nama_bumil'] ?>" placeholder="Nama Lengkap" name="nama_bumil" autofocus required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="nama_suami">Nama Suami</label>
          <input type="text" class="form-control" id="nama_suami" value="<?= $cam['nama_suami'] ?>" placeholder="Nama Lengkap" name="nama_suami" autofocus required autocomplete="off">
        </div>


        <div class="form-group"><br>
          <label for="tanggal">Tanggal Lahir</label>
          <input type="date" id="tanggal" value="<?= $cam['tanggal'] ?>" placeholder="Tanggal Lahir" name="tanggal" required autocomplete="off">
        </div><br>

        <div class="form-group">
          <label for="alama_b">Alamat</label>
          <input type="text" class="form-control" id="alamat_b" value="<?= $cam['alamat_b'] ?>" placeholder="ALamat Lengkap" name="alamat_b" required autocomplete="off">
        </div>


        <br>
        <button type="submit" class="btn btn-success" name="edit">Simpan</button></b><br>

        <a href="databalita.php" class="btn btn-primary role" role=" button"><i class="fa-solid fa-arrow-left"></i> Kembali</a>

      </form>

    </div>
  </div>





  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>