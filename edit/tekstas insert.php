
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Nuotrauku ikelimas</title>
    </head>
    <body>
        <h1 style="text-align: center">Fotosesiju Galerija</h1>
<form action="tekstas insert.php" method="post" enctype="multipart/form-data">
        //Pasirinkti didele nuotrauka:<input type="file" name="image"/><br>
 <input type="text" name="tekstas">
        <br><input type="submit" name="upload" value="Ikelti nuotraukas"/></form>
<?php
$db=mysqli_connect('localhost','root','','kacelke') or die('Neprisijunge');

  if($db==true)
  echo "Prisijunge";
if (isset($_POST['upload'])){
    
  


     $value=$_POST['tekstas'];
          echo $value;



          //$sql = "INSERT INTO raumenu_grupes (image_name,image_path,image_type) VALUES ('$image_name','$filepath','$image_type')";
          //echo $image_name;

}

    
?>
    </body>
</html>