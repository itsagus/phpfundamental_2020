<?php
  // Create database connection using config file
  include_once("koneksi.php");

  //Fetch all user data from database
  $result = mysqli_query($connect, "SELECT * FROM siswa");

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Halaman Siswa</title>
   </head>
   <body>
     <br>
     <a href="tambah_siswa.php">Tambah Data Siswa</a>
     <br>
     <br>
     <table width="80%" border="1">
       <tr>
         <th>No</th>
         <th>No Induk</th>
         <th>Nama</th>
         <th>No Telepon</th>
         <th>Alamat</th>
       </tr>
       <?php
          $no = 1;
          while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$user_data['no_induk']."</td>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['no_telepon']."</td>";
            echo "<td>".$user_data['alamat']."</td>";
            echo "</tr>";
          }

        ?>
     </table>

   </body>
 </html>
