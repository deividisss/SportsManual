
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
     <title>SportsManual</title>
         <link type="text/css" rel="stylesheet" href="css/header.css" />

    </head>
    <body>
           <?php include 'header.php';?>
         <script src="//cdn.ckeditor.com/4.5.11/basic/ckeditor.js"></script>

        <h1 style="text-align: center">Raumenu grupiu ikelimas</h1>
<form action="ikeltiRaumenuGrupe.php" method="post" enctype="multipart/form-data">
        Pasirinkt nuotrauka: <input type="file" name="image"/><br><br>
Ivesk raumenu grupe: <input type="text" name="tekstas"><br><br>
      <textarea class="ckeditor"id="myInput" name="editor"></textarea><br>

        <input type="submit" name="upload" value="Ikelti nuotraukas"/></form>

        
        <script>
            CKEDITOR.replace('editor');
           
        </script>
  


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
	     $value=$_POST['tekstas'];
         $text = $_POST['editor'];
         echo $text; 

            if( !in_array( $_FILES[ "image" ][ "type" ], $allowed_extensions)){
             echo 'Netinka Pailaikomi formatai: png",jpg",gif,jpeg';
               exit; 
            }
             if(!isset($value) || trim($value) == '')
            {
               echo "<br> Neivestas pavadinimas";
                  exit; 
            }
                 if(!isset($text) || trim($text) == '')
            {
               echo "<br> Neivestas Straipsnis";
                  exit; 
            }
            move_uploaded_file($image_tmp_name,$filepath);
         // move_uploaded_file($image_tmp_name,"uploaded/$image_name");
       
       


          echo "Nuotrauka ikelta sekminga";
          echo "<br><img src='uploaded/$image_name'><br>";
          echo $value.'<br>';

          $sql = "INSERT INTO raumenu_grupes (raumenu_grupe,image_name,image_path,image_type,content) VALUES ( '$value','$image_name','$filepath','$image_type','$text')";
          //echo $image_name;

    if (mysqli_query($db, $sql)) {
    echo "Naujas irasas sekmingai sukurtas";
       
       }            
        else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);}


 /*   $sql = "INSERT INTO content (content) values('$text')";
          //echo $image_name;

    if (mysqli_query($db, $sql)) {
    echo "Naujas irasas sekmingai sukurtas";
       
       }            
        else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);}

 */

          }


    
?>
    </body>
</html>