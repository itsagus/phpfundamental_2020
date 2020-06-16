<?php
    $number = array (1, 2, 3, 4, 5, 'Agus', 'KapanG');

    foreach ($number as $key => $value) {
      echo 'Value index ke '.$key.' = '.$value.'<br>';
    }

    echo "<br>";

    $numbers[0] = 'satu';
    $numbers[1] = 'dua';
    $numbers[3] = 'tiga';
    array_push($numbers, 'empat');
    array_push($numbers, 'lima');

    foreach ($numbers as $key => $val) {
      echo 'Value index ke '.$key.' = '.$value.'<br>';
    }
