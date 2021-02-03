<?php
 function salam($nama='fachrul')
{
  return "Selamat Datang $nama";
}
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php echo salam() ?>
   </body>
 </html>
