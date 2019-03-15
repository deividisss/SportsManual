<?php
    
    if($_POST['ID']){
        
        include("connect.php");
        $ID=mysql_escape_String($_POST['ID']);
$first=mysql_escape_String($_POST['firstCont']);

   //$first=$_POST'firstCont'] ;
        // $ID=$_POST['ID'] ;
  // echo $first;
      

           $sql = "update iranga set content='$first' where id='$ID'";
$sqlv=mysqli_query($db,$sql) or die ("Nesukaite");

    if($sqlv) // will return true if succefull else it will return false
{echo "pavyka";
// code here
}else{
echo "Klaida";}
}


?>
