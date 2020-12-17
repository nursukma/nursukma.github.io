<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $a = true;
      $b = false;
      echo "nilai a and b adalah "; var_dump($a and $b);
      echo "<br> nilai a or b adalah "; var_dump($a or $b);
      echo "<br> nilai a xor b adalah "; var_dump($a xor $b);
      echo "<br> nilai a && b adalah "; var_dump($a && $b);
      echo "<br> nilai a || b adalah "; var_dump($a || $b);
      echo "<br> nilai !a || b adalah "; var_dump(!$a || $b);
     ?>
  </body>
</html>
