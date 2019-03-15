<?php
    
    if($_GET['ID']){
        
        include("connect.php");
   $first=$_GET['firstNr'] ;
            $ID=$_GET['ID'] ;

            $query = mysqli_query($db, "SELECT * from iranga WHERE irangos_nr='$first'");

if(mysqli_num_rows($query) > 0){

    echo "Numeris jau uzimtas ir įrašas nebus atnaujintas";
}
else{
$sql = "update iranga set irangos_nr='$first' where id='$ID'";
mysqli_query($db,$sql) or die ("Nesukaite");

}
    
}

    /*if($_GET['ID']){
        
        include("connect.php");
   $first=$_GET['firstNr'] ;
            $ID=$_GET['ID'] ;

            $query = mysqli_query($db, "SELECT * from iranga WHERE irangos_nr='$first'");

if(mysqli_num_rows($query) > 0){

    echo "Numeris jau uzimtas";
    else{

$sql = "update iranga set irangos_nr='$first' where id='$ID'";
mysqli_query($db,$sql) or die ("Nesukaite");
echo "Irasas atnaujintas";

    }
}

*/
?>

