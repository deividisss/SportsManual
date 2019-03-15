<?php

 //   echo  $image_size;

 //   echo "bybis";
   include 'connect.php';

$allowed_extensions = array( "image/png", "image/jpg", "image/gif","image/jpeg", );



     $image_name = $_FILES['image'] ['name'];
         $image_type = $_FILES['image'] ['type'];
         $image_size = $_FILES['image'] ['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
     	$filepath = "uploaded/iranga/".$image_name;
           
          $ID=$_POST['formid'];
           //$ID=1;
   //echo   $value;

            if( !in_array( $_FILES[ "image" ][ "type" ], $allowed_extensions)){
             echo 'Klaida netinka Pailaikomi formatai: png",jpg",gif,jpeg';
               exit; 
            }
                      if (  strlen($image_name)  >35 ) {
    echo "Klaida per ilgas paveikslelio pavadinimas pavadinimas";
          exit; 
        }
   
            move_uploaded_file($image_tmp_name,$filepath);
         // move_uploaded_file($image_tmp_name,"uploaded/$image_name");
       



         
         $sql = "INSERT INTO iranga (image_name,image_path,image_type) VALUES ('$image_name','$filepath','$image_type')";
         
          //echo $image_name;
          $sql = "update iranga set image_name='$image_name',image_path='$filepath',image_type='$image_type' where id='$ID'";
    if (mysqli_query($db, $sql)) {
          echo $filepath;
    //echo "Naujas irasas sekmingai sukurtas";
      
       
       }            
        else {
               // echo  	$filepath;
    echo "Klaida Error: " . $sql . "<br>" . mysqli_error($db);}



 /*   $sql = "INSERT INTO content (content) values('$text')";
          //echo $image_name;

    if (mysqli_query($db, $sql)) {
    echo "Naujas irasas sekmingai sukurtas";
       
       }            
        else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);}

 */



?>
