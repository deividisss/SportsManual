<?php
    if($_GET['ID']){
        
        include("connect.php");
   $first=$_GET['q'];
      $last=$_GET['last'] ;
            $ID=$_GET['ID'] ;
    echo $first;
      echo $last;
        echo $ID;


$sql = "update iranga set irangos_pav='$first' where id='$ID'";
mysqli_query($db,$sql) or die ("Nesukaite");

}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
