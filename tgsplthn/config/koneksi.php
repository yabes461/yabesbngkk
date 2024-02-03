<?php

    //konkesi database
    $server="localhost";
    $user="root";
    $password="";
    $database="apaaja";

    //buat koneksi
    $koneksi= mysqli_connect($server, $user, $password, $database);
        if (!$koneksi){
            echo "Database terhubung";
        }
?>