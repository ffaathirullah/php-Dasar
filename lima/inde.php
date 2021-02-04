<?php
$hari = ["senin", "selasa", "rabu"];
$angkas = [[1,2,3],[4,5,6],[7,8,9]];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style media="screen">
    .kotak {
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      float: left;
      margin: 3px;
    }
    .clear{
      clear: both;
    }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php foreach ($angkas as $angka): ?>
<?php foreach ($angka as $a ): ?>
    <div class="kotak">
      <?php echo $a; ?>
    </div>
  <?php endforeach; ?>
  <div class="clear">

  </div>
<?php endforeach; ?>
  </body>
</html>
