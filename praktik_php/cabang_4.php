<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $tujuan = "Malang";
      echo "Mau main kemana? ".$tujuan."<br>";
      echo "<br> pesan: ";
      switch ($tujuan) {
        case 'Batu':
          echo "<b>jangan lupa bawa jaket</b>";
          break;
        case 'Bandung':
          echo "<b>awas kalau belanja lapar mata</b>";
          break;
        case 'Bali':
          echo "<b>pakai sunblock spf 50</b>";
          break;
        default:
          echo "<b>yaudah belajar aja</b>";
          break;
      }
     ?>
  </body>
</html>
