<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tambah Data Siswa</title>
  </head>
  <body>
    <a href="view_siswa.php">Lihat Data Siswa</a>
    <br>
    <br>
    <form class="" action="tambah_siswa.php" method="post" name="form2">
        <table width = "25%" border="0">
          <tr>
            <td>Nomor Induk</td>
            <td><input type="text" name="no_induk"></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
          </tr>
          <tr>
            <td>Nomor Telepon</td>
            <td><input type="text" name="no_telepon"></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add"></td>
          </tr>
        </table>

    </form>

    <?php
      if (isset($_POST['submit'])) {
        $no_induk = strtoupper($_POST['no_induk']);
        $nama = strtoupper($_POST['nama']);
        $no_telepon = strtoupper($_POST['no_telepon']);
        $alamat = strtoupper($_POST['alamat']);

        include_once("koneksi.php");

        $result = mysqli_query($connect, "INSERT INTO siswa(no_induk, nama, no_telepon, alamat) VALUES('$no_induk', '$nama', '$no_telepon', '$alamat')");

        echo "Siswa added Succesfully. <a href ='view_siswa.php'>View Siswa</a>";
      }

     ?>

  </body>
</html>
