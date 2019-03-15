
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Nuotrauku ikelimas</title>
    </head>
    <body>
        <h1 style="text-align: center">Fotosesiju Galerija</h1>
<form action="nuotraukuIkelimas.php" method="post" enctype="multipart/form-data">
        Pasirinkti didele nuotrauka:<input type="file" name="image"/>
        <br><input type="submit" name="upload" value="Ikelti nuotraukas"/></form>
<?php

if (isset($_POST['upload'])){
    
     $image_name = $_FILES['image'] ['name'];
         $image_type = $_FILES['image'] ['type'];
         $image_size = $_FILES['image'] ['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
     


          move_uploaded_file($image_tmp_name,"uploaded/$image_name");
         
          echo "Nuotrauka ikelta sekminga";
          echo "<br><img src='uploaded/$image_name'><br>";
}    
    
?>
    </body>
</html>