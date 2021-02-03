<?php
// for ($i=0; $i < 5; $i++) {
//     echo "hello fachrul <br>";
// }
// $a=0;
// while ($a <= 5) {
// echo "hello world <br>";
// $a++;
// }
// $a = 1;
// do {
//   echo "hallo";
//   $a++;
// } while ($a <= 10);

 ?>
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // for ($i=1; $i <= 3; $i++) {
    //   echo "<tr>";
    //   for ($j=1; $j <=3 ; $j++) {
    //       echo "<td>$i, $j</td>";
    //   }
    //   echo "</tr>";
    // }?>
  </body>
</html> -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >
      .warna-baris{
        background-color: silver;
      }
    </style>
  </head>
  <body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i=1; $i <= 5 ; $i++) : ?>
          <?php if($i%2 ==1) :?>
            <tr class="warna-baris">
          <?php else :?>
              <tr>
          <?php endif ?>
        <?php for ($j=1; $j <= 5 ; $j++) : ?>
              <td>
                <?= "$i,$j"; ?>
              </td>
            <?php endfor  ?>
          </tr>
       <?php endfor ?>
    </table>
  </body>
</html>
