
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Nuotrauku ikelimas</title>
    </head>
    <body>
        <h1 style="text-align: center">Fotosesiju Galerija</h1>
<form action="keliamBase.php" method="post" enctype="multipart/form-data">
        Pasirinkti didele nuotrauka:<input type="file" name="image"/>
        <br><input type="submit" name="upload" value="Ikelti nuotraukas"/></form>
<?php
include 'connect.php';
  //echo "Prisijunge";
if (isset($_POST['upload'])){
    $allowed_extensions = array( "image/png", "image/jpg", "image/gif","image/jpeg", );
    $ok=1;
     $image_name = $_FILES['image'] ['name'];
         $image_type = $_FILES['image'] ['type'];
         $image_size = $_FILES['image'] ['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
     	$filepath = "uploaded/".$image_name;
        //echo $image_type."<br>";
	       
        if( !in_array( $_FILES[ "image" ][ "type" ], $allowed_extensions)){
         echo 'Netinka Pailaikomi formatai: png",jpg",gif,jpeg';
           exit; 
        }


            move_uploaded_file($image_tmp_name,$filepath);
         // move_uploaded_file($image_tmp_name,"uploaded/$image_name");
       




          echo "Nuotrauka ikelta sekminga";
          echo "<br><img src='uploaded/$image_name'><br>";

          $sql = "INSERT INTO paveiksleliai (image_name,image_path,image_type) VALUES ('$image_name','$filepath','$image_type')";
          //echo $image_name;

    if (mysqli_query($db, $sql)) {
    echo "Naujas irasas sekmingai sukurtas";
       
       }            
        else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}




 

          }


    
?>
    </body>
</html>