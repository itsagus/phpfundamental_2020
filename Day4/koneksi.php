<?php
  $host = "localhost"; //Nama HOST
  $username = "root";
  $password = "";
  $database = "phpfundamental";

  $connect = mysqli_connect($host, $username, $password, $database); //Koneksi ke MysqlndUhConnection
  if (!$connect) {
    die ("Gagal dengan database : ".mysqli_connect_error());
  } else {
    echo "Koneksi Berhasil. ";
  }

 ?>
