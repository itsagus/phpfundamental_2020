<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Taraaaa</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  </head>
  <body>
    <div class="" id="card-title">
      <h2>Seberapa Besar Kekuatan</br> Cintamu ?</h2>
      <div class="underline-title"></div>
    </div>
    <div id="card">
      <div class="" id="card-title">
        <h4>CUPU, Kekuatan Cintamu hanya <? echo $banyak = $_POST['banyak']." Lautan"?></h4>
        <div class="underline-title"></div>
      </div>
      <center>
      <a href="form_katakan_cinta.php" id="signup">Mau re-check ulang ?</a>
      <br>
    </center>
    <?php
      $siapa = $_POST['siapa'];
      $banyak = $_POST['banyak'];
      // echo "<h3>Aku Cinta Wanita bernama ".$siapa."<br>";
      // echo "<h3>Aku Cinta Wanita sebanyak ".$banyak." Lautan <br>";
      for ($i=0; $i <= $banyak ; $i++) {

        echo "<li>Cinta ".$siapa." ".$banyak." Lautan"."<br>";
        echo "<br>";
      }
    ?>


    </div>
  </body>
</html>
