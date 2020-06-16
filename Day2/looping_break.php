<?php
    $array = array(1,2,3,4,5);
    $lenghtArray = count($array);
    echo 'Panjang Array = '.$lenghtArray.' <br>';
    //echo 'array = '.$array[0];
    //var_dump($array);
    foreach ($array as $value) {
      echo 'Value Foreach - Break = '.$value.', <br>';
      if ($value == 3)
      break;
    }

    echo '<br>';

    for($i=0; $i<$lenghtArray; $i++){
      echo 'Value Foreach - For = '.$array[$i].', <br>';
    }
