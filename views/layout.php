<?php
include 'verifUser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"  href="img/IconoSinBorde.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Bootstrap-->
       
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

  
      <!-- Navbar -->
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- footerLogo -->
    <link rel="stylesheet" href="css/footerLogo.css">
 
    <!-- footer -->
     <link rel="stylesheet" href="css/footer.css">
    
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