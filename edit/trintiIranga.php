<?php
include 'connect.php';
  //echo "Prisijunge";
   $q=$_GET['q'] ;

   //echo $q;
 $q=rtrim($q, ",");

   //echo $q;
  $ulen="delete from iranga where id in($q)";

 // echo $ulen;
  $ulenv=mysqli_query($db,$ulen) or die ("Nesukaite");
  

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
