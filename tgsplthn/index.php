<?php
include "config/koneksi.php";
$query = "SELECT * FROM classroom";
$result = mysqli_query($koneksi, $query);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CRUD Pelatihan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="mt-4 mx-auto">
      <h2 class="text-center">Daftar Mata Pelajaran</h2>

    <table class="table">
      <?php
      $no = 1;
      while ($data = mysqli_fetch_assoc($result)) :

        if (($no - 1) % 3 == 0) {
          echo "<tr></tr>";
        }
      ?>

        <th>
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"><?= $no++ ?>. Mata Pelajaran: <?= $data["mapel"] ?></h5>
              <p class="card-text">Guru: <?= $data["guru"] ?></p>
              <p class="card-text">Kelas: <?= $data["kelas"] ?></p>
              <a href="edit.php?id=<?= $data["id_user"] ?>" class="btn btn-primary">Update</a>
              <a href="config/hapus.php?id=<?= $data["id_user"] ?>" class="btn btn-danger">Delete</a>
            </div>
          </div>
        </th>

      <?php
      endwhile;
      ?>
    </table>
    <a href="tambah.php" class="btn btn-success">Add</a>
  </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>