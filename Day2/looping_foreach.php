<?php
    $array = array(1,2,3,4,5);
    $lenghtArray = count($array);
    echo 'Panjang Array = '.$lenghtArray.' <br>';
    //echo 'array = '.$array[0];
    //var_dump($array);
    foreach ($array as $value) {
      echo 'value = '.$value.', <br>';
    }

    echo '<br>';

    for($i=0; $i<$lenghtArray; $i++){
      echo 'value = '.$array[$i].', <br>';
    }
