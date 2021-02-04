<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>POST</title>
  </head>
  <body>
    <?php if (isset($_POST["submit"])): ?>
    <h1>Selamat Datang , <?= $_POST["namanya"] ?></h1>
    <?php endif; ?>
  </body>
</html>
