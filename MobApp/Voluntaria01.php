<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  for ($i=1; $i <= 100; $i++) {
    if ( $i % 5 == 0 && $i % 3 == 0 ) {
      echo 'fizzbuzz <br>';
    } else if ($i % 3 == 0) {
      echo 'fizz <br>';
    } else if ($i % 5 == 0) {
      echo 'buzz <br>';
    } else {
      echo $i . '<br>';
    }
echo "Modificacion para despliegue";
  }
?>
  </body>
</html>
