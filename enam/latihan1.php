<?php
$mahasiswa =
[["nama" => "Fachrul",
"nim" => "6706181008",
"kelas" => "true"
],
  ["nama" => "Agus",
  "nim" => "6706181736",
  "kelas" => "flase"]
];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Daftar Mahasiswa</h1>
          <ul>
    <?php foreach ($mahasiswa as $mhs ): ?>
        <li><a href="data.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nim"]; ?>&kelas=<?= $mhs["kelas"]; ?>">
          <?= $mhs["nama"]; ?></a></li>
    <?php endforeach; ?>
          </ul>
  </body>
</html>
