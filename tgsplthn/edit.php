<?php
include 'config/koneksi.php';
$id = $_GET["id"];
$query = "SELECT * FROM classroom WHERE id_user='$id'";
$result = mysqli_query($koneksi, $query);


if (isset($_POST['submit'])) {
    $id = $_POST['id_user'];
    $mapel = $_POST['mapel'];
    $guru = $_POST['guru'];
    $kelas = $_POST['kelas'];

        $query = "UPDATE classroom SET 
        mapel = '$mapel',
        guru='$guru',
        kelas='$kelas'
        WHERE id_user = '$id'";
        $result = mysqli_query($koneksi, $query);
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
    <script> 
    alert('Berhasil');
    window.location.href='index.php';
    </script>
    ";
    }

}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h4 class="my-5 text-center">Update</h4>
                <?php
                while ($data = mysqli_fetch_assoc($result)) :
                ?>
                    <form method="POST">
                        <input type="hidden" value="<?= $data["id_user"] ?>" name="id_user">
                        <div class="mb-3">
                            <label for="mapel" class="form-label">Mata Pelajaran</label>
                            <input type="text" class="form-control" id="mapel" name="mapel" value="<?= $data["mapel"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="guru" class="form-label">Guru</label>
                            <input type="text" class="form-control" id="guru" name="guru" value="<?= $data["guru"] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $data["kelas"] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Ganti</button>
                    </form>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>