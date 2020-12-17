<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      table, tr, td{
        border: 1px solid black;
      }
    </style>
    <title></title>
  </head>
  <body>
    <h2>Associate Array</h2>
    <?php
      $mobil = array(['merek'] => 'Toyota',
                      ['type'] => 'Fortuner',
                      ['year'] => 2017);
      echo "<table>
      <tr>
      <th> Key </th>
      <th> Value </th>
      </tr>";
      foreach ($mobil as $key => $value) {
        echo "<tr>
        <td>".$key."</td>
        <td>".$value."</td> </tr>";
      }
      echo "</table>";
     ?>
  </body>
</html>
