<?php
    function penjumlahan($a=1, $b=5){
      $c = $a + $b;
      return 'Hasil Penjumlahan '.$a.' dan '.$b.' adalah '.$c;
    }

    function pengurangan($a, $b){
      $c = $a - $b;
      return 'Hasil Pengurangan '.$a.' dan '.$b.' adalah '.$c;
    }

    function shift_up($gigi = 'N'){
      if ($gigi == 'N') $gigi =1;
       else $gigi = $gigi +1;
       return 'Gigi Mobil = '.$gigi;
    }


    // $x = 50;
    // $y = 10;
    // $hasil = pengurangan($x, $y);
    // echo $hasil;

    $math = penjumlahan();
    $rs = shift_up(2);
    echo $math;
 ?>
