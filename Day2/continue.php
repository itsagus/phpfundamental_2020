<?php
    $array = array(1,2,3,4,5);
    $lenghtArray = count($array);
    echo 'Panjang Array = '.$lenghtArray.' <br>';
    //echo 'array = '.$array[0];
    //var_dump($array);
    foreach ($array as $value) {
      //echo 'Value Foreach - Break = '.$value.', <br>';
      //Skip nilai $value 1 dan 2
      if ($value < 3)
          continue;


    echo 'Value = '.$value.', ';
  }
