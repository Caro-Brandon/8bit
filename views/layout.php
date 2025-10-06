<?php
session_start();
include '../verifUser.php'; // verifica sesión
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  href="../img/IconoSinBorde.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8bit</title>
</head>
<body>
  <header>
    <!-- incluimos el nav -->
    <?php include 'navbar.php'; ?>   
  </header>
 


   
  <main>
    <?php
    $section = (isset($section)) ? $section : 'home';
    require_once $section . '.php';
    ?>
  </main>
   
  

<!-- incluimos el footerLogo -->
<?php include 'footerLogo.php'; ?>

 <footer>
  <!-- incluimos el footer -->
<?php include 'footer.php'; ?>
</footer>




 </body>
</html>