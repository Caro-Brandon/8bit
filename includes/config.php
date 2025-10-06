<?php
$conex = mysqli_connect("localhost","root","","8bit");
 
//error x las dudas si falla la bd 
if(!$conex){
    die('Error de Conexión: ' . mysqli_connect_error());
}

 
   
?>