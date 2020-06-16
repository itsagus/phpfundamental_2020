<?php
// Cek Koneksi
include_once("koneksi.php");

// cek form user update
  if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    //Update user
    $result = mysqli_query($connect, "UPDATE user SET nama='$nama',alamat='$alamat' WHERE id=$id");
    // Redirect ke Homepage setelah update
    header("Location: view.php");
  }
 ?>
 <?php
    $id =$_GET['id'];
    $result = mysqli_query($connect, "SELECT * FROM user WHERE id=$id");
    while ($user_data = mysqli_fetch_array($result)) {

      $nama = $user_data['nama'];
      $alamat = $user_data['alamat'];
    }


  ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit User data</title>
  </head>
  <body>
    <a href="view.php">HOME</a>
    <br><br>
    <form class="" action="edit.php" method="post" name="update_user">
      <table border="0">


      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" value="<?php echo $alamat;?>"></td>
      </tr>
      <tr>
        <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
        <td><input type="submit" name="update" value="update"></td>
      </tr>
      </table>

    </form>

  </body>
</html>
