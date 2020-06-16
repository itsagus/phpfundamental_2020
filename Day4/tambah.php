<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add User</title>
  </head>
  <body>
    <a href="view.php">Lihat Data User</a>
    <br>
    <br>
    <form class="" action="tambah.php" method="post" name="form1">
        <table width = "25%" border="0">
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
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
        $nama = strtoupper($_POST['nama']);
        $alamat = strtoupper($_POST['alamat']);

        include_once("koneksi.php");

        $result = mysqli_query($connect, "INSERT INTO user(nama, alamat) VALUES('$nama', '$alamat')");

        echo "User added Succesfully. <a href ='view.php'>View Users</a>";
      }

     ?>

  </body>
</html>
