<?php
    
    if($_GET['ID']){
        
        include("connect.php");
   $first=$_GET['first'] ;
      $last=$_GET['last'] ;
            $ID=$_GET['ID'] ;
    echo $first;
      echo $last;
        echo $ID;

$sql = "update iranga set irangos_pav='$first' where id='$ID'";
mysqli_query($db,$sql) or die ("Nesukaite");

}
/*
    if($_GET['ID']){
        
        include("connect.php");
   $first=$_GET['first'] ;
      $last=$_GET['last'] ;
            $ID=$_GET['ID'] ;
    echo $first;
      echo $last;
        echo $ID;

        $id=mysqli_escape_String($_POST['id']);
$firstname=mysqli_escape_String($_POST['firstname']);
$lastname=mysqli_escape_String($_POST['lastname']);
$sql = "update fullnames set firstname='$first',lastname='$last' where id='$ID'";
mysqli_query($db,$sql) or die ("Nesukaite");

}*/
/*if($_POST['id'])
{
 
$id=mysqli_escape_String($_POST['id']);
$firstname=mysqli_escape_String($_POST['firstname']);
$lastname=mysqli_escape_String($_POST['lastname']);
$sql = "update fullnames set firstname='$firstname',lastname='$lastname' where id='$id'";
mysqli_query($db,$sql) or die ("Nesukaite");
echo json_encode($sql);
}*/
?>

