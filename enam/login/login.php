<?php
//apakah tombol sudah ditekan
if (isset($_POST["submit"])) {
  if ($_POST["username"] == "admin" && $_POST["password"] = "12345") {
    header("Location: admin.php");
  }else {
    $error = true;
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <?php if (isset($error)) : ?>
        <p>Username atau Password Salah</p>
    <?php endif; ?>
  </head>
  <body>
    <h1>Login Admin</h1>
    <ul>
      <form action="" method="post">
        <li><label for="username">Username :</label>
        <input type="text" name="username" id="username">
        </li>
        <li><label for="password">Password :</label>
        <input type="password" name="password" id="password">
        </li>
        <button type="submit" name="submit">Login</button>
      </form>
    </ul>
  </body>
</html>
