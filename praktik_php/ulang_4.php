<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $number = 5;
      $factorial = 1;
      do {
        $factorial *= $number;
        $number = $number -1;
      } while ($number > 0);
      echo "$factorial";
     ?>
  </body>
</html>
