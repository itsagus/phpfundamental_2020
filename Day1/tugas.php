<?php

$nilai = 60;

echo "Nilai : {$nilai} <br>";

if ($nilai >= 80 and $nilai <= 100) {
  echo "Selamat Anda Lulus, dengan Grade A";
} elseif ($nilai >= 70 and $nilai <= 79) {
  echo "Selamat Anda Lulus, dengan Grade B";
} elseif ($nilai >= 60 and $nilai <= 69) {
  echo "Selamat Anda Lulus, dengan Grade C";
} elseif ($nilai < 60) {
  echo "Mohon Maaf, Anda Tidak Lulus";
} else {
  echo "Nilai tidak valid.";
}
