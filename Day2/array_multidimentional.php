<?php
  $murid = array(
    "Budi" => array (
      "Matematika" => 70,
      "Bahasa Indonesia" => 80,
      "Bahasa Inggris" => 90
    ),

    "Tono" => array (
      "Matematika" => 60,
      "Bahasa Indonesia" => 70,
      "Bahasa Inggris" => 80
    ),

    "Gadis" => array (
      "Matematika" => 55,
      "Bahasa Indonesia" => 75,
      "Bahasa Inggris" => 95
    ),
  );

  echo "<b>SHOW ALL</b><br>";
  foreach ($murid as $nama => $nilai) {
    foreach ($nilai as $mapel => $value) {
      echo "Nilai ".$nama." dengan Mata Pelajaran ".$mapel." adalah ".$value."<br>";
    }
  }

  echo "<br>";
  echo "<b>HANYA menampilkan Nama dengan Nilai Matematika >=60 <br></b>";
  foreach ($murid as $nama => $nilai) {
    foreach ($nilai as $mapel => $value) {
      if ($value >=60 && $mapel == "Matematika")
      echo "Nilai ".$nama." dengan Mata Pelajaran ".$mapel." adalah ".$value."<br>";
    }
  }

 ?>
