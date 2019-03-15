<?php
    
    if($_GET['ID']){
        
        include("connect.php");
   $first=$_GET['firstCont'] ;
            $ID=$_GET['ID'] ;

           $sql = "update iranga set content='$first' where id='$ID'";
mysqli_query($db,$sql) or die ("Nesukaite");

    
}


?>
