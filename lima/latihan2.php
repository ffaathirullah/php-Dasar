<?php
// $mahasiswa = [["fachrul faathirullah","6706181008","082118647226"],["Agus","6706181008","082118647226"]]
$mahasiswa =[["nama" => "Fachrul",
"nim" => "6706181008",
"kelas" => "true",
"gambar" => "1.jpg"
],
  ["nama" => "Agus",
  "nim" => "6706181736",
  "kelas" => "flase",
"gambar" => "2.jpg"]
];
 ?>
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $mhs ): ?>
  <ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>Nim : <?= $mhs[1]; ?></li>
    <li>No. Telephone : <?= $mhs[2]; ?></li>
  </ul>
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
<?php foreach ($mahasiswa as $mhs ): ?>
  <ul>
    <li><img src="<?php echo $mhs["gambar"]; ?>"></li>
    <li><?php echo $mhs["nama"]; ?></li>
    <li><?php echo $mhs["nim"]; ?></li>
    <li><?php echo $mhs["kelas"]; ?></li>
  </ul>
<?php endforeach; ?>
  </body>
</html>
