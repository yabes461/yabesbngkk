<?php
include 'koneksi.php';
$id=$_GET["id"];
$query="DELETE FROM classroom WHERE id_user='$id'";
$hapus=mysqli_query($koneksi,$query);
if($hapus){
    echo"
    <script> 
    alert('Berhasil dihapus');
    window.location.href='../index.php';
    </script>
    ";
}else{
    echo "
    <script> 
    alert('User gagal dihapus');
    window.location.href='../index.php';
    </script>
    ";
}


?>
