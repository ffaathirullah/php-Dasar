<?php
if ( !isset($_GET["nama"]) || !isset($_GET["nrp"]) || !isset($_GET["kelas"]) ) {
  header("Location: latihan1.php");
  exit;
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<ul>
  <li><?php echo $_GET["nama"];  ?></li>
  <li><?php echo $_GET["nrp"];  ?></li>
  <li><?php echo $_GET["kelas"];  ?></li>
</ul>
  </body>
</html>
