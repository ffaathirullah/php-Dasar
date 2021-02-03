<?php
$hari = ["senin","selasa", "rabu"];


// var_dump($hari);
// echo "<br>";
// print_r($hari);
// echo "<br>";
// echo $hari[1];
// $hari[] = "kamis";
// var_dump($hari);


// $angka = [2,3,4,6,6,7,3];
$mahasiswa = [
  ["fachrul faathirullah", "6706181008"],
  ["Agus", "6706181008"]
];
 ?>
 <!--
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
<style>
  div {
    width: 50px;
    height: 50px;
    background-color: salmon;
    text-align: center;
    line-height: 50px;
    float: left;
    margin: 3px;
  }
</style>
     <title></title>
   </head>
   <body>
<?php for ($i=0; $i <= 5; $i++) : ?>
  <div>
<?php echo $angka[$i]; ?>
  </div>
<?php endfor ?>
    </body>
 </html> -->
<!--
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      div {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        float: left;
        margin: 3px;
      }
    </style>
    <title></title>
  </head>
  <body>
    <?php foreach ($angka as $key ) : ?>
      <div>
         <?php echo $key ?>
      </div>
    <?php endforeach; ?>
  </body>
</html> -->



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
  <li><?= $mhs[0]; ?></li>
  <li><?= $mhs[1]; ?></li>
</ul>
<?php endforeach; ?>
  </body>
</html>
